<?php
$page_title = "Create a Sapce :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main">
                    <h1>Create a Space</h1>
                    <form enctype="multipart/form-data" method="post" action="includes/create_space.php" class="form-horizontal">
                        <div class="form-group">
                            <input type="text" id="space_name" name="space_name" class="form-control" placeholder="Name Your Space">
                            <input type="text" id="space_type" name="space_type" class="form-control" placeholder="What Type of Space Is It?">
                            <input type="text" id="space_city" name="space_city" class="form-control" placeholder="City">
                            <input type="text" id="space_state" name="space_state" class="form-control" placeholder="State">
                            <textarea id="space_desc" name="space_desc" class="form-control" placeholder="Describe Your Space"></textarea>
                            <input type="file" id="space_image" name="space_image">
                        </div>
                        <button class="btn btn-lg btn-primary" id="update_submit" name="update_submit" type="submit">Create This Space</button>
                        <a href="spaces.php" class="btn btn-lg btn-primary cancel">Cancel</a>
                    </form>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>