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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/favicon.ico') }}">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
    <!-- adminpro icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/adminpro-custon-icon.css') }}">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/meanmenu.min.css') }}">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
    <!-- jvectormap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/data-table/bootstrap-editable.css') }}">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/normalize.css') }}">
    <!-- charts CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/c3.min.css') }}">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/style.css') }}">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    <script src="{{ asset('public/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="materialdesign">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            @include('layout.left-sidebar')
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            @include('layout.header-top-area')
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
                                            <li><a href="{{ route('dashboard') }}">Home</a> <span
                                                    class="bread-slash">/</span>
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
            @include('layout.mobile-menu')
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
                                            <h1><span class="res-ds-n">Sales</span></h1>
                                            <div class="sparkline7-outline-icon" style="margin-top: -5px;">
                                                <span class="sparkline7-collapse-link">
                                                    <a href="{{ route('reports.sale.print-all-english') }}" class="btn btn-primary btn-printAllPurchaseReportEnglish"><i class="fa fa-print"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">

                                        <div class="row">
                                            <div class="col-lg-3" style="text-align: left;">
                                                <div class="form-group">
                                                    <label for="to">Select Search Type</label>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="null">Choose Search Type</option>
                                                        <option value="brand">Brand</option>
                                                        <option value="date">Date</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Search Sales for Brand -->
                                        <div class="row" style="text-align: left;" id="brandSection">
                                            <form action="{{ route('reports.search-sale-by-brand') }}" method="POST">
                                                @csrf
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="from">Brands</label>
                                                        <select name="brand" id="brand" class="form-control">
                                                            <option value="">Choose Brand</option>
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <label
                                                        for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <button type="submit" class="btn btn-default" style="color:#fff;">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Search Sales End-->

                                        <!-- Search Sales -->
                                        <div class="row" style="text-align: left;" id="dateSection">
                                            <form action="{{ route('reports.search-sale') }}" method="POST">
                                                @csrf
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="from">Start Date</label>
                                                        <input type="date" class="form-control"
                                                            name="from" id="from" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="to">End Date</label>
                                                        <input type="date" class="form-control"
                                                            name="to" id="to" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <button type="submit" class="btn btn-default"
                                                        style="color:#fff;">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Search Sales End-->

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div
                                                    class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                                    <table id="table" data-toggle="table" data-pagination="true"
                                                        data-search="true" data-show-columns="true"
                                                        data-resizable="true" data-cookie="true" data-page-size="5"
                                                        data-page-list="[5, 10, 15, 20, 25]"
                                                        data-cookie-id-table="saveId" data-show-export="true">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="id">Customer</th>
                                                                <th data-field="date">Date</th>
                                                                <th data-field="country">Total</th>
                                                                <th data-field="receivable">Receivable</th>
                                                                <th data-field="payment method">Payment Method</th>
                                                                <th data-field="sale man">Sales Man</th>
                                                                {{-- <th>Profit</th> --}}
                                                                <th data-field="action">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($sales as $sale)
                                                                <tr>
                                                                    @if ($sale->walking_customer)
                                                                        <td>{{ $sale->walking_customer }}</td>
                                                                    @else
                                                                        <td>{{ $sale->customer['name'] }}</td>
                                                                    @endif
                                                                    <td>{{ $sale->current_date }}</td>
                                                                    <td>{{ $sale->total_bill }}</td>
                                                                    <td>{{ $sale->receivable }}</td>
                                                                    <td>{{ $sale->payment_method }}</td>
                                                                    <td>{{ $sale->user['name'] }}</td>
                                                                    {{-- <td>
                                                                        @php
                                                                            $pro = \App\Models\SaleItem::where('sale_id', $sale->id)->get();
                                                                            $profit = 0;
                                                                        @endphp
                                                                        @foreach ($pro as $item)
                                                                            @php
                                                                                $profit += $item->profit;
                                                                            @endphp
                                                                        @endforeach
                                                                        {{ $profit }}
                                                                    </td> --}}
                                                                    <td>
                                                                        <a href="{{ route('sale.sale-detail', ['id' => $sale->id]) }}" class="btn btn-primary" style="color: #fff;"><i class="fa fa-eye"></i></a>
                                                                        <a href="{{ route('sales-list-print-english', ['id' => $sale->id]) }}" class="btn btn-primary btn-print" style="color: #fff;"><i class="fa fa-print"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
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
            </div>
            <!-- Transitions End-->
        </div>
    </div>
    <!-- Footer Start-->
    @include('layout.footer')
    <!-- Footer End-->
    <!-- jquery
  ============================================ -->
    <script src="{{ asset('public/js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
  ============================================ -->
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS
  ============================================ -->
    <script src="{{ asset('public/js/jquery.meanmenu.js') }}"></script>
    <!-- mCustomScrollbar JS
  ============================================ -->
    <script src="{{ asset('public/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sticky JS
  ============================================ -->
    <script src="{{ asset('public/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
  ============================================ -->
    <script src="{{ asset('public/js/jquery.scrollUp.min.js') }}"></script>
    <!-- scrollUp JS
  ============================================ -->
    <script src="{{ asset('public/js/wow/wow.min.js') }}"></script>
    <!-- counterup JS
  ============================================ -->
    <script src="{{ asset('public/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/js/counterup/counterup-active.js') }}"></script>
    <!-- jvectormap JS
  ============================================ -->
    <script src="{{ asset('public/js/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('public/js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('public/js/jvectormap/jvectormap-active.js') }}"></script>
    <!-- peity JS
  ============================================ -->
    <script src="{{ asset('public/js/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('public/js/peity/peity-active.js') }}"></script>
    <!-- sparkline JS
  ============================================ -->
    <script src="{{ asset('public/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
  ============================================ -->
    <script src="{{ asset('public/js/flot/Chart.min.js') }}"></script>
    <script src="{{ asset('public/js/flot/dashtwo-flot-active.js') }}"></script>
    <!-- data table JS
  ============================================ -->
    <script src="{{ asset('public/js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('public/js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('public/js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('public/js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('public/js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('public/js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('public/js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('public/js/data-table/bootstrap-table-export.js') }}"></script>
    <!-- main JS
  ============================================ -->
    <script src="{{ asset('public/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            // $('.btn-print').printPage();
            // $('.btn-printAllSaleReportUrdu').printPage();
            // $('.btn-printAllSaleReportEnglish').printPage();
            $('#brandSection').hide();
            $('#dateSection').hide();
            $('#type').change(function() {
                var type = $('#type').val();
                if (type == 'brand') {
                    $('#brandSection').show();
                    $('#dateSection').hide();
                }
                if (type == 'date') {
                    $('#brandSection').hide();
                    $('#dateSection').show();
                }
                if (type == 'null') {
                    $('#brandSection').hide();
                    $('#dateSection').hide();
                }
            });
        });

    </script>
</body>

</html>
