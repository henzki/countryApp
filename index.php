<?php 

    require('model/database.php');
    require('model/country_db.php');

    $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
    $capital = filter_input(INPUT_POST, 'capital', FILTER_VALIDATE_INT);
    $codetwo = filter_input(INPUT_POST, 'codetwo', FILTER_SANITIZE_STRING);
    $continent = filter_input(INPUT_POST, 'continent', FILTER_SANITIZE_STRING);
    $gnp = filter_input(INPUT_POST, 'gnp', FILTER_VALIDATE_FLOAT);
    $gnpold = filter_input(INPUT_POST, 'gnpold', FILTER_VALIDATE_FLOAT);
    $governmentform = filter_input(INPUT_POST, 'governmentform', FILTER_SANITIZE_STRING);
    $headofstate = filter_input(INPUT_POST, 'headofstate', FILTER_SANITIZE_STRING);
    $indepyear = filter_input(INPUT_POST, 'indepyear', FILTER_VALIDATE_INT);
    $lifeexpectancy = filter_input(INPUT_POST, 'lifeexpectancy', FILTER_VALIDATE_FLOAT);
    $localname = filter_input(INPUT_POST, 'localname', FILTER_SANITIZE_STRING);
    $population = filter_input(INPUT_POST, "population", FILTER_VALIDATE_INT);
    $region = filter_input(INPUT_POST, 'region', FILTER_SANITIZE_STRING);
    $surfacearea = filter_input(INPUT_POST, 'surfacearea', FILTER_VALIDATE_FLOAT);

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action) {
            $action = 'search_form';
        }
    }

    $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_STRING);
    if (!$country) {
        $country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_STRING);
    }

    switch($action) {
        case 'search':
            if($country) {
                $results = search_country_by_name($country);
                include('view/view.php');
            }else {
                $error_message = 'Invalid country data. Check all fields.';
                include('view/error.php');
            }
            break;
        case 'select':
            if($country) {
                $results = select_country_by_name($country);
                include('view/update_form.php');
            }else {
                $error_message = 'Invalid country data. Check all fields.';
                include('view/error.php');
            }
            break;
        case 'update':
            if($code && $country && $capital && $codetwo && $continent && $gnp && $gnpold && $governmentform && $headofstate && $indepyear && $lifeexpectancy && $localname && $population && $region && $surfacearea) {
                $count = update_country($code, $country, $capital, $codetwo, $continent, $gnp, $gnpold, $governmentform, $headofstate, $indepyear, $lifeexpectancy, $localname, $population, $region, $surfacearea);
                header("Location: .?action=select&country={$country}&updated={$count}");
            } else {
                $error_message = 'Invalid country data. Check all fields.';
                include('view/error.php');
            }
            break;
        case 'delete':
            if ($code) {
                $count = delete_country($code);
                header("Location: .?deleted={$count}");
            } else {
                $error_message = 'Invalid country data. Check all fields.';
                include('view/error.php');
            }
            break;
        default:
            include('view/search_form.php');
    }

?>