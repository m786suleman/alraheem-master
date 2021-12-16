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
    <!-- modernizr JS
		============================================ -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
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
                                    <div class="col-lg-9">
                                      <div class="">
                                        <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                      </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo e(route('dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Re-Order Items List</span>
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
                                      <div class="">
                                        <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Stock Management</span>
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
            
            <!-- Transitions Start-->
            <div class="transition-world-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="transition-world-list shadow-reset">
                                <div class="sparkline7-list">
                                    <div class="sparkline7-hd">
                                        <div class="main-spark7-hd">
                                            <h1>Re-Order Items List</h1>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">
                                        <div class="row">
                                            <form action="<?php echo e(route('search-reorder-list-items')); ?>" method="POST" style="text-align: left;">
                                              <?php echo csrf_field(); ?>
                                              <div class="col-lg-2">
                                                <div class="form-group" style="text-align: left;">
                                                  <label for="email">Search Type</label>
                                                  <select name="search_type" id="search_type" class="form-control">
                                                    <option value="">Choose Search Type</option>
                                                    <option value="name">Name</option>
                                                    <option value="category">Category</option>
                                                    <option value="sub category">Sub Category</option>
                                                    <option value="brand">Brand</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-lg-2" id="name-section">
                                                <div class="form-group">
                                                  <label for="">Name</label>
                                                  <select name="name" id="name" class="form-control">
                                                    <option value="">Choose Name</option>
                                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-lg-2" id="category-section">
                                                <div class="form-group">
                                                  <label for="category">Category</label>
                                                  <select name="category" id="category" class="form-control">
                                                    <option value="">Choose Category</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-lg-2" id="subcategory-section">
                                                <div class="form-group">
                                                  <label for="subcategory">Sub Category</label>
                                                  <select name="subcategory" id="subcategory" class="form-control">
                                                    <option value="">Choose Sub Category</option>
                                                    <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($sub->id); ?>"><?php echo e($sub->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-lg-2" id="brand-section">
                                                <div class="form-group">
                                                  <label for="brand">Brand</label>
                                                  <select name="brand" id="brand" class="form-control">
                                                    <option value="">Choose brand</option>
                                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-lg-1">
                                                <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <button type="submit" class="btn btn-default" style="color: #fff;">Submit</button>
                                              </div>
                                            </form>
                                        </div>
                                        <div class="row">
                                            <a href="#" class="btn btn-primary" id="view-total-stock-value" style="float: right;margin-bottom:10px;">View Total Required Value</a>
                                            <div class="col-lg-12">
                                              <a href="<?php echo e(route('print.print-reorder-list')); ?>" class="btn btn-primary" id="print-reorder-list" style="float: right;">Print List</a>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="sr">SR#</th>
                                                                <th>Image</th>
                                                                <th data-field="item name">Item Name</th>
                                                                <th data-field="sell price">Price</th>
                                                                <th data-field="buy price">Re-Order Value</th>
                                                                <th data-field="stock">Stock</th>
                                                                <th data-field="required">Required</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <?php
                                                                $sum = 0;
                                                            ?>
                                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php
                                                                        $index = $key+1;
                                                                        if($item->old_price){
                                                                          $sum += $item->old_price * ($item->reorder_value - $item->stock);
                                                                        }
                                                                        else{
                                                                          $sum += $item->price * ($item->reorder_value - $item->stock);
                                                                        }
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo e($index); ?></td>
                                                                    <td style="text-align: center;"><img src="<?php echo e(asset('public/items/').'/'.$item->image); ?>" alt="" style="width:50px;"></td>
                                                                    <td><?php echo e($item->name); ?></td>
                                                                    <?php if($item->old_price): ?>
                                                                      <td><?php echo e($item->old_price); ?></td>
                                                                    <?php else: ?>
                                                                      <td><?php echo e($item->price); ?></td>
                                                                    <?php endif; ?>
                                                                    <td><?php echo e($item->reorder_value); ?></td>
                                                                    <td>
                                                                        <?php if($item->stock < $item->reorder_value): ?>
                                                                        <span style="background: red;color:#fff;"><?php echo e($item->stock); ?></span> 
                                                                        <?php else: ?>
                                                                        <span style="background: green;color:#fff;"><?php echo e($item->stock); ?></span> 
                                                                        <?php endif; ?> 
                                                                    </td>
                                                                    <td><?php echo e((int)$item->reorder_value - (int)$item->stock); ?></td>
                                                                    <td>
                                                                        <a href="<?php echo e(route('re-order-item.black-list', ['id'=>$item->id])); ?>" class="btn btn-primary" style="color: #fff;"><i class="fa fa-plus"></i> Back List</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="col-lg-12" id="total-rorder-stock-value" style="margin-top: 25px;margin-bottom: 25px;">
                                                      <h3>Total Store Value: <b><?php echo e($sum); ?></b></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transitions End-->
        </div>
    </div>
    <!-- Footer Start-->
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo e(asset('public/js/vendor/jquery-1.11.3.min.js')); ?>"></script>
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
    <script src="<?php echo e(asset('public/js/jquery.printPage.js')); ?>"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
    <script>
      $(document).ready(function(){
        $('#print-reorder-list').printPage();
        $('#total-rorder-stock-value').hide();

        $('#name').select2({
            placeholder: 'Choose Name',
        });
        $('#u_name').select2({
            placeholder: 'Choose Urdu Name',
        });
        $('#category').select2({
            placeholder: 'Choose Category',
        });
        $('#subcategory').select2({
            placeholder: 'Choose Sub Category',
        });
        $('#brand').select2({
            placeholder: 'Choose Brand',
        });

        $('#name-section').hide();
        $('#urdu-name-section').hide();
        $('#category-section').hide();
        $('#subcategory-section').hide();
        $('#brand-section').hide();

        $('#view-total-stock-value').click(function(e){
          e.preventDefault();
          $('#total-rorder-stock-value').toggle();
        });

        $('#search_type').change(function(){
          $('#name').prop('selectedIndex',0);
          var type = $('#search_type').val();
          if(type == 'name'){
            $('#name-section').show();
            $('#urdu-name-section').hide();
            $('#category-section').hide();
            $('#subcategory-section').hide();
            $('#brand-section').hide();
          }
          if(type == 'urdu name'){
            $('#urdu-name-section').show();
            $('#name-section').hide();
            $('#category-section').hide();
            $('#subcategory-section').hide();
            $('#brand-section').hide();
          }
          if(type == 'category'){
            $('#category-section').show();
            $('#urdu-name-section').hide();
            $('#name-section').hide();
            $('#subcategory-section').hide();
            $('#brand-section').hide();
          }
          if(type == 'sub category'){
            $('#subcategory-section').show();
            $('#category-section').hide();
            $('#urdu-name-section').hide();
            $('#name-section').hide();
            $('#brand-section').hide();
          }
          if(type == 'brand'){
            $('#brand-section').show();
            $('#subcategory-section').hide();
            $('#category-section').hide();
            $('#urdu-name-section').hide();
            $('#name-section').hide();
          }
        });

      });
    </script>
</body>

</html><?php /**PATH C:\wamp64\www\alraheem\resources\views/stock/re-order-items.blade.php ENDPATH**/ ?>