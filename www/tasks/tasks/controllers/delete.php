<?php

if (!permissions_has_permission($u_rol, $c, "delete")) {
    header("Location: index.php?c=home&a=no_access");
    die("Error has permission ");
}

$id = (isset($_GET["id"]) && $_GET["id"] != "" ) ? clean($_GET["id"]) : false;

$error = array();

###############################################################################
# REQUERIDO
################################################################################
if (!$id) {
    array_push($error, "Id is mandatory");
}
###############################################################################
# FORMAT
################################################################################
if (!tasks_is_id($id)) {
    array_push($error, 'Id format error');
}
###############################################################################
# CONDICIONAL
################################################################################
if (!tasks_field_id("id", $id)) {
    array_push($error, "Id not exist");
}
################################################################################
if (!$error) {
    $tasks = new Tasks();
    $tasks->setTasks($id);

    include view("tasks", "delete");
} else {
    include view("home", "pageError");
}    

