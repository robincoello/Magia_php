<?php
# MagiaPHP 
# file date creation: 2024-04-11 
?>
<?php include view("home", "header"); ?>  

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks", "izq_add"); ?></div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <h1>
            <?php _menu_icon("top", 'tasks'); ?> 
            <?php _t("Add tasks"); ?>
        </h1>
        <?php include view("tasks", "form_add", $arg = ["redi" => 1]); ?>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks", "der_add"); ?>

    </div>
</div>

<?php include view("home", "footer"); ?>

