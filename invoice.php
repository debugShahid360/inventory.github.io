<!DOCTYPE html>
<html lang="en">



<?php
  include "./include/header.php";
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
        include "./include/aside.php";
       ?>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="invoice">
                            <div class="invoice-print">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="invoice-title">
                                            <h2>Invoice</h2>
                                            <div class="invoice-number">Order #12345</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Billed To:</strong><br>
                                                    Sarah Smith<br>
                                                    6404 Cut Glass Ct,<br>
                                                    Wendell,<br>
                                                    NC, 27591, USA
                                                </address>
                                            </div>
                                            <div class="col-md-6 text-md-right">
                                                <address>
                                                    <strong>Shipped To:</strong><br>
                                                    Keith Johnson<br>
                                                    197 N 2000th E<br>
                                                    Rexburg, ID,<br>
                                                    Springfield Center, USA
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Payment Method:</strong><br>
                                                    Visa ending **** 5687<br>
                                                    test@example.com
                                                </address>
                                            </div>
                                            <div class="col-md-6 text-md-right">
                                                <address>
                                                    <strong>Order Date:</strong><br>
                                                    June 26, 2018<br><br>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="section-title">Order Summary</div>
                                        <p class="section-lead">All items here cannot be deleted.</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-md">
                                                <tr>
                                                    <th data-width="40">#</th>
                                                    <th>Item</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-right">Totals</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mouse Wireless</td>
                                                    <td class="text-center">$10.99</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-right">$10.99</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Keyboard Wireless</td>
                                                    <td class="text-center">$20.00</td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-right">$60.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Headphone Blitz TDR-3000</td>
                                                    <td class="text-center">$600.00</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-right">$600.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-8">
                                                <div class="section-title">Payment Method</div>
                                                <p class="section-lead">The payment method that we provide is to make it
                                                    easier for you to pay
                                                    invoices.</p>
                                                <div class="images">
                                                    <img src="assets/img/cards/visa.png" alt="visa">
                                                    <img src="assets/img/cards/jcb.png" alt="jcb">
                                                    <img src="assets/img/cards/mastercard.png" alt="mastercard">
                                                    <img src="assets/img/cards/paypal.png" alt="paypal">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <div class="invoice-detail-item">
                                                    <div class="invoice-detail-name">Subtotal</div>
                                                    <div class="invoice-detail-value">$670.99</div>
                                                </div>
                                                <div class="invoice-detail-item">
                                                    <div class="invoice-detail-name">Shipping</div>
                                                    <div class="invoice-detail-value">$15</div>
                                                </div>
                                                <hr class="mt-2 mb-2">
                                                <div class="invoice-detail-item">
                                                    <div class="invoice-detail-name">Total</div>
                                                    <div class="invoice-detail-value invoice-detail-value-lg">$685.99
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-md-right">
                                <div class="float-lg-left mb-lg-0 mb-3">
                                    <button class="btn btn-primary btn-icon icon-left"><i
                                            class="fas fa-credit-card"></i> Process
                                        Payment</button>
                                    <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i>
                                        Cancel</button>
                                </div>
                                <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i>
                                    Print</button>
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


<!-- invoice.html  21 Nov 2019 04:05:05 GMT -->

</html>