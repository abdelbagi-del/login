<?php
session_start();
if(!isset($_SESSION["user"])) {
    header("location: index.php");
}

if(isset($_GET["logout"])){
    session_destroy();
    header("location: index.php");
}

$user = $_SESSION["user"];

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحة المستخدمين  </title>
</head>
<body>
    
<h1>مرحبا بك  <?php echo $user; ?></h1>
<a href="?logout"> تسجيل الخروج  </a>
</body>
</html>