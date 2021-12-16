<?php 
    $total = 0;
    $index = 0;
?>
@if ($sales)
    @foreach($sales as $id => $sale)
    <?php 
        $total += $sale->new_price * $sale->quantity; 
        $index++;
    ?>
        <tr>
            <td><a href="#" title="Delete" class="icon remove-from-sale" data-id="{{ $sale->id }}"><i class="fa fa-trash-o"></i></a></td>
            <td>{{ $sale->name }}</td>
            <td>{{ $sale->price }}</td>
            <td>{{ $sale->quantity }}</td>
            <td>{{ $sale->discount }}</td>
            <td>{{ $sale->new_price }}</td>
            <td>{{ $sale->total }}</td>
        </tr>
    @endforeach
    <input type="hidden" id="total" name="total" data-id="{{ $total }}">
@else
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
@endif