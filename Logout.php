<?php
session_start();
header("Location: RPLO.php");
unset($_SESSION);
session_destroy();

?>