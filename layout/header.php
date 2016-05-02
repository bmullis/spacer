<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="author" content="Brian Mullis">
    <meta name="description" content="Spacer is a space sharing website.">
    <meta name="keywords" content="Share, Space, Community">
    <meta property="og:title" content="Spacer | Find Space, Rent Space">
    <meta property="og:description" content="Spacer is a space sharing website.">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="summary_large_image">

    <!-- FOR MOBILE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/cube.png">

    <!-- TITLE -->
    <title><?php echo $page_title; ?></title>

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400|Lato:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/cube.png">Spacer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a <?php if ($current_page == 'about') { echo "class='active'"; } ?> href="about.php">About</a></li>
                <li><a <?php if ($current_page == 'contact') { echo "class='active'"; } ?> href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user'])) {

                    echo "    <li class='dropdown'>\n";
                    echo "        <a href='#' class='dropdown-toggle";
                        if ($current_page == 'profile' ||
                            $current_page == 'dashboard' ||
                            $current_page == 'spaces' ||
                            $current_page == 'search' ||
                            $current_page == 'inbox') {
                            echo " active'\n";
                        } else {
                            echo "'\n";
                        }
                    echo "data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>\n";
                    echo            $_SESSION['user'] . "<span class='caret'></span>\n";
                    echo "        </a>\n";
                    echo "        <ul class='dropdown-menu'>\n";
                    echo "            <li><a class='";
                    if ($current_page == 'dashboard') {
                        echo "active";
                    }
                    echo "            ' href='dashboard.php'><i class='fa fa-dashboard'></i> &nbsp; Dashboard</a></li>\n";
                    echo "            <li><a class='";
                    if ($current_page == 'inbox') {
                        echo "active";
                    }
                    echo "            ' href='inbox.php'><i class='fa fa-envelope'></i> &nbsp; Inbox</a></li>\n";
                    echo "            <li><a class='";
                    if ($current_page == 'profile') {
                        echo "active";
                    }
                    echo "            ' href='profile.php'><i class='fa fa-user'></i> &nbsp; Profile</a></li>\n";
                    echo "            <li><a class='";
                    if ($current_page == 'spaces') {
                        echo "active";
                    }
                    echo "            ' href='spaces.php'><i class='fa fa-home'></i> &nbsp; Your Spaces</a></li>\n";
                    echo "            <li><a class='";
                    if ($current_page == 'search') {
                        echo "active";
                    }
                    echo "            ' href='search.php'><i class='fa fa-search'></i> &nbsp; Search</a></li>\n";
                echo "                  <hr>\n";
                    echo "            <li><a href='includes/logout.php'> <i class='fa fa-sign-out'></i> &nbsp; Logout</a></li>\n";
                    echo "        </ul>\n";
                    echo "    </li>\n";
                } else {
                    echo "      <li><a id='modal_trigger' href='#modal'><i class='fa fa-sign-in'></i> Sign In / <i class='fa fa-user'></i> Register</a></li>\n";

                }
                ?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>