<?php
$page_title = "Edit Profile :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid main-form">

            <div class="row console">
                <div class="col-md-10">
                    <div class="search_header">
                        <h1>Edit Profile</h1>
                    </div>
                    <br><br>
                    <form enctype="multipart/form-data" method="post" action="includes/update_user.php" class="form-horizontal">
                        <div class="form-group">
                            <input type="text" value="<?php
                                    if (isset($_SESSION['f_name'])) {
                                        echo $_SESSION['f_name'];
                                    } else {
                                        echo "";
                                    }
                                ?>" id="f_name" name="f_name" class="form-control" placeholder="First Name" required>
                            <input type="text" value="<?php
                                if (isset($_SESSION['l_name'])) {
                                    echo $_SESSION['l_name'];
                                } else {
                                    echo "";
                                }
                            ?>" id="l_name" name="l_name" class="form-control" placeholder="Last Name" required>
                            <input type="text" value="<?php
                            if (isset($_SESSION['city'])) {
                                echo $_SESSION['city'];
                            } else {
                                echo "";
                            }
                            ?>" id="city" name="city" class="form-control" placeholder="City" required>
                            <input type="text" value="<?php
                            if (isset($_SESSION['state'])) {
                                echo $_SESSION['state'];
                            } else {
                                echo "";
                            }
                            ?>" id="state" name="state" class="form-control" placeholder="State (use 2 letter abbrev)" maxlength="2" required>
                            <textarea id="bio" name="bio" class="form-control" placeholder="Bio" required><?php
                            if (isset($_SESSION['bio'])) {
                                echo $_SESSION['bio'];
                            } else {
                                echo "";
                            }
                            ?></textarea>
                            <?php
                            if (!isset($_SESSION['prof_pic'])) {
                                echo "<br><img id='prev_pic' class='owner_pic' src='" . $_SESSION['prof_pic'] . "'><br><br>\n";
                                echo "Change Profile Picture: <input type='file' id='prof_pic' name='prof_pic'>\n";
                                } else {
                                echo "<br><img id='prev_pic' class='owner_pic' src='" . $_SESSION['prof_pic'] . "'><br><br>\n";
                                echo "Change Profile Picture: <input type='file' id='prof_pic' name='prof_pic'>\n";
                                }
                            ?>
                        </div>
                        <button class="btn btn-primary" id="update_submit" name="update_submit" type="submit">Update Profile</button>
                        <a href="profile.php" class="btn btn-primary cancel">Cancel</a>
                    </form>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>