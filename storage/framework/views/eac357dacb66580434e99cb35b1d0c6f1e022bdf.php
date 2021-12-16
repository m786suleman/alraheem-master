<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>TOOR HARDWARE STORE | POS - Point Of Sale</title>
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
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo e(route('dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Sales</span>
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
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Sales</span>
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
            <!-- Sales Start-->
            <div class="transition-world-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="transition-world-list shadow-reset">
                                <div class="sparkline7-list">
                                    <div class="sparkline7-hd">
                                        <div class="main-spark7-hd">
                                            <h1><span class="res-ds-n">Transfer Sales</span></h1>
                                            <div class="sparkline7-outline-icon" style="margin-bottom: 5px;">
                                              <a href="<?php echo e(route('sale.sale-tranfer-history')); ?>" class=""><i class="fa fa-eye"></i> View History</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="" style="text-align: left;margin-bottom: 10px;">
                                                  <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                                    <div id="toolbar">
                                                      <div class="row" style="text-align: left;">
                                                        <div class="col-lg-4">
                                                          <form action="<?php echo e(route('sales.search-transfer-sale')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo e(csrf_field()); ?>

                                                            <div class="form-group">
                                                                <label for="created_time">Select Date:</label>
                                                                <input type="date" class="form-control" id="current_date" name="current_date" value="<?php echo e($current_date); ?>">
                                                            </div>
                                                            <button type="submit" class="btn btn-custon-four btn-primary">Search Sale</button>
                                                        </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="" style="text-align: left;margin-top:10px;">
                                                      <form action="<?php echo e(route('sales.transfer-previous-sale-into-today')); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="total_sale" value="<?php echo e($remaining_sale); ?>" class="form-control">
                                                        <input type="hidden" name="current_date" value="<?php echo e($current_date); ?>" class="form-control">
                                                        <button type="submit" class="btn btn-custon-four btn-primary">Transfer This into Today Sale</button>
                                                      </form>
                                                    </div>
                                                    <form action="<?php echo e(route('sales.transfer-sale-action')); ?>" method="post">
                                                      <input type="hidden" name="current_date" value="<?php echo e($current_date); ?>">
                                                      <input type="hidden" name="remaining_sale" value="<?php echo e($remaining_sale); ?>">
                                                      <?php echo csrf_field(); ?>
                                                      <table data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                                          <thead>
                                                              <tr>
                                                                  <th>Total Sale</th>
                                                                  <th>Account Type</th>
                                                                  <th class="account_name">Account Name</th>
                                                                  <th class="bank_name">Bank</th>
                                                                  <th>Amount</th>
                                                                  <th>Note</th>
                                                                  
                                                              </tr>
                                                          </thead>
                                                          <tbody id="tbody">
                                                              <tr>
                                                                  <td><input type="text" name="total_sale" id="total_sale" value="<?php echo e($remaining_sale); ?>" class="form-control" readonly>
                                                                  </td>
                                                                  <td>
                                                                    <select name="account_type" id="account_type" class="form-control">
                                                                      <option>Choose Type</option>
                                                                      
                                                                      
                                                                      <option value="Employee">Employee - ملازم</option>
                                                                      <option value="Cash">Cash - کیش</option>
                                                                      <option value="Expense">Expense - اخراجات</option>
                                                                      <option value="Income">Income - انکم</option>
                                                                      <option value="Sales">Sales - فروخت</option>
                                                                      <option value="Purchase">Purchase - خرید </option>
                                                                    </select>
                                                                  </td>
                                                                  <td id="show-account-names" class="account_name">
                                                        
                                                                  </td>
                                                                  <td class="bank_name">
                                                                    <select class="form-control bank" name="bank" style="width: 150px;">
                                                                        <option>Choose Bank</option>
                                                                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                          <option value="<?php echo e($bank->id); ?>"><?php echo e($bank->name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                  </td>
                                                                  <td>
                                                                    <input type="text" name="amount" class="form-control" id="amount">
                                                                  </td>
                                                                  <td>
                                                                    <input type="text" name="note" class="form-control" id="note">
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                      <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Transfer</button>
                                                    </form>
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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
    <script>
      function myFunction(){
        var total_sale = $('#total_sale').val();
        var current_date = $('#current_date').val();
        if(total_sale == 0){
            alert('Sale Already Transfered.');
            return;
        }
        $.ajax({
            url: "<?php echo e(route('sales.transfer-previous-sale-into-today')); ?>",
            method: "POST",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                total_sale: total_sale,
                current_date: current_date,
                },
            success:function(data){
                alert(data);
            }
        });
      }
      
      $(document).ready(function(){
        $('.account_name').hide();
            $('.bank_name').hide();
        $('#account_type').change(function(){
          var type = $('#account_type').val();
          if(type == 'Cash'){
            $('.account_name').hide();
            $('.bank_name').show();
          }
          else{
            $('.account_name').show();
            $('.bank_name').hide();
          }
          $.ajax({
              type: "GET",
              url: "<?php echo e(route('transfer-sale.get-account-types')); ?>",
              data: {type:type},
              success: function(data){
                $('#show-account-names').empty().append(data);
              },
              error: function(data){
                  alert('Error...!');
              }
          });
        });
      });
    </script>
</body>

</html><?php /**PATH C:\wamp64\www\abdulrehman\resources\views/sales/transfer-sale.blade.php ENDPATH**/ ?>