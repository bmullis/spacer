<?php
$page_title = "Contact :: Spacer | Find Space, Rent Space";
$current_page = "contact";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

<!-- header -->
<header class="jumbotron">
    <h1>Contact Us</h1>
</header>

<!-- contact section -->
<section class="contact container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" action="contact.php" class="form-horizontal">
                <div class="form-group">
                    <input type="text" id="cont_email" name="cont_email" class="form-control" placeholder="Your Email Address" required>
                    <input type="text" id="cont_subject" name="cont_subject" class="form-control" placeholder="Message Subject" required>
                    <textarea id="cont_message" name="cont_message" class="form-control" placeholder="Write Your Message Here" required></textarea>
                </div>
                <button class="btn btn-lg btn-primary" id="message_submit" name="message_submit" type="submit">
                    <i class="fa fa-send"></i> &nbsp; Send
                </button>
            </form>
        </div>
</section>

<section class="ribbon">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Find Your Perfect Space</h2>
            </div>
        </div>
    </div>
</section>

<?php include_once ('layout/footer.php'); ?>
