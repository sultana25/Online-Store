
<?php
require_once("../resources/config.php");

?>

<?php

include(TAMPLATE_FRONT .DS. "header.php");
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Products</h3>


            </div>
            <div class="row_text_center">
                <?php get_product_in_cat_page();?>
            </div>

        </div>
        <!-- /.row -->

        <!-- Page Features -->

        </div>
        <!-- /.row -->

        <?php

        include(TAMPLATE_FRONT .DS. "footer.php");
        ?>
