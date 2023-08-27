<?php
include "./include/connection.php";
include "./include/header.php";

?>
<link rel="stylesheet" href="./assets/css/mystyle.css">

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="container-fluid mymodel">
            <div class="card-addcatagory" style="margin-top:100px;">


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
                    <div class="section-body">
                        <div class="row ">
                            <div class="col-12 col-md-3 col-lg-3">
                                <div class="card">
                                    <form id='editform'>
                                        <div class="card-header">
                                            <h4>Catagories</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Catagories Name</label>
                                                <input type="text" oninput="cataname()" id='cname' name="cname"
                                                    onblur="removespantext1()" class="form-control" required>
                                            </div>
                                            <span id="valid"></span>

                                            <div class="form-group mb-0">
                                                <label>Description</label>
                                                <textarea class="form-control" onblur="removespantext1()"
                                                    oninput="catdes()" id="cdes" disabled name="cdes"
                                                    required></textarea>
                                            </div>
                                            <span id="valid1"></span>
                                        </div>
                                        <div class="card-footer text-right">
                                            <input name="submit" id="submit1" type="submit" class="btn btn-primary"
                                                value="Add Catagory">
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>View Catagories</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport"
                                                style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Catagories Name</th>
                                                        <th>Catagories Description</th>
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
    <?php
    include "./include/footer.php";
  ?>
    <script src="./assets/js/addcatagories.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#submit1').on('click', function(e) {
            e.preventDefault();
            var myformData = new FormData(editform);
           
            $.ajax({
                url: './ajax/add_ajaxcatagory.php',
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
                        viewCatagorys();
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
        viewCatagorys();

        function viewCatagorys() {

            $.ajax({
                url: './ajax/view_ajaxcatagory.php',
                method: 'POST',
                success: function(res) {
                    $('#tbody').html(res);

                }
            })
        }
        // $('#update').on("click", function() {
        //     alert('thanks for it ')
        // var del = $(this).data("del");
        // var msg = this;
        // $.ajax({
        //     url: "./ajaxdeleted.php",
        //     method: "POST",
        //     data: {
        //         delete: del
        //     },
        //     success: function(res) {
        //         if (res == 1) {
        //             $(msg).closest("tr").fadeOut();
        //             alert("data has been deleted");
        //         }
        //     }
        // })
        // })
        $(document).on('click', '#deleted', function() {

            var id = $(this).data('delet')
            var delid = this;
            $.ajax({
                url: './ajax/delete_ajaxcatagory.php',
                method: 'POST',
                type: 'POST',
                cache: false,
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

            e.preventDefault();
            var id = $(this).data('up');
            $('.mymodel').show();

            $.ajax({
                url: './ajax/updated_data.php',
                method: 'POST',
                data: {
                    updated: id
                },
                success: function(res) {
                    $('.card-addcatagory').html(res);
                }

            })

        })
        $(document).on('click', '#submited', function(e) {

            e.preventDefault();
            var formdata = new FormData(catagory_editform);

            $.ajax({
                url: './ajax/updated_submited.php',
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

                        setInterval(settimeoutd, 4000);

                        function settimeoutd() {
                            $('.mymodel').hide();
                        }
                        viewCatagorys()
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