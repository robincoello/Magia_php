<?php
# MagiaPHP 
# file date creation: 2024-01-19 
?>
<?php include view("home", "header"); ?> 

<div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks_categories", "izq_details"); ?>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-8">
        <h1>
            <?php _menu_icon("top", 'tasks_categories'); ?>
            <?php _t("tasks_categories details"); ?>
        </h1>
        <hr>
        <?php
        if ($_REQUEST) {
            foreach ($error as $key => $value) {
                message("info", "$value");
            }
        }
        ?>
        <?php include view("tasks_categories", "form_details"); ?>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks_categories", "der_details"); ?>
    </div>
</div>

<?php include view("home", "footer"); ?>
