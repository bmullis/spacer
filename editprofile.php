<?php
$page_title = "Edit Profile :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main">
                    <h1>Edit Profile</h1>
                    <form enctype="multipart/form-data" method="post" action="includes/update_user.php" class="form-horizontal">
                        <div class="form-group">
                            <input type="text" value="<?php echo $_SESSION['f_name']; ?>" id="f_name" name="f_name" class="form-control" placeholder="First Name">
                            <input type="text" value="<?php echo $_SESSION['l_name'] ?>" id="l_name" name="l_name" class="form-control" placeholder="Last Name">
                            <input type="text" value="<?php echo $_SESSION['city'] ?>" id="city" name="city" class="form-control" placeholder="City">
                            <input type="text" value="<?php echo $_SESSION['state'] ?>" id="state" name="state" class="form-control" placeholder="State">
                            <textarea id="bio" name="bio" class="form-control" placeholder="Bio"><?php echo $_SESSION['bio']; ?></textarea>
                            <input type="file" id="prof_pic" name="prof_pic">
                        </div>
                        <button class="btn btn-lg btn-primary" id="update_submit" name="update_submit" type="submit">Update Profile</button>
                        <a href="profile.php" class="btn btn-lg btn-primary cancel">Cancel</a>
                    </form>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>