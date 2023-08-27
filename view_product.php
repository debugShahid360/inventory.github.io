<?php
   include "./include/header.php";
   include "./include/connection.php";
?>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php
        include "./include/navebar.php";
      ?>
            <div class="main-sidebar sidebar-style-2">
                <?php
        include "./include/aside.php"
      
      ?>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="row">
                                        <div class="card-header col-6 ">
                                            <h4>View Product </h4>
                                        </div>
                                        <div class=" card-footer col-6 text-right ">
                                            <button name="submit" class="btn btn-primary  "> <a href="./add-product.php"
                                                    class="text-white"> Add Product
                                                </a></button>
                                        </div>
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
                                                        <th>Quantity</th>
                                                        <th>Company name</th>
                                                        <th>Whole price </th>
                                                        <th>Sale price </th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $prsql="SELECT * FROM `product_data` INNER JOIN `catagories` ON `cat1`=`cid` INNER JOIN `subcatagorys` ON `subcatagory`=`subid` INNER JOIN `quantity_data` ON `quantity`=`qid` INNER JOIN `supplier` ON `supplier`=`supid`";
                                                        $prrun=mysqli_query($conn,$prsql);
                                                        while($prfet=mysqli_fetch_assoc($prrun)){
                                                           $p=$prfet['pimage']; 
                                                           

                                                            ?>
                                                    <tr>
                                                        <td><?php echo $prfet['cname']?></td>
                                                        <td><?php echo $prfet['subname']?></td>
                                                        <td><?php echo $prfet['supname']?></td>
                                                        <td><?php echo $prfet['pname']?></td>
                                                        <td><img src="<?php echo "./img/".$p?>" alt="" width="100"></td>
                                                        <td><?php echo $prfet['pcode']?></td>
                                                        <td><?php echo $prfet['qname']?></td>
                                                        <td><?php echo $prfet['supcompanyname']?></td>
                                                        <td><?php echo $prfet['pprice']?></td>
                                                        <td><?php echo $prfet['psaleprice']?></td>

                                                        <td><a href="update-product.php?up=<?php echo $prfet['pid']?>"
                                                                class="btn btn-primary"> update</a></td>
                                                        <td><a href="deleted-product.php?del=<?php echo $prfet['pid']?>"
                                                                class="btn btn-danger"> Deleted</a></td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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


<!-- export-table.html  21 Nov 2019 03:56:01 GMT -->

</html>