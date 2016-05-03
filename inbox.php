<?php
$page_title = "Inbox :: Spacer | Find Space, Rent Space";
$current_page = "inbox";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container main-inbox">

            <div class="row console">
                <div class="col-md-10">
                    <?php $user_messages =  get_messages($messages); ?>
                    <h1>Messages</h1>
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Sent Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php show_user_messages($user_messages); ?>
                        </tbody>
                    </table>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>