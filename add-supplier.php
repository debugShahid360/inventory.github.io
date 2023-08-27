<?php
 include "./include/header.php";
 include "./include/connection.php";

?>

<body>
    <link rel="stylesheet" href="./assets/css/mystyle.css">
    <div class="loader"></div>
    <div id="app">
        <div class="container-fluid mymodel">
            <div class="card-supplier w-75" style="margin-top: 100px;">


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
                        <div class="row ">
                            <div class="col-12 col-md-3 col-lg-3">
                                <div class="card">
                                    <form id="add_supplier">
                                        <div class="card-header">
                                            <h4>Supplier name</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Supplier Name</label>
                                                <input type="text" oninput="supnamee()" name="supname" id="supname"
                                                    onblur="removespantext3()" class="form-control">
                                            </div>
                                            <span id="v3"></span>
                                            <div class="form-group">
                                                <label>Email Address </label>
                                                <input type="email" name="supemail" class="form-control" id='supemail'
                                                    onblur="removespantext3()" oninput="supemaill()" disabled
                                                    id="supemail">
                                            </div>
                                            <span id="v4"></span>
                                            <div class="form-group">
                                                <label>Contact no</label>
                                                <input type="tel" name="supcontact" oninput="supcontactnom()"
                                                    onblur="removespantext3()" disabled id="supcontactno"
                                                    placeholder="923011234905" class="form-control">
                                            </div>

                                            <span id="v5"></span>
                                            <div class="form-group mb-0">
                                                <label>Company Name</label>
                                                <input type="text" onblur="removespantext3()" disabled
                                                    oninput="supcompanye()" id="supcompany" name="supcompanyname"
                                                    class="form-control">
                                            </div>
                                            <span id="v6"></span>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button name="submit" id="submit3" type="submit" class="btn btn-success">Add
                                                Supplier</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>View Supplier</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport"
                                                style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Supplier Name</th>
                                                        <th>Supplier Email Address</th>
                                                        <th>Contact no</th>
                                                        <th>Company name</th>
                                                        <th>date</th>
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
        $('#submit3').on('click', function(e) {
            e.preventDefault();
            var myformData = new FormData(add_supplier);

            $.ajax({
                url: './ajax/add_ajaxsupplier.php',
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
                        viewSupplier();
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
        viewSupplier();

        function viewSupplier() {

            $.ajax({
                url: './ajax/view_ajaxsupplier.php',
                method: 'POST',
                success: function(res) {

                    $('#tbody').html(res);

                }
            })
        }
        // $('#update').on("click", function() {
        //     alert('thanks for it ')
        //     var del = $(this).data("del");
        //     var msg = this;
        //     $.ajax({
        //         url: "./ajaxdeleted.php",
        //         method: "POST",
        //         data: {
        //             delete: del
        //         },
        //         success: function(res) {
        //             if (res == 1) {
        //                 $(msg).closest("tr").fadeOut();
        //                 alert("data has been deleted");
        //             }
        //         }
        //     })
        // })
        $(document).on('click', '#deleted', function(e) {

            e.preventDefault()
            var id = $(this).data('del');
            var delid = this;
            $.ajax({
                url: './ajax/delete_ajaxsupplier.php',
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

                        $(delid).closest('tr').fadeOut();

                        Toast.fire({
                            icon: 'success',
                            title: 'Your Data has been  Deleted'
                        })


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
                url: './ajax/updated_data_supplier.php',
                method: 'POST',
                data: {
                    updated: id
                },
                success: function(res) {
                    $('.card-supplier').html(res);
                }

            })

        })
        $(document).on('click', '#submited', function(e) {

            e.preventDefault();
            var formdata = new FormData(viewmodelsupplier);

            $.ajax({
                url: './ajax/updated_submitted_supplier.php',
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
                        viewSupplier();
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