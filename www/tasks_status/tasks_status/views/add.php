<?php
# MagiaPHP 
# file date creation: 2024-01-19 
?>
<?php include view("home", "header"); ?>  

<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks_status", "izq_add"); ?></div>

    <div class="col-sm-12 col-md-8 col-lg-8">
        <h1>
            <?php _menu_icon("top", 'tasks_status'); ?>
            <?php _t("Add tasks_status"); ?>
        </h1>
        <?php include view("tasks_status", "form_add"); ?>
    </div>

    <div class="col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks_status", "der_add"); ?>

    </div>
</div>

<?php include view("home", "footer"); ?>

