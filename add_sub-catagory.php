<?php
 include "./include/connection.php";
 include "./include/header.php";

?>
 
<body>
<link rel="stylesheet" href="./assets/css/mystyle.css">
    <div class="loader"></div>
    <div id="app">
        <div class="container-fluid mymodel">
            <div class="card-addsubcatagory" style="margin-top:150px; ">
            </div>
        </div>
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php
        include "./include/navebar.php";
      ?>

            <?php
        include "./include/aside.php";
       ?>

            <!-- Main Content -->
            <div class="main-content ">
                <section class="section ">
                    <div class="section-body ">
                        <div class="row">
                            <div class="col-12 col-md-3 col-lg-3 ">
                                <div class="card ">
                                    <form id="add_sub_catagory">
                                        <div class="card-header">
                                            <h4>Sub Catagories</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>choose catagories</label>
                                                <select name="catagory" class="form-control " id="">
                                                    <option selected>choose a catagory</option>
                                                    <?php
                                                $sql="SELECT * FROM `catagories`";
                                                $run=mysqli_query($conn,$sql);

                                                while($fet=mysqli_fetch_assoc($run)){
                                                    ?>
                                                    <option value="<?php echo $fet['cid']?>"><?php echo $fet['cname']?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                                </select>
                                            </div>
                                            <div class="card-body p-0 m-0">
                                                <div class="form-group">
                                                    <label> Sub Catagories Name</label>
                                                    <input type="text" id="subcatname" oninput="subcataname()"
                                                        onblur="removespantext2()" name="subname" class="form-control">
                                                </div>
                                                <span id="v1"></span>

                                                <div class="form-group mb-0">
                                                    <label>Sub Catagories Description</label>
                                                    <textarea class="form-control" onblur="removespantext2()"
                                                        id="subcatdes" oninput="subcatades()" disabled
                                                        name="subdes"></textarea>
                                                </div>
                                                <span id="v2"></span>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button name="submit" type='submit' id="submit"
                                                    class="btn btn-primary">Add Sub Catagory</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>View Sub Catagories</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport"
                                                style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Main Catagory</th>
                                                        <th>Sub Catagories Name</th>
                                                        <th> Sub Catagories Description</th>
                                                        <th>Date</th>
                                                        <th>time</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>
                </section>
            </div>



        </div>

    </div>
    </div>
    <?php
    include "./include/footer.php";
  ?>
    <script src="./assets/js/addcatagories.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#submit').on('click', function(e) {
            e.preventDefault();
            var myformData = new FormData(add_sub_catagory);

            $.ajax({
                url: './ajax/add_ajaxsubcatagory.php',
                method: 'POST',
                type: 'POST',
                contentType: false,
                processData: false,
                data: myformData,
                success: function(res) {
                    if (res == 1) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: 'Your data has been inserted '
                        })
                        viewSubCatagorys();
                    } else {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: 'You have a Error'
                        })
                    }
                }
            });

        })
        viewSubCatagorys()

        function viewSubCatagorys() {

            $.ajax({
                url: './ajax/view_ajaxsubcatagory.php',
                method: 'POST',
                success: function(res) {

                    $('#tbody').html(res);

                }
            })
        }

        $(document).on('click', '#deleted', function(e) {

            e.preventDefault()
            var id = $(this).data('del');
            var delid = this;
            $.ajax({
                url: './ajax/delete_ajaxsubcatagory.php',
                method: 'POST',
                type: 'POST',
                data: {
                    deleted: id
                },
                success: function(res) {
                    if (res == 1) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })



                        Toast.fire({
                            icon: 'success',
                            title: 'Your Data has been  Deleted'
                        })
                        $(delid).closest('tr').fadeOut();

                    } else {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: 'You have a Error'
                        })
                    }
                }
            })

        })
        $(document).on('click', '#update', function(e) {

            e.preventDefault()
            $('.mymodel').show();
            var id = $(this).data('up');


            $.ajax({
                url: './ajax/updated_data_subcatagory.php',
                method: 'POST',
                type: 'POST',

                data: {
                    updated: id

                },
                success: function(res) {

                    $('.card-addsubcatagory').html(res);

                }
            })

        })

        $(document).on('click', '#submited', function(e) {

            e.preventDefault();
            var formdata = new FormData(viewmodelsubcatagory);

            $.ajax({
                url: './ajax/updated_submited_subcatagory.php',
                method: 'POST',
                type: 'POST',
                contentType: false,
                processData: false,
                data: formdata,
                success: function(res) {
                  
                    if (res == 1) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: 'Your Data has been  Updated'
                        })
                        viewSubCatagorys();
                        setInterval(settimeoutd, 4000);

                        function settimeoutd() {
                            $('.mymodel').hide();
                        }

                    } else {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: 'You have a Error'
                        })
                    }
                }

            })

        })
        $(document).on('click', '#close-btn', function() {
            $('.mymodel').hide();
        })
    })
    </script>
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html>