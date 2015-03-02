<?php
session_start();

if(isset($_SESSION['admin'])){ unset($_SESSION['admin']); } 
else {	 $_SESSION['admin'] = '1'; }

echo '<script>window.location.href = "../index.php";</script>';




?>