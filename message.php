<?php
$page_title = "Message :: Spacer | Find Space, Rent Space";
$current_page = "inbox";
if (isset($_GET['msg_id'])) {
    $msg_id = $_GET['msg_id'];
}
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid main-form">

            <div class="row console">
                <div class="col-md-10">
                    <h1>Send Message</h1>
                    <h3>Send Message To:</h3>
                    <?php $the_owner = show_owner($users, $_SESSION['send_to']) ?>
                    <a href="view_profile.php?user=<?php echo base64_encode($_SESSION['send_to']); ?>"><img class="owner_pic" src="<?php echo $the_owner->value->prof_pic; ?>"></a>
                    <h3><?php echo $the_owner->value->f_name . " " . $the_owner->value->l_name; ?></h3>
                    <form method="post" action="includes/create_message.php" class="form-horizontal">
                        <div class="form-group">
                            <input type="hidden" id="msg_to" name="msg_to" value="<?php echo $_SESSION['send_to']; ?>">
                            <input type="hidden" id="msg_from" name="msg_from" value="<?php echo $_SESSION['user']; ?>">
                            <input type="text" id="msg_subject" name="msg_subject" class="form-control"
                                value="<?php if (isset($msg_id)) { echo "RE: " . $msg_id; } else { echo ""; }  ?>"
                            placeholder="Subject" required>
                            <textarea id="msg_message" name="msg_message" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <button class="btn btn-primary" id="msg_submit" name="msg_submit" type="submit">Send Message</button>
                        <a href="inbox.php" class="btn btn-primary cancel">Cancel</a>
                    </form>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>