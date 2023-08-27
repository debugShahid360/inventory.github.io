<?php
 include "./include/header.php";
 include "./include/connection.php";
 $up=$_GET['up'];
 $supsql="SELECT * FROM `supplier` WHERE `supid`='$up'";
 $suprun=mysqli_query($conn,$supsql);
 $supfet=mysqli_fetch_assoc($suprun);
if(isset($_POST['submit'])){
 $supname=mysqli_real_escape_string($conn,$_POST['supname']);
 $supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
 $supcontact=mysqli_real_escape_string($conn,$_POST['supcontact']);
 $supcompanyname=mysqli_real_escape_string($conn,$_POST['supcompanyname']);
 date_default_timezone_set("Asia/Karachi");
 $supdate=date("d-m-Y");
 $suptime=date("h:i:s a");

 $sql="UPDATE `supplier`set `supname`='$supname',`supemail`='$supemail',`supcontact`='$supcontact',`supemail`='$supemail',`supcontact`='$supcontact',`supcompanyname`='$supcompanyname',`supdate`='$supdate',`suptime`='$suptime' WHERE `supid`=$up";
 $run=mysqli_query($conn,$sql);
 if($run){
    echo "<script>alert('Your Supplier has been updated Thanks for choosing us !')</script>";
    header("Refresh:0,url=./view_supplier.php");
 }else{
    echo "<script>alert('Your Supplier has not been updated ')</script>";
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
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <form method="POST">
                                        <div class="card-header">
                                            <h4>Supplier name</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Supplier Name</label>
                                                <input type="text" name="supname" value="<?php echo $supfet['supname']?>" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address </label>
                                                <input type="email" value="<?php echo $supfet['supemail']?>" name="supemail" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact no</label>
                                                <input type="tel" name="supcontact" value="<?php echo $supfet['supcontact']?>" pattern="[0-9]{4}-[0-9]{7}" placeholder="0301-1234905" class="form-control" required="">
                                               
                                            </div>
                                            
                                           
                                            <div class="form-group mb-0">
                                                <label>Company Name</label>
                                                <input type="text" value="<?php echo $supfet['supcompanyname']?>" name="supcompanyname" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button name="submit" class="btn btn-primary">updated Supplier</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
    include "./include/footer.php";
  ?>
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html>