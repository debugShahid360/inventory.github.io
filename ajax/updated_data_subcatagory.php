<?php

include "../include/connection.php";
$up=$_POST['updated'];
    
$subsql="SELECT * FROM `subcatagorys` WHERE `subid`='$up'";
$subrun=mysqli_query($conn,$subsql );
$subfet=mysqli_fetch_assoc($subrun);
?>
<div class="model-body">
<section class="section">
    <div class="section-body">
        <div class="row justify-content-center  ">

            <div class="card col-lg-4 col-md-4 col-sm-12">
                <form id="viewmodelsubcatagory">
                    <div class="card-header">
                        <h4>Sub Catagories</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>choose catagories</label>
                            <select name="catagory" class="form-control" id="">
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
                        <div class="card-body">
                            <div class="form-group">
                                <label> Sub Catagories Name</label>
                                <input type="text" name="subname" value="<?php echo  $subfet['subname'];?>"
                                    class="form-control">
                                    <input type="hidden" name="subid" value="<?php echo  $subfet['subid'];?>"
                                    class="form-control">
                            </div>


                            <div class="form-group mb-0">
                                <label>Sub Catagories Description</label>
                                <textarea class="form-control" name="subdes">
                                            <?php echo $subfet['subdes'];?>
                                            </textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button name="submit" id="submited" class="btn btn-primary">Submit</button>
                        </div>
                        <div id="close-btn">X</div>
                </form>
            </div>

        </div>
    </div>
</section>
</div>
