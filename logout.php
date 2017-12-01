<?php
ob_start();
session_start();
?>
<?php
include('seguridad.php');
session_destroy();
header("Location: layout.php");
?>