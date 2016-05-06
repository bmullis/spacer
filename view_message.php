<?php
$page_title = "Inbox :: Spacer | Find Space, Rent Space";
$current_page = "inbox";
$msg_id = $_GET['msg_id'];
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container-fluid main-inbox">

            <div class="row console">
                <div class="col-md-10 view_message">
                    <?php $user_messages =  get_messages($messages); ?>
                    <?php $current_msg = get_single_message($user_messages, $msg_id); ?>
                    <?php $sent_from = show_owner($users, $current_msg->value->msg_from); ?>
                    <h1>View Message</h1>
                    <h2>Subject: </h2>
                    <?php echo "<p>" . $current_msg->value->msg_subject . "</p>\n"; ?>
                    <h2>Message: </h2>
                    <?php echo "<p>" . $current_msg->value->msg_message . "</p><br>\n"; ?>
                    <h2>Sent From: </h2>
                    <?php echo "<a href='view_profile.php?user=" . base64_encode($sent_from->value->email) . "'><img class='owner_pic' src='" . $sent_from->value->prof_pic . "'></a>\n"; ?>
                    <?php echo "<h3>" . $sent_from->value->f_name . " " . $sent_from->value->l_name . "</h3>\n"; ?>
                    <?php echo "<p>" . $sent_from->value->city . ", " . $sent_from->value->state . "</p>\n"; ?>
                    <?php $_SESSION['send_to'] = $sent_from->value->email; ?>
                    <?php echo "<a class='btn btn-primary' href='message.php?msg_id=" . $current_msg->value->msg_subject . "'>Reply to User</a>\n"; ?>
                    <?php echo "<a class='btn btn-primary' href='includes/delete_message.php?msg_id=" . $current_msg->value->msg_id . "'>Delete Message</a>\n"; ?>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>