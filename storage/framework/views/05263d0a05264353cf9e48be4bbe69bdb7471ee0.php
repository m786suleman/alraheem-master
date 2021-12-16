<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>POS (Point of Sale Software) - A brand of WebEasy Pvt Limited.</title>
    <link rel="stylesheet" href="<?php echo e(asset('public/print/style.css')); ?>" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <?php if(Auth::user()): ?>
            <?php if(Auth::user()->logo): ?>
              <img src="<?php echo e(asset('public/users').'/'.Auth::user()->logo); ?>" style="height: 80px;">
            <?php endif; ?>
        <?php endif; ?>
      </div>
      <div id="company">
        <?php if(Auth::user()): ?>
          <h2 class="name"><?php echo e(Auth::user()->name); ?></h2>
          <div><?php echo e(Auth::user()->address); ?></div>
          <div><?php echo e(Auth::user()->phone); ?></div>
          <div><a href="mailto:<?php echo e(Auth::user()->email); ?>"><?php echo e(Auth::user()->email); ?></a></div>
        <?php endif; ?>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <?php if($sales->walking_customer): ?>
            <h2 class="name"><?php echo e($sales->walking_customer); ?> Customer</h2>
          <?php else: ?>    
            <h2 class="name"><?php echo e($sales->customer['name']); ?></h2>
            <div class="address"><?php echo e($sales->customer['address']); ?></div>
            <div class="email"><a href=""><?php echo e($sales->customer['phone']); ?></a></div>
          <?php endif; ?>
        </div>
        <div id="invoice">
          <h1>INVOICE <?php echo e('#'.str_pad($sales->id, 5, "0", STR_PAD_LEFT)); ?></h1>
          <div class="date">Date of Invoice: <?php echo e($sales->current_date); ?></div>
          
        </div>
      </div>
      <table border="1" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
              <th class="no">#</th>
              <th class="no">Item</th>
              <th class="no">Qty</th>
              <th class="no">Price</th>
              
              
              <th class="no">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $total = 0;
              $books = 0;
              $price = 0;
          ?>
          <?php $__currentLoopData = $sales->sale_return_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
              $price += $item->price * $item->quantity;
              $total += $item->total;
              $books += $item->quantity;
          ?>
            <tr>
              <td style="text-align: center;"><?php echo e($key+1); ?></td>
              <td style="text-align: center;font-size:20px;"><?php echo e($item->name); ?></td>
              <?php
                  $pro = \App\Models\Item::whereName($item->name)->first();
              ?>
              <td class="desc" style="text-align: center;"><?php echo e($item->quantity); ?></td>
              <td class="qty" style="text-align: center;"><?php echo e($item->price); ?></td>
              
              
              <td style="text-align: center;"><h3><?php echo e($item->total); ?></h3></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
          <?php if($sales->discount): ?>
            <tr>
              <td colspan="4">Discount</td>
              <td>
                <?php if($sales->discount_type): ?>
                  <?php if($sales->discount_type == 'perc'): ?>
                  <?php echo e($sales->discount); ?> %
                  <?php else: ?>
                  <?php echo e($sales->discount); ?> - PKR
                  <?php endif; ?>
                <?php endif; ?>
              </td>
            </tr>
          <?php endif; ?>
          <tr>
            <td colspan="2">Total Items</td>
            <td style="text-align: center;"><?php echo e($books); ?></td>
          
            <td>Current Total</td>
            <td><?php echo e($sales->total_bill); ?></td>
          </tr>
          <?php if($sales->customer_id): ?>
            <tr>
              <td colspan="4">Previous Due</td>
              <td><?php echo e($sales->previous_due); ?></td>
            </tr>
          <?php endif; ?>
          <tr>
            <td colspan="4"><b>Received</b></td>
            <td><b><?php echo e($sales->received); ?></b></td>
          </tr>
          <tr>
            <td colspan="4"><b>Grand Total</b></td>
            <td><b><?php echo e($sales->receivable - $sales->received); ?></b></td>
          </tr>
        </tfoot>
      </table>
      
    </main>
    <div style="text-align: center;">
        
        Developed By <a href="">M Abbas</a>. Whatsapp: <a href="">03321773514</a>
    </div>
  </body>
</html><?php /**PATH C:\wamp64\www\abdulrehman\resources\views/print/sale-return-print-english.blade.php ENDPATH**/ ?>