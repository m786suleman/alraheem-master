<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/img/favicon.ico')); ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/font-awesome.min.css')); ?>">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/adminpro-custon-icon.css')); ?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/meanmenu.min.css')); ?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/jquery.mCustomScrollbar.min.css')); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/animate.css')); ?>">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/jvectormap/jquery-jvectormap-2.0.3.css')); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/data-table/bootstrap-table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/data-table/bootstrap-editable.css')); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/normalize.css')); ?>">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/c3.min.css')); ?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/style.css')); ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/responsive.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/fm.selectator.jquery.css')); ?>"/>

    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />

    <style>
        .selectator_selected_item_left{
            display: none;
        }
    </style>
    <!-- modernizr JS
        ============================================ -->
        <script src="<?php echo e(asset('public/js/vendor/jquery-1.11.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
</head>

<body class="materialdesign">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <?php echo $__env->make('layout.left-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <?php echo $__env->make('layout.header-top-area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            
                                            <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo e(route('dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Accounts</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <?php echo $__env->make('layout.mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area des-none mg-b-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                            <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Purchase Form</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Create New Account</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <form action="<?php echo e(route('accounts-action')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                  <label for="name">Name</label>
                                                  <input type="text" name="name" class="form-control" id="name" autofocus>
                                              </div>
                                            </div>
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                  <label for="address">Address</label>
                                                  <input type="text" name="address" class="form-control" id="address">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <label for="phone">Phone</label>
                                              <input type="text" name="phone" class="form-control" id="phone">
                                            </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <label for="price">Rate</label>
                                              <input type="number" name="price" class="form-control" id="price">
                                            </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <label for="type">Type</label>
                                              <select name="type" id="type" class="form-control">
                                                <option value="Customer">Customer</option>
                                                <option value="Vendor">Vendor</option>
                                                <option value="Employee">Employee</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Expense">Expense</option>
                                                <option value="Income">Income</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Purchase">Purchase</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 row">
                                            <div class="form-group col-lg-5">
                                              <label for="type">Product</label>
                                              <select name="product" id="product" class="form-control">
                                                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?> &nbsp; &nbsp;  #<?php echo e($item->sku); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                            </div>
                                            <div class="form-group col-lg-5">
                                              <label for="type">Price</label>
                                              <input type="text" name="productPrice" class="form-control" id="productPrice">
                                            </div>
                                            <div class="form-group col-lg-2">
                                              <label for="type">Add</label>
                                              <a class="btn form-control add_field_button"><i class="fa fa-plus"></i></a>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 ">
                                              <table class="table table-bordered" id="table1">
                                                  <tr>
                                                      <th>Product</th>
                                                      <th>Price</th>
                                                      <th>Action</th>
                                                  </tr>
                                                  <tr>



                                                  </tr>
                                              </table>
                                          </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                              <div class="income-title">
                                  <div class="main-income-head">
                                      <h2>Accounts</h2>
                                  </div>
                              </div>
                              <div class="income-dashone-pro">
                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                  <div id="toolbar1"></div>
                                  <table id="table1" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                      <thead>
                                          <tr>
                                              <th data-field="id">SR#</th>
                                              <th data-field="status">Name</th>
                                              <th data-field="rate">Rate</th>
                                              <th data-field="date">Phone</th>
                                              <th data-field="phone">Address</th>
                                              <th data-field="type">Type</th>
                                              <th data-field="action">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $index = $key + 1;
                                        ?>
                                          <tr>
                                              <td><?php echo e($index); ?></td>
                                              <td><?php echo e($item->name); ?></td>
                                              <td><?php echo e($item->rate); ?></td>
                                              <td><?php echo e($item->phone); ?></td>
                                              <td><?php echo e($item->address); ?></td>
                                              <td><?php echo e($item->type); ?></td>
                                              <td>
                                                <a href="<?php echo e(route('account.edit-account', ['id'=>$item->id])); ?>" class="btn btn-primary" style="color: #fff;"><i class="fa fa-edit"></i></a>
                                              </td>
                                          </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </tbody>
                                  </table>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start-->
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End-->

<!-- Customer Modal Start -->
<div id="myModalCustomer" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Vendor</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="customer_name">Name</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="customer_address">Address</label>
                        <input type="text" name="customer_address" class="form-control" id="customer_address">
                    </div>
                    <div class="form-group">
                        <label for="customer_phone">Phone</label>
                        <input type="text" name="customer_phone" class="form-control" id="customer_phone">
                    </div>
                    <div class="form-group">
                        <label for="manufacture">Type</label>
                        <select name="customer_type" id="customer_type" class="form-control">
                            <option value="vendor">Vendor</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-customer-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Customer Modal End -->


<div id="receivePaymentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment Detail</h4>
        </div>
        <div class="modal-body" id="receivable-payment-body">
        </div>
      </div>
    </div>
</div>


    <script>

        $(document).ready(function(){



            // Table 1
            var max_fields      = 20;
            var add_button      = $(".add_field_button");
            var x = 1; //initlal text box count
            $(add_button).click(function(e){
                e.preventDefault();
                if(x < max_fields){
                    x++;



                    $('#table1').append('<tr id="row'+x+'"><td>   <input type="text" class="form-control" name="product[]" placeholder="product"/> </td> <td><input type="text" class="form-control" name="productPrice[]" placeholder="Price"/></td><td><button id="'+x+'" class="btn btn-danger remove_field">Remove</a></td></tr>'); //add input box
                }
            });

            $(document).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault();
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
                x--;
            })
        });



    </script>
    <!-- jquery
		============================================ -->
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/jquery.meanmenu.js')); ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/jquery.sticky.js')); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/jquery.scrollUp.min.js')); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/wow/wow.min.js')); ?>"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/counterup/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/counterup/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/counterup/counterup-active.js')); ?>"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/jvectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jvectormap/jvectormap-active.js')); ?>"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/peity/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/peity/peity-active.js')); ?>"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/sparkline/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/sparkline/sparkline-active.js')); ?>"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/flot/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/flot/dashtwo-flot-active.js')); ?>"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/data-table/bootstrap-table.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/data-table/tableExport.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/data-table/data-table-active.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/data-table/bootstrap-table-editable.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/data-table/bootstrap-editable.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/data-table/bootstrap-table-resizable.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/data-table/colResizable-1.5.source.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/data-table/bootstrap-table-export.js')); ?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('public/fm.selectator.jquery.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="<?php echo e(asset('public/print/jquery.printPage.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\alraheem-master\resources\views/accounts/account-list.blade.php ENDPATH**/ ?>