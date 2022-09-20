<?php 
session_start();

unset($_SESSION['D_FNAME']);
session_destroy();

header("location:./");

?>