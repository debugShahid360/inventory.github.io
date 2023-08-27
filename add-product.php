<?php
 include "./include/header.php";
 include "./include/connection.php";
 


?>
<link rel="stylesheet" href="./assets/css/mystyle.css">

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="container-fluid mymodel">
            <div class="card-addcatagory" style="margin-top:-50px;">


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
                        <div class="row justify-content-center ">
                            <div class="col-12 col-md-6 col-lg-6  ">
                                <div class="card">
                                    <form id="add_product">
                                        <div class="card-header">
                                            <h4>Product </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">


                                                <select name="cat1" onchange="s1()" class="form-control" id="catagory">
                                                    <option selected>Choose a catagory</option>
                                                    <?php 
                                                        
                                                 $csql="SELECT * FROM `catagories`";
                                                 $crun=mysqli_query($conn,$csql);
                                                 
                                                
                                                while($cfet=mysqli_fetch_assoc($crun)){
                                                    
                                                  
                                                    ?>
                                                    <option name="val" value="<?php echo $cfet['cid']?> ">

                                                        <?php echo $cfet['cname'];?></option>
                                                    <?php
                                                   
                                                }
                                              
                                                    ?>
                                                </select>
                                                <select name="subcatagory" onchange="s2()" disabled id="subcatagory"
                                                    class="form-control">
                                                    <option selected>Choose a sub catagory</option>
                                                    <?php 
                                                  
                                                $sbsql="SELECT * FROM `subcatagorys`";
                                                $sbrun=mysqli_query($conn,$sbsql);
                                                while($sbfet=mysqli_fetch_assoc($sbrun)){
                                                    ?>
                                                    <option value="<?php echo $sbfet['subid']?>">
                                                        <?php echo $sbfet['subname'];?></option>
                                                    <?php
                                                }
                                                    ?>
                                                </select>
                                            </div>

                                            <br><br>
                                            <div class="form-group">

                                                <select name="supplier" id='supplier' onchange="s3()" disabled
                                                    class="form-control">
                                                    <option selected>Choose a supplier</option>
                                                    <?php 
                                                $susql="SELECT * FROM `supplier`";
                                                $surun=mysqli_query($conn,$susql);
                                                while($supfet=mysqli_fetch_assoc($surun)){
                                                    ?>
                                                    <option value="<?php echo $supfet['supid']?>">
                                                        <?php echo $supfet['supname'];?></option>
                                                    <?php
                                                }
                                                    ?>
                                                </select>

                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <input type="text" id="pname" oninput="prname()"
                                                    onblur="removespantext()" disabled name="pname"
                                                    placeholder="Product Name" class="form-control">
                                                <input type="text" id="pcode" disabled onchange="s5()"
                                                    oninput="prcode()" onblur="removespantext()" name="pcode"
                                                    placeholder="Product Code" class="form-control">
                                            </div>
                                            <span id="v7"></span>
                                            <br><br>
                                            <div class="input-group">

                                                    <select name="quantity" id='quantity' onchange="s6()" disabled
                                                        class="form-control">
                                                        <option selected>Choose the specific Quantity</option>
                                                        <?php
                                                        $qrsql="SELECT * FROM `quantity_data`";
                                                        $qrrun=mysqli_query($conn,$qrsql);
                                                    
                                                        while($qrfet=mysqli_fetch_assoc($qrrun)){
                                                            ?>
                                                        <option value="<?php echo $qrfet['qid']?>">
                                                            <?php echo $qrfet['qname']?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                    </select>
                                                <div class="form-group">

                                                    <select name="supplier" onchange="s7()" disabled id='company'
                                                        class="form-control">
                                                        <option selected>Choose a company</option>
                                                        <?php 
                                                        $susql="SELECT * FROM `supplier`";
                                                        $surun=mysqli_query($conn,$susql);
                                                        while($supfet=mysqli_fetch_assoc($surun)){
                                                            ?>
                                                        <option value="<?php echo $supfet['supid']?>">
                                                            <?php echo $supfet['supcompanyname'];?></option>
                                                        <?php
                                                            }
                                                                ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="input-group">

                                                <input type="number" oninput="s8()" disabled id="pprice"
                                                    placeholder="Whole Price" name="pprice" class="form-control">
                                                <input type="number" oninput="s9()" disabled id="supply"
                                                    placeholder="Quantity" name="supply" class="form-control">
                                            </div>


                                            <br><br>
                                            <div class="input-group">

                                                <input type="file" id="img" onchange="s10()" onmouseleave="s11()"
                                                    disabled name="pimage" alt="picture" class="form-control ">
                                            </div>
                                            <br>
                                            <div class="">

                                                <label for="" class="mx-3"><b> Product</b></label>

                                                <input type="radio" id="statu" name="online" disabled value="online"
                                                    class="ml-3 ">online


                                                <input type="radio" id="status" name="online" disabled value="offine"
                                                    class="ml-3 ">offline


                                            </div>

                                            <div class="card-footer text-right">
                                                <button name="submit" id="submited" class="btn btn-success">Add
                                                    Product</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="overflow-x:auto">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>View Product</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport"
                                                style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Catagory Name</th>
                                                        <th>Sub Catagory Name</th>
                                                        <th>Supplier Name</th>
                                                        <th>Product name</th>
                                                        <th>Product image</th>
                                                        <th>Product code</th>
                                                        <th>Measurement</th>
                                                        <th>Company name</th>
                                                        <th>Whole price </th>
                                                        <th>Supply </th>
                                                        <th>Status </th>
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
        $('#submited').on('click', function(e) {
            e.preventDefault();
            var myformData = new FormData(add_product);

            $.ajax({
                url: './ajax/add_ajaxproduct.php',
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
                        viewProduct();
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
        viewProduct();

        function viewProduct() {
            $.ajax({
                url: './ajax/view_ajaxproduct.php',
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
        $(document).on('click', '#deleted', function() {
            var id = $(this).data('del')
            var delid = this;

            $.ajax({
                url: './ajax/delete_ajaxproduct.php',
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

            e.preventDefault();
            var id = $(this).data('up');
            $('.mymodel').show();

            $.ajax({
                url: './ajax/updated_data_product.php',
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
            var formdata = new FormData(product_editform);

            $.ajax({
                url: './ajax/updated_submited_product.php',
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
                        viewProduct();
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