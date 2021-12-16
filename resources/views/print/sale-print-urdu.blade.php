<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='{{ asset('public/print/css/style.css') }}' />
	<link rel='stylesheet' type='text/css' href='{{ asset('public/print/css/print.css') }}' media="print" />
	{{-- <script type='text/javascript' src='{{ asset('public/print/js/jquery-1.3.2.min.js') }}'></script> --}}
	{{-- <script type='text/javascript' src='{{ asset('public/print/js/example.js') }}'></script> --}}

</head>

<body>

	<div id="page-wrap">

		{{-- <textarea id="header">INVOICE</textarea> --}}
		<h3 style="text-align: center;margin-bottom:20px;">Sale Invoice</h3>
		<div id="identity">
            <textarea id="address">TOOR HARDWARE STORE 
Sahiwal Road, Pakpatan Sharif 
Phone: 0300-6949038</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Date</td>
                    <td><textarea id="date">{{ $sales->current_date }}</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Customer</td>
                    @if ($sales->customer)
                        <td><div class="due">{{ $sales->customer['u_name'] }}</div></td>
                    @else
                        <td><div class="due">{{ $sales->walking_customer }}</div></td>
                    @endif
                </tr>
                <tr>
                    <td class="meta-head">Invoice#</td>
                    <td>{{ ''.str_pad($sales->id + 1, 6, "0", STR_PAD_LEFT) }}</td>
                </tr>
            </table>
		</div>
		<div style="clear:both"></div>
		<table id="items" style="margin-bottom:0px;">
		  <tr style="width: 100%;">
		      <th>قیمت</th>
              <th>ائٹم</th>
              {{-- <th>Item</th> --}}
		      <th>تعداد</th>
          </tr>
        @if ($sales->sale_items)
            @foreach($sales->sale_items as $id => $item)
                <tr class="item-row" style="width: 100%;">
                    <td><textarea class="cost" readonly>{{ $item->price }}</textarea></td>
                    <td><textarea class="qty" readonly>{{ $item->u_name }}</textarea></td>
                    {{-- <td><textarea class="qty" readonly>{{ $item->name }}</textarea></td> --}}
                    <td><span class="price">{{ $item->quantity }}</span></td>
                </tr>
            @endforeach
        @else
            <div style="text-align: center;"><h4>No Item Selected</h4></div>
        @endif
		</table>
        <p style="font-size: 20px;"><span>{{ $sales->total_bill }} :</span><span>کل بل</span></p>
        <p style="font-size: 20px;"><span><b>{{ $sales->receivable }} :</b></span><span><b>قابل وصول</b></span></p>
        <p style="font-size: 20px;"><span>{{ $sales->received }} :</span><span>وصول</span></p>
		<div id="terms">
		  {{-- <h5>Terms</h5> --}}
		  <textarea>Developed By: M Abbas | Contact: 03321773514</textarea>
		</div>
	
	</div>
	
</body>

</html>