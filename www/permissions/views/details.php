<?php include view("home", "header"); ?> 

<div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3">
        <?php // include view("permissions", "izq"); ?>
    </div>

    <div class="col-sm-6 col-md-6 col-lg-6">

        <h1>
            <?php echo _menu_icon("top", "permissions") ?>
            <?php _t("Permissions details"); ?>
        </h1>
        <hr>
        <?php
        if ($_REQUEST) {
            foreach ($error as $key => $value) {
                message("info", "$value");
            }
        }
        ?>


        <?php // include "form_details.php"; ?>
        <?php include view("permissions", "form_details"); ?>

    </div>

    <div class="col-sm-3 col-md-3 col-lg-3">

        <?php // include "der.php";  ?>
    </div>
</div>


<?php // include("www/home/views/footer.php"); ?>  
<?php include view("home", "footer"); ?>

