<?php
$page_title = "User Profile :: Spacer | Find Space, Rent Space";
$current_page = "user_profile";
$user = base64_decode($_GET['user']);
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
$_SESSION['send_to'] = $user;
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container-fluid main">

            <div class="row console">
                <div class="col-md-10">
                    <h1>User Profile</h1>
                    <?php $the_user = show_owner($users, $user) ?>
                    <h2><?php echo $the_user->value->f_name . " " . $the_user->value->l_name; ?></h2>
                    <img src="<?php echo $the_user->value->prof_pic; ?>">
                    <h3><?php echo $the_user->value->city . ", " . $the_user->value->state; ?></h3>
                    <p><?php echo $the_user->value->bio; ?></p>
                    <h1>Spaces Hosted by User</h1>
                    <?php $user_spaces = get_user_spaces($view, $the_user->value->email); ?>
                    <?php show_user_spaces($user_spaces); ?>
                    <br>
                    <a href="message.php" class="btn btn-primary">Message User</a>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>