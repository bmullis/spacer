<?php

function show_spaces($view) {
    $arrLength = count($view->rows);
    $spaceCount = 0;

    for ($i = 0; $i < $arrLength; $i++) {
        if ($view->rows[$i]->value->author == $_SESSION['user']) {
            echo "<img class='space_pic' src='" . $view->rows[$i]->value->image . "'>\n";
            echo "<h2>" . $view->rows[$i]->value->title . "</h2>\n";
            echo "<p>" . $view->rows[$i]->value->space_type . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->desc . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->city . ", " . $view->rows[$i]->value->state . "</p>\n";
            $spaceCount++;
        }
    }

    if ($spaceCount == 0) {
        echo "<p>You haven't made any spaces yet.</p>\n";
    }
}

function get_profile_info() {
    if ($_SESSION['prof_pic'] == "") {
        echo "<img src='img/blank_user.png'>\n";
    } else {
        echo "<img src='" . $_SESSION['prof_pic'] . "'>\n";
    }
    if ($_SESSION['f_name'] == "") {
    echo "<h2>Name: </h2>\n";
    } else {
    echo "<h2>" . $_SESSION['f_name'] . " " . $_SESSION['l_name'] . "</h2>\n";
    }
    if ($_SESSION['city'] == "") {
        echo "<p>City: </p>\n";
    } else {
        echo "<p>" . $_SESSION['city'] . ", " . $_SESSION['state'] . "</p>\n";
    }
    if ($_SESSION['bio'] == "") {
        echo "<p>Bio: </p>\n";
    } else {
        echo "<p>" . $_SESSION['bio'] . "</p>\n";
    }
}

?>