
<?php
require_once("../resources/config.php");

?>

<?php

include(TAMPLATE_FRONT .DS. "header.php");
?>



<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- slide_nav-->
        <?php
        include(TAMPLATE_FRONT .DS. "slide_nav.php");
        ?>



        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <?php
                    include(TAMPLATE_FRONT .DS. "slider.php");
                    ?>

                    <!--carousel-->
                </div>

            </div>

            <div class="row">


                <?php get_product();?>
            </div>

        </div>

    </div>

</div>
<!-- /.container -->
<?php

include(TAMPLATE_FRONT .DS. "footer.php");
?>
