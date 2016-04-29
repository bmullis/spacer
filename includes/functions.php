<?php

function show_spaces($view) {

    $arrLength = count($view);

    for ($i = 0; $i < $arrLength; $i++) {

        if ($view->rows[$i]->value->author == $_SESSION['user']) {

            echo "<h3>" . $view->rows[$i]->value->title . "</h3>\n";
            echo "<img class='space_pic' src='" . $view->rows[$i]->value->image . "'>'\n";
            echo "<p>" . $view->rows[$i]->value->space_type . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->desc . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->city . ", " . $view->rows[$i]->value->state . "</p>\n";

        }

    }

}

?>