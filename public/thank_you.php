
<?php
require_once("../resources/config.php");

?>

<?php

include(TAMPLATE_FRONT .DS. "header.php");
require_once("cart.php");
?>

<?php
if(isset($_GET['tx']))
{
    $amount=$_GET['amt'];
    $concurrency=$_GET['cc'];
    $transaction=$_GET['tx'];
    $status=$_GET['st'];
    $query=query("INSERT INTO orders (order_amount,order_transaction,order_status,order_currency) VALUES ('{$amount}','{$transaction}','{$status}','{$concurrency}')");
    confirm($query);
    session_destroy();
}
else
{
    redirect('index.php');
}
?>
<div class="container">

<h1 class="text-center">Thank You.</h1>

 </div>


<?php

include(TAMPLATE_FRONT .DS. "footer.php");
?>