<?php

function show_spaces($view) {
    $arrLength = count($view->rows);
    $spaceCount = 0;

    for ($i = 0; $i < $arrLength; $i++) {
        if ($view->rows[$i]->value->author == $_SESSION['user']) {
            echo "<div class='space_prof_result'>\n";
            echo "<img class='space_pic' src='" . $view->rows[$i]->value->image . "'>\n";
            echo "<h2>" . $view->rows[$i]->value->title . "</h2>\n";
            echo "<p>" . $view->rows[$i]->value->space_type . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->desc . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->city . ", " . $view->rows[$i]->value->state . "</p>\n";
            echo "<a href='editspace.php' class='btn btn-primary btn-lg'>Edit This Space</a> &nbsp; \n";
            echo "<a href='createspace.php' class='btn btn-primary btn-lg'>New Space</a>\n";
            echo "</div>\n";
            $spaceCount++;
        }
    }

    if ($spaceCount == 0) {
        echo "<p>You haven't made any spaces yet.</p>\n";
        echo "<a href='createspace.php' class='btn btn-primary btn-lg'>Host a Space</a>\n";
    }
}

function show_space($users, $view, $current_space) {
    $arrLength = count($view->rows);

    for ($i = 0; $i < $arrLength; $i++) {
        if ($view->rows[$i]->value->title == $current_space) {
            $_SESSION['send_to'] = $view->rows[$i]->value->author;
            $_SESSION['current_space'] = $view->rows[$i]->value->title;
            echo "<div class='space_prof_result'>\n";
            echo "<img class='space_pic' src='" . $view->rows[$i]->value->image . "'>\n";
            echo "<h2>" . $view->rows[$i]->value->title . "</h2>\n";
            echo "<p>" . $view->rows[$i]->value->space_type . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->desc . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->city . ", " . $view->rows[$i]->value->state . "</p>\n";
            show_owner($users, $_SESSION['send_to']);
            echo "<a href='message.php' class='btn btn-primary btn-lg'>Contact Owner</a> &nbsp; \n";
            echo "<a href='search.php' class='btn btn-primary btn-lg'>New Search</a>\n";
            echo "</div>\n";
        }
    }
}

function show_owner($users, $owner) {
    $arrLength = count($users->rows);

    for ($i = 0; $i <$arrLength; $i++) {
        if ($users->rows[$i]->value->email == $owner) {
            echo "<h2>Owner:</h2>\n";
            echo "<img class='owner_pic' src='" . $users->rows[$i]->value->prof_pic . "'>\n";
            echo "<h3>" . $users->rows[$i]->value->f_name . "</h3>\n";
        }
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