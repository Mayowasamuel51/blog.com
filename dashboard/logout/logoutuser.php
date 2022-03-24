<?php


session_start();
session_destroy();
session_abort();
header("location:\blog.com/userpage/login/loginuser.php");