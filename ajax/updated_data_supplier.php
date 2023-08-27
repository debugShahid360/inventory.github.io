<?php

include "../include/connection.php";
$up=$_POST['updated'];
    
$supsql="SELECT * FROM `supplier` WHERE `supid`='$up'";
$suprun=mysqli_query($conn,$supsql);
$supfet=mysqli_fetch_assoc($suprun);
?>
<div class="model-body">
    <section class="section">
        <div class="section-body">
            <div class="row justify-content-center  ">

                <div class="card  col-lg-4 col-md-4 col-sm-12">
                    <form id="viewmodelsupplier">
                        <div class="card-header">
                            <h4>Supplier name</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" name="supname" value="<?php echo $supfet['supname']?>"
                                    class="form-control" required="">
                                    <input type="hidden" name="supid" value="<?php echo $supfet['supid']?>"
                                     >
                            </div>
                            <div class="form-group">
                                <label>Email Address </label>
                                <input type="email" value="<?php echo $supfet['supemail']?>" name="supemail"
                                    class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Contact no</label>
                                <input type="tel" name="supcontact" value="<?php echo $supfet['supcontact']?>"
                                    pattern="[0-9]{4}-[0-9]{7}" placeholder="0301-1234905" class="form-control"
                                    required="">

                            </div>


                            <div class="form-group mb-0">
                                <label>Company Name</label>
                                <input type="text" value="<?php echo $supfet['supcompanyname']?>" name="supcompanyname"
                                    class="form-control" required="">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button name="submit" id="submited" class="btn btn-primary">updated Supplier</button>
                        </div>
                        <div id="close-btn">X</div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>