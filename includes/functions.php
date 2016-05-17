<?php

function show_spaces($view, $owner) {
    $arrLength = count($view->rows);
    $spaceCount = 0;

    for ($i = 0; $i < $arrLength; $i++) {
        if ($view->rows[$i]->value->author == $owner) {
            echo "<div class='space_prof_result'>\n";
            echo "<img class='rounded' src='" . $view->rows[$i]->value->image . "'>\n";
            echo "<h1>" . $view->rows[$i]->value->title . "</h1>\n";
            echo "<h2>" . $view->rows[$i]->value->city . ", " . $view->rows[$i]->value->state . "</h2>\n";
            echo "<h3>" . $view->rows[$i]->value->space_type . "</h3>\n";
            echo "<p>" . $view->rows[$i]->value->desc . "</p>\n";
            echo "<a href='editspace.php?space=" . $view->rows[$i]->value->title . "' class='btn btn-primary'>Edit This Space</a>\n";
            echo "<a href='createspace.php' class='btn btn-primary'>New Space</a>\n";
            echo "</div>\n";
            $spaceCount++;
        }
    }

    if ($spaceCount == 0) {
        echo "<img class='space_pic' src='img/cube.png'>\n";
        echo "<p>You haven't made any spaces yet.</p>\n";
        echo "<a href='createspace.php' class='btn btn-primary'>Host a Space</a>\n";
    }
}

function show_user_spaces($userspaces) {
    $arrLength = count($userspaces);
    $spaceCount = 0;

    for ($i = 0; $i < $arrLength; $i++) {
        echo "<h2>" . $userspaces[$i]->value->title . "</h2>\n";
        echo "<img class='space_pic' src='" . $userspaces[$i]->value->image . "'>\n";
        echo "<h3>" . $userspaces[$i]->value->city . ", " . $userspaces[$i]->value->state . "</h3>\n";
        echo "<h3>" . $userspaces[$i]->value->space_type . "</h3>\n";
        echo "<p>" . $userspaces[$i]->value->desc . "</p><br>\n";
        $spaceCount++;
    }

    if ($spaceCount == 0) {
       echo "<p>This user doesn't host any spaces yet.</p>\n";
    }
}

function get_user_spaces($view, $the_user) {
    $arrLength = count($view->rows);
    $user_spaces = [];

    for ($i = 0; $i < $arrLength; $i++) {
        if ($view->rows[$i]->value->author == $the_user) {
            $user_spaces[] = $view->rows[$i];
        }
    }
    return $user_spaces;
}

function get_single_space($view, $the_space) {
    $arrLength = count($view->rows);
    $key = "";

    for ($i = 0; $i < $arrLength; $i++) {
        if ($view->rows[$i]->value->title == $the_space) {
            $key = $view->rows[$i];
        }
    }

    return $key;
}

function show_space($users, $view, $current_space) {
    $arrLength = count($view->rows);

    for ($i = 0; $i < $arrLength; $i++) {
        if ($view->rows[$i]->value->title == $current_space) {
            $_SESSION['send_to'] = $view->rows[$i]->value->author;
            $_SESSION['current_space'] = $view->rows[$i]->value->title;
            echo "<div class='space_prof_result'>\n";
            echo "<img class='rounded' src='" . $view->rows[$i]->value->image . "'>\n";
            echo "<h1>" . $view->rows[$i]->value->title . "</h1>\n";
            echo "<h2>" . $view->rows[$i]->value->city . ", " . $view->rows[$i]->value->state . "</h2>\n";
            echo "<h3>" . $view->rows[$i]->value->space_type . "</h3>\n";
            echo "<p>" . $view->rows[$i]->value->desc . "</p>\n";
            $the_owner = show_owner($users, $_SESSION['send_to']);
            echo "<h2>Owner:</h2>\n";
            echo "<a href='view_profile.php?user=" . base64_encode($the_owner->value->email) . "'><img class='owner_pic' src='" . $the_owner->value->prof_pic . "'></a>\n";
            echo "<h2>" . $the_owner->value->f_name . " " . $the_owner->value->l_name . "</h2>\n";
            echo "<h3>" . $the_owner->value->city . ", " . $the_owner->value->state . "</h3>\n";
            echo "<a href='message.php' class='btn btn-primary'>Contact User</a>\n";
            echo "<a href='view_profile.php?user=" . base64_encode($the_owner->value->email) . "' class='btn btn-primary '>View User</a>\n";
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

    if (!isset($_SESSION['prof_pic'])) {
        echo "<img class='rounded' src='img/blank_user.png'>\n";
    } else {
        echo "<img class='rounded' src='" . $_SESSION['prof_pic'] . "'>\n";
    }
    if (!isset($_SESSION['f_name'])) {
        echo "<h1>Name: </h1>\n";
    } else {
        echo "<h1>" . $_SESSION['f_name'] . " " . $_SESSION['l_name'] . "</h1>\n";
    }
    if (!isset($_SESSION['city'])) {
        echo "<h3>City: </h3>\n";
    } else {
        echo "<h3>" . $_SESSION['city'] . ", " . $_SESSION['state'] . "</h3>\n";
    }
    if (!isset($_SESSION['bio'])) {
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

function get_unread_messages($messages) {
    $arrLength = count($messages->rows);
    $unread_messages = 0;

    for ($i = 0; $i <$arrLength; $i++) {
        if ($messages->rows[$i]->value->msg_to == $_SESSION['user'] && $messages->rows[$i]->value->unread == true) {
            $unread_messages++;
        }
    }
    return $unread_messages;
}

function show_user_messages($user_messages) {
    $arrLength = count($user_messages);

    for ($i = 0; $i < $arrLength; $i++) {
        echo "    <tr>\n";
        echo "      <th scope='row'>" . ($i + 1) . "</th>\n";

        if ($user_messages[$i]->value->unread == true) {
            echo "          <td><span id='unread'><strong><a href='view_message.php?msg_id=" . $user_messages[$i]->value->msg_id . "'>" . $user_messages[$i]->value->msg_subject . "</a></strong></span></td>\n";
        } else {
            echo "          <td><a href='view_message.php?msg_id=" . $user_messages[$i]->value->msg_id . "'>" . $user_messages[$i]->value->msg_subject . "</a></td>\n";
        }

        echo "          <td>" . $user_messages[$i]->value->timestamp . "</td>\n";
        echo "  </tr>\n";
    }
}

function get_single_message($user_messages, $msg_id) {
    $arrLength = count($user_messages);

    for ($i = 0; $i < $arrLength; $i++) {
        if ($user_messages[$i]->value->msg_id == $msg_id) {
            $current = $user_messages[$i];
            if ($current->value->unread == true) {
                header ('location: includes/update_message.php?msg_id=' . $msg_id);
            }
        }
    }
    return $current;
}

function get_online_users($online_users) {
    $arrLength = count($online_users->rows);

    for ($i = 0; $i < $arrLength; $i++) {
        $online_list[] = $online_users->rows[$i]->value->user;
    }

    return $online_list;
}

?>