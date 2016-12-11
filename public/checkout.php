<?php
require_once("../resources/config.php");

?>

<?php

include(TAMPLATE_FRONT .DS. "header.php");
require_once("cart.php");
?>

<!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">

      <h1>Checkout</h1>
    <h4 class="text-center"><?php display_message(); ?></h4>

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="ssazeda@gmail.com">
        <input type="hidden" name="currency_code" value="USD">
        <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>

          </tr>
        </thead>
        <tbody>
        <?php cart(); ?>
        </tbody>
    </table>
        <input type="image" name="upload"
               src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
               alt="PayPal - The safer, easier way to pay online">
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo(isset($_SESSION['item_quantity']))?$_SESSION['item_quantity']: $_SESSION['item_quantity']="0";?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">&#36;<?php echo(isset($_SESSION['total_item']))?$_SESSION['total_item']: $_SESSION['total_item']="0";?></span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


<?php

include(TAMPLATE_FRONT .DS. "footer.php");
?>