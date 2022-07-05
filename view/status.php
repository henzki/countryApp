<?php
    $updated = filter_input(INPUT_GET, "updated", FILTER_VALIDATE_INT);
    $deleted = filter_input(INPUT_GET, "deleted", FILTER_VALIDATE_INT);

    if($updated) {
        echo "Country record succesfully updated";
    }
    if($deleted) {
        echo "Country record succesfully deleted";
    }
?>