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
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo e(route('dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Profit/Loss</span>
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
                                            <li><span class="bread-blod">Profit/Loss</span>
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
                                            <h1><span class="res-ds-n">Profit/Loss</span></h1>
                                            <div class="sparkline7-outline-icon">
                                                <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                <span><i class="fa fa-wrench"></i></span>
                                                <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">
                                        <!-- Search Sales -->
                                        <div class="row" style="text-align: left;">
                                          <form action="<?php echo e(route('report.search-profit-report')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                  <label for="from">Start Date</label>
                                                  <input type="date" class="form-control" value="" name="from" id="from" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                              <div class="form-group">
                                                <label for="to">End Date</label>
                                                <input type="date" class="form-control" value="" name="to" id="to" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-1">
                                              <label for="email">&nbsp;&nbsp;</label>
                                              <button type="submit" class="btn btn-default" style="color:#fff;">Search</button>
                                            </div>
                                          </form>
                                        </div>
                                        <!-- Search Sales End-->

                                        <div class="row" style="margin-top: 20px;">
                                            <div class="col-lg-4">
                                              <div class="transition-world-list shadow-reset">
                                                <div class="sparkline7-list">
                                                    <div class="sparkline7-graph">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <i class="fa fa-bar-chart" style="font-size:40px;"></i>
                                                                <p class="center" style="margin-top: 5px;">
                                                                  <span><?php echo e($countSale); ?> Sales</span>
                                                                </p>
                                                                <span>$10664.4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                              <div class="transition-world-list shadow-reset">
                                                <div class="sparkline7-list">
                                                    <div class="sparkline7-graph">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                              <i class="fa fa-bar-chart" style="font-size:40px;"></i>
                                                              <p class="center" style="margin-top: 5px;">
                                                                <span><?php echo e($countPurchase); ?> Purchases</span>
                                                              </p>
                                                              <span>$10664.4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                              <div class="transition-world-list shadow-reset">
                                                <div class="sparkline7-list">
                                                    <div class="sparkline7-graph">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                              <i class="fa fa-bar-chart" style="font-size:40px;"></i>
                                                              <p class="center" style="margin-top: 5px;">
                                                                <span>Profit</span>
                                                              </p>
                                                              <span>$10664.4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 20px;">
                                          <div class="col-lg-4">
                                            <div class="transition-world-list shadow-reset">
                                              <div class="sparkline7-list">
                                                  <div class="sparkline7-graph">
                                                      <div class="row">
                                                          <div class="col-lg-12">
                                                            <i class="fa fa-bar-chart" style="font-size:40px;"></i>
                                                            <p class="center" style="margin-top: 5px;">
                                                              <span>Loss</span>
                                                            </p>
                                                            <span>$10664.4</span>
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
    <!-- main JS
		============================================ -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
    <script>
      $(document).ready(function(){
        $('.btn-print').printPage();
      });
    </script>
</body>

</html><?php /**PATH /var/www/html/adnan/resources/views/reports/profit/profit-report.blade.php ENDPATH**/ ?>