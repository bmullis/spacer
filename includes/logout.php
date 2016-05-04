<?php

session_start();

require_once ('remove_online.php');

session_destroy();

header('location: ../index.php');

?>