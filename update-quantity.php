<?php
 include "./include/header.php";
 include "./include/connection.php";
 
$up=$_GET['up'];
$qusql="SELECT * FROM `Quantity_data` WHERE `qid`='$up'";
$qurun=mysqli_query($conn,$qusql);
$qufet=mysqli_fetch_assoc($qurun);


 $qname=strtolower(mysqli_real_escape_string($conn,$_POST['qname']));
 
 date_default_timezone_set("Asia/Karachi");
 $qdate=date("d-m-Y");
 $qtime=date("h:i:s a");

 
 

 $qsql="SELECT * FROM `Quantity_data` WHERE `qname`='$qname'";
 $qrun=mysqli_query($conn,$qsql);
 $qfet=mysqli_fetch_assoc($qrun);

 if(empty($qname)){
     echo "<script>alert('Please enter a unique Quantity data')</script>";
 }else{
    
        $qsql="UPDATE `Quantity_data` SET `qname`='$qname',`qdate`='$qdate',`qtime`='$qtime' WHERE `qid`='$up'";
        $qrun=mysqli_query($conn,$qsql);
    }
 
 if($qrun){
    echo "<script>alert('Your Quantity  has been Updated Thanks for choosing us !')</script>";
    header("Refresh:0,url=./view_Quntity.php");
    
 }else{
    echo "<script>alert('Your Quantity  has not been Updated ')</script>";
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
                        <div class="row justify-content-center  ">
                            <div class="col-12 col-md-6 col-lg-6  ">
                                <div class="card">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h4>Add Quantity </h4>
                                        </div>
                                        <div class="card-body">

                                            <br>
                                            <div class="input-group">

                                                <input type="text" name="qname" value="<?php echo $qufet['qname']?>"
                                                    placeholder="Quantity name" class="form-control">

                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button name="submit" class="btn btn-success">Update Quantity</button>
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