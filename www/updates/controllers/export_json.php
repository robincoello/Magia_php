<?php

if (!permissions_has_permission($u_rol, $c, "read")) {
    header("Location: index.php?c=home&a=no_access");
    die("Error has permission ");
}


$error = array();
$updates = null;
$updates = updates_list();
//
include view("updates", "export_json");

if ($debug) {
    include "www/updates/views/debug.php";
}