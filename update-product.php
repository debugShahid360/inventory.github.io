<?php
 include "./include/header.php";
 include "./include/connection.php";
 $up=$_GET['up'];
 $prosql="SELECT * FROM `product_data` INNER JOIN `catagories` ON `cat1`=`cid` INNER JOIN `subcatagorys` ON `subcatagory`=`subid` INNER JOIN `quantity_data` ON `quantity`=`qid` INNER JOIN `supplier` ON `supplier`=`supid` WHERE `pid`='$up'";
 $prorun=mysqli_query($conn,$prosql);
 $profet=mysqli_fetch_assoc($prorun);

if(isset($_POST['submit'])){
 $cat1=strtolower(mysqli_real_escape_string($conn,$_POST['cat1']));
 $subcatagory=mysqli_real_escape_string($conn,$_POST['subcatagory']);
 $pname=mysqli_real_escape_string($conn,$_POST['pname']);
 $pcode=mysqli_real_escape_string($conn,$_POST['pcode']);
 $pprice=mysqli_real_escape_string($conn,$_POST['pprice']);
 $psaleprice=mysqli_real_escape_string($conn,$_POST['psaleprice']);
 $supplier=mysqli_real_escape_string($conn,$_POST['supplier']);
 $pimage=$_FILES['pimage']['name'];
 date_default_timezone_set("Asia/Karachi");
 $pdate=date("d-m-Y");
 $ptime=date("h:i:s a");

 $exe=strtolower(pathinfo($pimage,PATHINFO_EXTENSION));
 $arr=array("jpg","jpeg","png");
 

 $psql="SELECT * FROM `product_data` WHERE `pcode`='$pcode' and `pname`='$pname' ";
 $prun=mysqli_query($conn,$psql);
 $pfet=mysqli_fetch_assoc($prun);

 if(empty($pname)){
     echo "<script>alert('Please enter a unique Product data')</script>";
 }else{
    if(empty($pimage)){
        $prsql="UPDATE `product_data` SET `cat1`='$cat1',`subcatagory`='$subcatagory',`pname`='$pname',`pcode`='$pcode',`pprice`='$pprice',`psaleprice`='$psaleprice',`pdate`='$pdate',`ptime`='$ptime',`supplier`='$supplier' WHERE `pid`='$up' ";
        $prrun=mysqli_query($conn,$prsql);
        if($prrun){
            echo "<script>alert('Your Data has been updated but image is selected pervious')</script>";
        }
       
    }else{
        if(in_array($exe,$arr)){
            $pimage=rand(1,1000000).".".$exe;
            $pimage=array($pimage);
            $pimage=implode(",",$pimage);
    
            
            $pimage=$profet['pimage'];
            unlink("./img/".$pimage);
    
            $prsql="UPDATE `product_data` SET `cat1`='$cat1',`subcatagory`='$subcatagory',`pname`='$pname',`pcode`='$pcode',`pprice`='$pprice',`psaleprice`='$psaleprice',`pdate`='$pdate',`ptime`='$ptime',`pimage`='$pimage',`supplier`='$supplier' WHERE `pid`='$up' ";
            $prrun=mysqli_query($conn,$prsql);
        }else{
     echo "<script>alert('Your image is invalid')</script>";
        }
    }
    

 
 if($prrun){
    echo "<script>alert('Your Product  has been updated Thanks for choosing us !')</script>";

    move_uploaded_file($_FILES['pimage']['tmp_name'],"./img/".$pimage);
    header("Refresh:0,url=./view_product.php");
 }else{
    echo "<script>alert('Your Product  has not been updated ')</script>";
 }
}
}

?>

<body>
    <div class="loader"></div>
    <div id="app">
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
                            <div class="col-12 col-md-6 col-lg-6   ">
                                <div class="card">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h4>Product </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Choose a catagory</label>

                                                <select name="cat1" class="form-control">
                                                    <option selected>Choose a catagory</option>
                                                    <?php 
                                                        
                                                 $csql="SELECT * FROM `catagories`";
                                                 $crun=mysqli_query($conn,$csql);
                                                while($cfet=mysqli_fetch_assoc($crun)){
                                                    ?>
                                                    <option  value="<?php echo $cfet['cid']?>">
                                                        <?php echo $cfet['cname'];?>
                                                    
                                                    </option>
                                                        
                                                    <?php
                                                }
                                              
                                                    ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label>Choose a sub catagory</label>
                                                <select name="subcatagory" class="form-control">
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
                                            <br>
                                            <div class="form-group">
                                                    <label>Choose a supplier </label>
                                                    <select name="supplier" class="form-control">
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

                                                <input type="text" name="pname" value="<?php echo $profet['pname']?>" placeholder="Product Name"
                                                    class="form-control">
                                                <input type="text" name="pcode" value="<?php echo $profet['pcode']?>" placeholder="Product Code"
                                                    class="form-control">
                                            </div>
                                            <br><br>
                                            <div class="input-group">

                                                <input type="number" value="<?php echo $profet['pprice']?>"  placeholder="Whole Price" name="pprice"
                                                    class="form-control">
                                                <input type="number" value="<?php echo $profet['psaleprice']?>" placeholder="Sale Price" name="psaleprice"
                                                    class="form-control">
                                            </div>


                                            <br><br>
                                            <div class="input-group">

                                                <input type="file" name="pimage" alt="picture" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button name="submit" class="btn btn-success">Update Product</button>
                                        </div>
                                    </form>
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
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html>