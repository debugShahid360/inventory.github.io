<?php

include "../include/connection.php";
$up=$_POST['updated'];
    $csql="SELECT * FROM `catagories` WHERE `cid`='$up'";
     $crun=mysqli_query($conn,$csql);
     $fet=mysqli_fetch_assoc($crun);
   
  ?>
  <div class="model-body">
      <section class="section">
          <div class="section-body">
              <div class="row justify-content-center  ">
  
                  <div class="card ">
                      <form id="catagory_editform">
                          <div class="card-header">
                              <h4>Catagories</h4>
                          </div>
                          <div class="card-body">
                              <div class="form-group">
                                  <label>Catagories Name</label>
                                  <input type="text" name="cname" class="form-control"
                                      value="<?php echo $fet['cname'];?>">
                                  <input type="hidden" name="cids" class="form-control" value="<?php echo $fet['cid'];?>">
                              </div>
  
  
                              <div class="form-group mb-0">
                                  <label>Description</label>
                                  <textarea class="form-control" align='left'
                                      name="cdes"><?php echo $fet['cdes'];?></textarea>
  
  
                              </div>
                          </div>
                          <div class="card-footer text-right">
                              <button name="submit" id="submited" class="btn btn-primary">Updated Catagory</button>
                          </div>
                          <div id="close-btn">X</div>
                      </form>
                  </div>
  
              </div>
          </div>
      </section>
  </div>
