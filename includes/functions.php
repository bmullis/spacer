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
            echo "<h2 class='text-center'>" . $view->rows[$i]->value->title . "</h2>\n";
            echo "<img class='space_pic' src='" . $view->rows[$i]->value->image . "'>\n";
            echo "<p>" . $view->rows[$i]->value->space_type . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->desc . "</p>\n";
            echo "<p>" . $view->rows[$i]->value->city . ", " . $view->rows[$i]->value->state . "</p>\n";
            $the_owner = show_owner($users, $_SESSION['send_to']);
            echo "<h2>Owner:</h2>\n";
            echo "<img class='owner_pic' src='" . $the_owner->value->prof_pic . "'>\n";
            echo "<h3>" . $the_owner->value->f_name . " " . $the_owner->value->l_name . "</h3>\n";
            echo "<p>" . $the_owner->value->city . ", " . $the_owner->value->state . "</p>\n";
            echo "<p>" . $the_owner->value->bio . "</p>\n";
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
            $the_owner = [];
            $the_owner = $users->rows[$i];
        }
    }
    return $the_owner;
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

function get_messages($messages) {
    $arrLength = count($messages->rows);
    $user_messages = [];

    for ($i = 0; $i <$arrLength; $i++) {
        if ($messages->rows[$i]->value->msg_to == $_SESSION['user']) {
            $user_messages[] = $messages->rows[$i];
        }
    }
    return $user_messages;
}

function show_user_messages($user_messages) {
    $arrLength = count($user_messages);

    for ($i = 0; $i < $arrLength; $i++) {
        echo "    <tr>\n";
        echo "      <th scope='row'>" . ($i + 1) . "</th>\n";
        echo "          <td><a href='view_message.php?msg_id=" . $user_messages[$i]->value->msg_id . "'>" . $user_messages[$i]->value->msg_subject . "</a></td>\n";
        echo "          <td>" . $user_messages[$i]->value->timestamp . "</td>\n";
        echo "  </tr>\n";
    }
}

function get_single_message($user_messages, $msg_id) {
    $arrLength = count($user_messages);

    for ($i = 0; $i < $arrLength; $i++) {
        if ($user_messages[$i]->value->msg_id == $msg_id) {
            $current = $user_messages[$i];
        }
    }
    return $current;
}

?>