<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POS - Point Of Sale</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/animate.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/normalize.css')}}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/c3.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('public/js/vendor/modernizr-2.8.3.min.js')}}"></script>
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
                                    <div class="col-lg-9">
                                        <div class="">
                                            @include('include.messages')
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('dashboard') }}">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Banks</span>
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
                                        <div class="">
                                            @include('include.messages')
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add New  Expense</span>
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
                                        <h2>Add New Expense</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    
                                    <form action="{{ route('expense.add-expense') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input type="date" onload="getDate()" id="date" class="form-control" name="date">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="date">Type</label>
                                                    <select name="type" id="type" class="form-control" required>
                                                        <option disabled selected>Choose Type</option>
                                                        <option value="normal">Normal</option>
                                                        <option value="product">Product Maintenance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 product">
                                                <div class="form-group">
                                                    <label for="date">Lot#</label>
                                                    <select name="lot" id="lot" class="form-control">
                                                        @foreach ($items as $item)
                                                            <option value="{{$item->id}}">{{$item->name}} &nbsp; &nbsp;  #{{$item->sku}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 normal">
                                                <div class="form-group show-categories-section" id="show-categories-section">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-1 normal">
                                                <div class="form-group">
                                                    <label for="add_new_category">&nbsp;</label>
                                                    <button type="button" id="add_new_category" class="btn btn-primary" data-toggle="modal" data-target="#myModalCategory"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="amount">Amount</label>
                                                    <input type="text" class="form-control" name="amount" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="detail">Detail</label>
                                                    <textarea name="detail" class="form-control" id="detail" cols="100" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" tabindex="10" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="transition-world-list shadow-reset">
                                <div class="sparkline7-list">
                                    <div class="sparkline7-hd">
                                        <div class="main-spark7-hd">
                                            <h1>Expense List</h1>
                                            <div class="sparkline7-outline-icon">
                                                <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                <span><i class="fa fa-wrench"></i></span>
                                                <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                                        <thead>
                                                            <tr>
                                                                <th>SR#</th>
                                                                <th>Date</th>
                                                                <th>Type</th>
                                                                <th>Category/Lott#</th>
                                                                <th>Amount</th>
                                                                <th>Detail</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($expenses as $key=>$exp)
                                                                <tr>
                                                                    <td>{{ $key+1 }}</td>
                                                                    <td>{{ $exp->date }}</td>
                                                                    <td>{{ $exp->type }}</td>
                                                                    <td>
                                                                        @if ($exp->type == 'normal')
                                                                            {{$exp->expense_category['name']}}
                                                                        @else
                                                                        @php
                                                                            $item = \App\Models\Item::find($exp->lot);
                                                                        @endphp
                                                                            {{$item->sku}}
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $exp->amount }}</td>
                                                                    <td>{{ $exp->detail }}</td>
                                                                    <td>
                                                                        <a href="{{ route('expense.delete-expense', ['id'=>$exp->id]) }}" class="btn btn-primary" style="color: #fff;"><i class="fa fa-trash"></i></a>
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
        </div>
    </div>
    <!-- Footer Start-->
    @include('layout.footer')
    <!-- Footer End-->

<!-- Brand Modal Start -->
<div id="myModalCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <form method="POST" id="manufature-form">
                <div class="modal-header">
                    <h4 class="modal-title">Add Expense Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="add_category">Category</label>
                        <input type="text" name="add_category" class="form-control" id="add_category" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-category-submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Brand Modal End -->


    <!-- jquery
		============================================ -->
    <script src="{{asset('public/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('public/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('public/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('public/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('public/js/jquery.scrollUp.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('public/js/wow/wow.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('public/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('public/js/counterup/counterup-active.js')}}"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{asset('public/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('public/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('public/js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{asset('public/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('public/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('public/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('public/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{asset('public/js/flot/Chart.min.js')}}"></script>
    <script src="{{asset('public/js/flot/dashtwo-flot-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{asset('public/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('public/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('public/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('public/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('public/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('public/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('public/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('public/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS ============================================ -->
    <script src="{{asset('public/js/main.js')}}"></script>
    <script>
        let today = new Date().toISOString().substr(0, 10);
        document.querySelector("#date").value = today;
        document.querySelector("#date").valueAsDate = new Date();
    </script>
    <script>
        $(document).ready(function(){

            $('.normal').hide();
            $('.product').hide();
            $('#type').change(function(){
                var type = $('#type').val();
                if(type == 'normal'){
                    $('.product').hide();
                    $('.normal').show();
                } 
                if(type == 'product'){
                    $('.normal').hide();
                    $('.product').show();
                } 
            });
            $.get('{{ route("expense.get-categories") }}', function(data){
                $('#show-categories-section').empty().append(data);
            });

            $('#btn-category-submit').click(function(e){
                e.preventDefault();
                var category = $('#add_category').val();
                $.ajax({
                    url: "{{ route('expense.add-category') }}",
                    type: "POST",   
                    data: {
                        "_token": "{{ csrf_token() }}",
                        category: category
                        },
                    success: function(data){
                        $('#show-categories-section').empty().append(data);
                        $("#myModalCategory").modal('hide');

                    },
                    error: function(data){
                        alert('Error.....!');
                    }
                });
            });
        });
    </script>
</body>

</html>