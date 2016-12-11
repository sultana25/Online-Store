
<?php
require_once("../resources/config.php");

?>

<?php

include(TAMPLATE_FRONT .DS. "header.php");
?>

<!-- Page Content -->
<div class="container">

    <header>
        <h1>Shop</h1>
    </header>

    <hr>

    <!-- Title -->
    <div class="row">

        <div class="row_text_center">
            <?php get_product_in_shop_page();?>
        </div>

    </div>
    <!-- /.row -->

    <!-- Page Features -->

</div>
<!-- /.row -->

<?php

include(TAMPLATE_FRONT .DS. "footer.php");
?>
