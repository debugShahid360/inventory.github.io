<?php

include "../include/connection.php";
$up=$_POST['updated'];
    
$qusql="SELECT * FROM `Quantity_data` WHERE `qid`='$up'";
$qurun=mysqli_query($conn,$qusql);
$qufet=mysqli_fetch_assoc($qurun);
?>
<div class="model-body">
    <section class="section">
        <div class="section-body">
            <div class="row justify-content-center  ">

                <div class="card  col-lg-4 col-md-4 col-sm-12">
                <form id="editform">
                        <div class="card-header">
                            <h4>Add Quantity </h4>
                        </div>

                        <div class="card-body">

                            <br>
                            <div class="input-group">
                                <input type="text" name="qname" value="<?php echo $qufet['qname']?>"
                                    placeholder="Quantity name" class="form-control">
                                <input type="hidden" name="id" id="qid" value="<?php echo $qufet['qid']?>">
                            </div>
                            <br><br>
                        </div>
                        <div class="card-footer text-right">
                            <button name="submit" id="submited" class="btn btn-success">Update Quantity</button>
                        </div>
                        <div id="close-btn">X</div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>