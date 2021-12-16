<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
            <!-- Mobile Menu start -->
            <?php echo $__env->make('layout.mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area" style="margin-top: 30px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Sale Order</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="" style="margin-bottom: 15px;">
                                        <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="invoice">Invoice#</label>
                                                    <input type="text" class="form-control" tabindex="2"  value="<?php echo e($invoice); ?>" name="invoice" id="invoice" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="current_date">Date</label>
                                                    <input type="date" class="form-control" name="current_date" id="current_date">
                                                </div>
                                            </div>
                                            <div class="col-lg-3" id="show-vendors-section">

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="item">Item name</label>
                                                    <select class="form-control" name="item" id="item">
                                                        <option value="">Select Items</option>
                                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?> &nbsp; &nbsp; #<?php echo e($item->sku); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="quantity">Quantity</label>
                                                    <input type="text" class="form-control" tabindex="2"  value="1" name="quantity" id="quantity">
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="opening_stock">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <a href="#" type="button" tabindex="3" id="btn-add-in-list" class="btn btn-primary">Add Item</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-12">
                                                <table id="table1" class="focusguard-2" tabindex="4" data-toggle="table" data-pagination="false" data-search="false" data-show-columns="false" data-resizable="false" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="false">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state"></th>
                                                            <th data-field="item name">Item Name</th>
                                                            <th data-field="quantity">Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="session-items">
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="">
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                        <button type="submit" class="btn btn-primary btn-reset">Reset</button>
                                        <a href="<?php echo e(route('sale-print-english')); ?>" class="btn btn-info btn-print" id="btn-print-sale">Print</a>

                                    </form>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.min.js" integrity="sha512-ZmglXekGlaYU2nhamWrS8oGQDJQ1UFpLvZxNGHwLfT0H17gXEqEk6oQBgAB75bKYnHVsKqLR3peLVqMDVJWQyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.compatibility.js" integrity="sha512-YQRu5Y2eFL0L4LrZk2rGxCH5nD8G9ppSaQIqg5mmB/SLd8c0qTJ/cEua3ETXzXzWITvt4x1tiTXFC4M5bJBA4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.compatibility.min.js" integrity="sha512-lDbkDq2ye0YC9a2tSXVSWDI+qH9BSyBuNCP0WSreQFvaIBOhJTz5GgkA0698hwltHNf0WE5/5Ryxr/tD+IBnPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.js" integrity="sha512-ZkmasRE78xqpUOUil2ho4QHUWcRCUys1HoKK86VSYMb7oYX2VTNKT9jvsXDxVkOoPdso42isrmOOMHu+gGLQQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
        let today = new Date().toISOString().substr(0, 10);
        document.querySelector("#current_date").value = today;
        document.querySelector("#current_date").valueAsDate = new Date();
    </script>
    <script>
        
        $(document).ready(function(){
            $('.btn-print').printPage();
            $('.focusguard-2').on('focus', function() {
                $('#sku').focus();
            });

            $(document).on('change keyup blur', '#item-discount', function(){
                var disc = $('#item-discount').val();
                var price = $('#price').val();
                var qty = $('#quantity').val();
                var total = price * qty;
                var mult = disc * qty;
                var discount = (total - mult);
                $('#new-price').val(price - disc);

            });

            $(document).scannerDetection({
                avgTimeByChar: 40,
                onComplete: function(barcode, qty){ 
                    $.ajax({
                        type: "GET",
                        url: "<?php echo e(route('sales.get-sku-product')); ?>",
                        data: {sku:barcode},
                        success: function(data){
                            $('#name').val(data.name);
                            $('#price').val(data.sale_rate);
                        },
                        error: function(data){
                            alert('Unable to Get SKU Product...!');
                        }
                    });
                },
            });

                    
            $('.btn-print').on('click', function(e){
                // e.preventDefault();
                var radioValue = $("input[name='print']:checked").val();
                if(radioValue == 'english'){
                    $("#btn-print-sale").attr("href", "<?php echo e(route('sale-print-english')); ?>");
                }
                if(radioValue == 'urdu'){
                    $("#btn-print-sale").attr("href", "<?php echo e(route('sale-print-urdu')); ?>");
                }
            });
            $.get('<?php echo e(route("sale.get-vendors")); ?>', function(data){
                $('#show-vendors-section').empty().append(data);
            });

            var total = $('#total').attr("data-id");
            $.get('<?php echo e(route("sale.get-session-items")); ?>', function(data){
                $('#session-items').empty().append(data);
                var total = $('#total').attr("data-id");
                document.querySelector("#total_bill").value = (total);
                document.querySelector("#receivable").value = (total);
            });

            $('#item').select2({
                placeholder: '--Select item--'
            });
            $('#wholesaler').select2({
                placeholder: '--Select wholesaler--'
            });

            $('#btn-add-in-list').click(function(e){
                e.preventDefault();
                // var sku = $("#sku").val();
                var id = $("#item").val();
                var price = $("#price").val();
                var qty = $("#quantity").val();
                var discount = $("#item-discount").val();
                var new_price = $("#new-price").val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('sales.add-item-to-session')); ?>",
                    data: {
                            id:id,
                            price:price,
                            qty:qty,
                            discount:discount,
                            new_price:new_price,
                        },
                    success: function(data){
                        $("#item").select2('val', ' ');
                        $("#quantity").val("1");
                        $("#price").val("0");
                        $("#item-discount").val("0");
                        $("#new-price").val("0");
                        $('#session-items').empty().append(data);
                        var total = $('#total').attr("data-id");
                        document.querySelector("#total_bill").value = (total);
                        document.querySelector("#receivable").value = parseInt($('#previous_due').val()) + parseInt(total);
                    },
                    error: function(data){
                        alert('Unable to Add Item in List..');
                    }
                }); 
            });

            // Hold Function
            $(".btn-hold").on('click', function(e){
                e.preventDefault();
                var customer = $('#customer').val();
                var total_bill = $("#total_bill").val();
                var previous_due = $('#previous_due').val();
                var receivable = $('#receivable').val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('sales.add-item-to-hold-session')); ?>",
                    data: {
                            customer:customer,
                            total_bill:total_bill,
                            previous_due:previous_due,
                            receivable:receivable,
                        },
                    success: function(data){
                        $("#item").select2('val', ' ');
                        $("#quantity").val("1");
                        $("#price").val("0");
                        $('#session-items').empty().append(data);
                        $("#total_bill").val("0");
                        $("#receivable").val("0");
                        $("#previous_due").val("0");
                        // window.location.reload();
                    },
                    error: function(data){
                        alert('Unable to Hold..');
                    }
                });
            });

            $(document).on('change keyup blur', '#received', function(){
                var receivable = $('#receivable').val();
                var received = $('#received').val();
                var diff = parseInt(received) - parseInt(receivable);
                $('#remaining').val(diff);
            });   

            $(document).on('change keyup blur', '#discount', function(){
                var type = $("input[name='discount_type']:checked").val();
                if(type == 'perc'){
                    var disc = $('#discount').val();
                    var main = $('#total_bill').val();
                    // var due = $('#previous_due').val();
                    var dec = (disc / 100); //its convert 10 into 0.10
                    var mult = main * dec; // gives the value for subtract from main value
                    var discont = (main - mult);
                    $('#receivable').val(discont);

                }
                // if(type =='fix'){
                //     var disc = $('#discount').val();
                //     var main = $('#total_bill').val();
                //     var due = $('#previous_due').val();
                //     var discont = (main - disc) + parseInt(due);
                //     $('#receivable').val(discont);
                // }
            });


            $(".btn-submit").click(function (e) {
                e.preventDefault();
                var customer = $('#customer').val();
                var current_date = $('#current_date').val();
                var payment_method = $('#payment_method').val();
                // var sale_type = $('#sale_type').val();
                var type = $('#type').val();
                var total_bill = $('#total_bill').val();
                var previous_due = $('#previous_due').val();
                var receivable = $('#receivable').val();
                var received = $('#received').val();
                var discount_type = $("input[name='discount_type']:checked").val();
                var discount = $('#discount').val();
                var remaining = $('#remaining').val();

                if(discount_type != undefined){
                    if(discount == ''){
                        alert('Fill Discount Field, Or reset.');
                        return;
                    }
                }
                if(received == ''){
                    alert('Received amount cannot be EMPTY');
                    return;
                }

                $.ajax({
                    url: "<?php echo e(route('sales.new-sale-action')); ?>",
                    method: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        current_date: current_date,
                        payment_method: payment_method,
                        type: type,
                        customer:customer,
                        total_bill: total_bill,
                        previous_due: previous_due,
                        receivable: receivable,
                        received: received,
                        discount_type: discount_type,
                        discount: discount,
                        remaining: remaining,
                        },
                    success:function(data){
                        // alert(data);
                        window.location.reload();
                    }
                });
            });

            $("#session-items").on('click', '.remove-from-sale', function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure")) {
                    $.ajax({
                        url: '<?php echo e(route("sales.delete-item-to-session")); ?>',
                        method: "DELETE",
                        data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
                        success: function (response) {
                            $('#session-items').empty().append(response);
                            var total = $('#total').attr("data-id");
                            document.querySelector("#total_bill").value = (total);
                            document.querySelector("#receivable").value = (total);
                        }
                    });
                }
            });

            $(".btn-reset").click(function (e) {
                e.preventDefault();
                var ele = $(this);
                if(confirm("Are you sure")) {
                    $.ajax({
                        url: '<?php echo e(route("sales.reset-session")); ?>',
                        method: "DELETE",
                        data: {_token: '<?php echo e(csrf_token()); ?>'},
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });



            $("#item").change(function(){
                var id = $("#item").val();
                var qty = $("#quantity").val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('sales.get-item-detail')); ?>",
                    data: {id:id},
                    success: function(data){
                            document.querySelector("#price").value = (data.sale_rate);
                            document.querySelector("#new-price").value = (data.sale_rate);
                    },
                    error: function(data){
                        alert('Error...!');
                    }
                });
            });

            $("#show-vendors-section").on('change','#customer', function(){
                var id = $("#customer").val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('sales.get-customer-account-detail')); ?>",
                    data: {id:id},
                    success: function(data){
                        if(data == ""){
                            document.querySelector("#previous_due").value = 0;
                            document.querySelector("#receivable").value = parseInt($('#total_bill').val());
                        }
                        else if(data.balance == null){
                            document.querySelector("#previous_due").value = 0;
                            document.querySelector("#receivable").value = parseInt(data.balance) + parseInt($('#receivable').val());
                        }
                        else{
                            document.querySelector("#previous_due").value = data.balance;
                            document.querySelector("#receivable").value = parseInt(data.balance) + parseInt($('#receivable').val());
                        }  
                    },
                    error: function(data){
                        alert('Error...!');
                    }
                });
            });

     
            $('#btn-customer-submit').click(function(e){
                e.preventDefault();
                var name = $('#account-name').val();
                // var u_name = $('#account-u_name').val();
                var address = $('#account-address').val();
                var phone = $('#account-phone').val();
                var type = $('#account-type').val();
                $.ajax({
                    url: "<?php echo e(route('sales.add-customer')); ?>",
                    type: "POST",   
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        name: name,
                        // u_name: u_name,
                        address: address,
                        phone: phone,
                        type: type,
                        },
                    success: function(data){
                        $("#myModalVendor").modal('hide');
                        $('#show-vendors-section').empty().append(data);
                    },
                    error: function(data){
                        alert('Error.....!');
                    }
                });
            });


        });
    </script>
</body>

</html><?php /**PATH C:\wamp64\www\alraheem\resources\views/order/sale-order-form.blade.php ENDPATH**/ ?>