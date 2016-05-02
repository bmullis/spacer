<?php
$page_title = "Message :: Spacer | Find Space, Rent Space";
$current_page = "search";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container main-form">
            <div class="row">
                <div class="col-md-12">
                    <h1>Send a Message</h1>
                </div>
            </div>
            <div class="row console">
                <div class="col-md-6 col-md-offset-3">
                    <form enctype="multipart/form-data" method="post" action="includes/create_space.php" class="form-horizontal">
                        <div class="form-group">
                            <input type="hidden" id="msg_to" name="msg_to" value="<?php echo $_SESSION['send_to']; ?>">
                            <input type="hidden" id="msg_space" name="msg_space" value="<?php echo $_SESSION['current_space']; ?>">
                            <input type="hidden" id="msg_from" name="msg_space" value="<?php echo $_SESSION['current_space']; ?>">
                            <input type="text" id="space_type" name="space_type" class="form-control" placeholder="What Type of Space Is It?" required>
                            <input type="text" id="space_city" name="space_city" class="form-control" placeholder="City" required>
                            <input type="text" id="space_state" name="space_state" class="form-control" placeholder="State" required>
                            <textarea id="space_desc" name="space_desc" class="form-control" placeholder="Describe Your Space" required></textarea>
                        </div>
                        <button class="btn btn-lg btn-primary" id="msg_submit" name="msg_submit" type="submit">Send Message</button>
                        <a href="search.php" class="btn btn-lg btn-primary cancel">Cancel</a>
                    </form>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>