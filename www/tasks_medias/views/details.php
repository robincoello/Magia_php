<?php
# MagiaPHP 
# file date creation: 2024-04-28 
?>
<?php include view("home", "header"); ?> 

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks_medias", "izq_details"); ?>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-8">
        <h1>
            <?php _menu_icon("top", 'tasks_medias'); ?>
            <?php _t("Tasks_medias details"); ?>
        </h1>
        <hr>
        <?php
        if ($_REQUEST) {
            foreach ($error as $key => $value) {
                message("info", "$value");
            }
        }
        ?>
        <?php include view("tasks_medias", "form_details", $arg = ["redi" => 1]); ?>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-2">
        <?php include view("tasks_medias", "der_details"); ?>
    </div>
</div>

<?php include view("home", "footer"); ?>
