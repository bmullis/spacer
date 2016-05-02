<?php
$page_title = "Inbox :: Spacer | Find Space, Rent Space";
$current_page = "inbox";
session_start();
require_once "includes/functions.php";
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
                    <h3>Messages</h3>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>