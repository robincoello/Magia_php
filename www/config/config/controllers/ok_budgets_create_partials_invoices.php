<?php

if (!permissions_has_permission($u_rol, $c, "update")) {
    header("Location: index.php?c=home&a=no_access");
    die("Error has permission ");
}


$data = (isset($_POST["data"])) ? clean($_POST["data"]) : false;
$redi = (isset($_POST["redi"])) ? clean($_POST["redi"]) : false;

$error = array();

if ($data == '') {
    array_push($error, 'All fields required');
}

################################################################################
################################################################################
################################################################################
if (!$error) {

    // si no existe lo crea
    _options_push('config_budgets_create_partials_invoices', $data, 'budgets');

    switch ($redi) {
        case 1:
            header("Location: index.php?c=budgets&sms=1");
            break;

        default:
            header("Location: index.php?c=config&a=budgets_create_partials&sms=1");
            break;
    }
} else {

    include view('home', 'pageError');
}







