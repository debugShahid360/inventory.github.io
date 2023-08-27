<?php
 include "./include/header.php";
 include "./include/connection.php";
    $upd=$_GET['subid'];
    $subsql="SELECT * FROM `subcatagorys` WHERE `subid`='$upd'";
    $subrun=mysqli_query($conn,$subsql );
    $subfet=mysqli_fetch_assoc($subrun);

 if(isset($_POST['submit'])){
    $subname=mysqli_real_escape_string($conn,$_POST['subname']);
    $subdes=mysqli_real_escape_string($conn,$_POST['subdes']);
    $catagory=mysqli_real_escape_string($conn,$_POST['catagory']);
    $subdate=date("d-m-Y");
    date_default_timezone_set("Asia/Karachi");
    $subtime=date('h:i:s a');
   
    if(empty($subname)){
        echo "<script>alert('Please entry your Sub catagories name')</script>";
    }else{

        $upsql="UPDATE `subcatagorys` SET `subname`='$subname',`subdes`='$subdes',`catagory`='$catagory',`subdate`='$subdate',`subtime`='$subtime' WHERE `subid`='$upd'";
        $uprun=mysqli_query($conn,$upsql);
        echo "<script>alert('Your sub Catagory has been updated')</script>";
        header("Refresh:0,url=./view_sub-catagory.php");

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
                                                <input type="text" name="subname" value="<?php echo  $subfet['subname'];?>" class="form-control" >
                                            </div>
                                            
                                           
                                            <div class="form-group mb-0">
                                                <label>Sub Catagories Description</label>
                                                <textarea class="form-control" name="subdes" >
                                                <?php echo $subfet['subdes'];?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button name="submit" class="btn btn-primary">Submit</button>
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