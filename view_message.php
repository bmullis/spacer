<?php
$page_title = "Inbox :: Spacer | Find Space, Rent Space";
$current_page = "inbox";
$msg_id = $_GET['msg_id'];
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container main-inbox">
            <div class="row">
                <div class="col-md-12">
                    <h1>Inbox</h1>
                </div>
            </div>
            <div class="row console">
                <div class="col-md-6 col-md-offset-3">
                    <?php $user_messages =  get_messages($messages); ?>
                    <?php $current_msg = get_single_message($user_messages, $msg_id); ?>
                    <?php var_dump($current_msg); ?>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>