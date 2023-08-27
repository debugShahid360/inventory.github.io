<?php
 include "./include/header.php";
 include "./include/connection.php";
?>
<link rel="stylesheet" href="./assets/css/mystyle.css">

<body>

    <div class="loader"></div>
    <div id="app">
        <div class="container-fluid mymodel">
            <div class="model-form">


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
                        <div class="row  ">
                            <div class="col-12 col-md-4 col-lg-4   ">
                                <div class="card">
                                    <form id="addquantity">
                                        <div class="card-header">
                                            <h4>Add Quantity </h4>
                                        </div>
                                        <div class="card-body">


                                            <br>
                                            <div class="input-group">

                                                <input type="text" name="qname" oninput="qunamee()"
                                                    onblur="removespantext()" id="quname" placeholder="Quantity name"
                                                    class="form-control">

                                            </div>
                                            <br><br>
                                            <span id="v8"></span>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button name="submit" id="submit" class="btn btn-success">Add
                                                Quantity</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>View Quantity</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport"
                                                style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Quantity Name</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
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
        $('#submit').on('click', function(e) {
            e.preventDefault();
            var addquantitys = new FormData(addquantity);

            $.ajax({
                url: './ajax/add_ajaxquantity.php',
                method: 'POST',
                type: 'POST',
                contentType: false,
                processData: false,
                data: addquantitys,
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
                        viewQuantity();
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
        viewQuantity();

        function viewQuantity() {

            $.ajax({
                url: './ajax/view_ajaxquantity.php',
                method: 'POST',
                success: function(res) {

                    $('#tbody').html(res);

                }
            })
        };

   
    $(document).ready(function() {
        $(document).on('click', '#deleted', function(e) {
            e.preventDefault();
            var id = $(this).data('del');
            var delid = this;
            $.ajax({
                url: './ajax/delete_ajaxquantity.php',
                method: 'POST',
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
                url: './ajax/updated_data_quantity.php',
                method: 'POST',
                data: {
                    updated: id
                },
                success: function(res) {
                    $('.model-form').html(res);
                }

            })

        })
        $(document).on('click', '#submited', function(e) {
            
            e.preventDefault(); 
            var formdata=new FormData(editform);
           
            $.ajax({
                url: './ajax/updated_submitted_quantity.php',
                method: 'POST',
                type: 'POST',
                contentType: false,
                processData: false,
                data:formdata,
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
                        
                        setInterval(settimeoutd,4000);

                        function settimeoutd(){
                            $('.mymodel').hide();
                        }
                        viewQuantity();
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
})
    </script>
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html>