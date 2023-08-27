<?php

include "../include/connection.php";
$up=$_POST['updated'];
    
 $prosql="SELECT * FROM `product_data` INNER JOIN `catagories` ON `cat1`=`cid` INNER JOIN `subcatagorys` ON `subcatagory`=`subid` INNER JOIN `quantity_data` ON `quantity`=`qid` INNER JOIN `supplier` ON `supplier`=`supid` WHERE `pid`='$up'";
 $prorun=mysqli_query($conn,$prosql);
 $profet=mysqli_fetch_assoc($prorun);
?>


<div class="main-content ">
    <section class="section " >
        <div class="section-body " >
            <div class="row justify-content-center" >
                <div class="col-12 col-md-6 col-lg-6" >
                    <div class="card"  >
                        <form id="product_editform" >
                            <div class="card-header">
                                <h4>Product </h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                   

                                    <select name="cat1" class="form-control">
                                        <option selected>Choose a catagory</option>
                                        <?php 
                                                        
                                                 $csql="SELECT * FROM `catagories`";
                                                 $crun=mysqli_query($conn,$csql);
                                                while($cfet=mysqli_fetch_assoc($crun)){
                                                    ?>
                                        <option value="<?php echo $cfet['cid']?>">
                                            <?php echo $cfet['cname'];?>
                                        </option>

                                        <?php
                                                }

                                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                   
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
                                <div class="form-group">
                                <select name="quantity" id='quantity' 
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
                                  <br>
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
                                <label>Choose Product Name </label>
                                <div class="input-group">
                                <input type="hidden" name="pid" value="<?php echo $profet['pid']?>">
                                    <input type="text" name="pname" value="<?php echo $profet['pname']?>"
                                        placeholder="Product Name" class="form-control">
                                   
                                    <input type="text" name="pcode" value="<?php echo $profet['pcode']?>"
                                        placeholder="Product Code" class="form-control">
                                </div>
                                <label>Choose Whole Price </label>
                                <div class="input-group">
                                    <input type="number" value="<?php echo $profet['pprice']?>"
                                        placeholder="Whole Price" name="pprice" class="form-control">

                                       
                                        <input type="number" value="<?php echo $profet['supply']?>"
                                            placeholder="supply" name="supply" class="form-control">
                                   
                                </div>


                                <label>Choose Picture </label>
                                <div class="input-group">

                                    <input type="file" name="pimage" alt="picture" class="form-control ">
                                </div>
                                <?php
                                    if($profet['status']=='online'){
                                        $m='checked';
                                     
                                    }else{
                                        $f='checked';
                                       
                                    }
                                ?>
                                <div class="">
                                                <label for="" class="mx-3"><b> Product</b></label>
                                                <input type="radio" id="statu" <?php echo @$m?> name="online"  value="online"
                                                    class="ml-3 ">online
                                                <input type="radio" id="status" <?php echo @$f?> name="online"  value="offline"
                                                    class="ml-3 ">offline
                                            </div>
                                <div class="card-footer text-right">
                                <button name="submit" id="submited" class="btn btn-success">Update Product</button>
                            </div>
                            </div>
                          
                            <div id="close-btn">X</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>