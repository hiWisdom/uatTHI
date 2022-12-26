<?php

require 'constants.php';

//destroy all session and redirect users to log in page

session_destroy();
header('location:' . 'index.php');
die();