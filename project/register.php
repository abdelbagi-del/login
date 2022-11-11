<?php
session_start();
if(isset($_SESSION["user"])) 
 {
    header("location: dashboard.php");
}

if(isset($_POST["submit"]))  {
$user = $_POST["user"];
$pass = $_POST["pass"];

$con = mysqli_connect("localhost", "root", "", "dbas");
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
mysqli_query($con, $sql);
mysqli_close($con);
header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحة التسجيل للموقع</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body dir="rtl">

<div class="d-flex align-items-center min-vh-100">
<div class="container d-flex justify-content-center">
<form method="post">
<h1 class="text-center mb-4">  تسجيل الاشتراك </h1>

<div class="mb-3">
<label for="user" class="form-label"> إسم المستحدم</label>
<input type="text" id="user" name="user" class="form-control" required>
</div>

<div class="mb-3">
<label for="pass" class="form-label">   كلمة المرور  </label>
<input type="password" id="pass" name="pass" class="form-control" required>
</div>

<div class="mb-3">
<a href="index.php" class="text-decoration-none">               هل لديك حساب(تسجيل الدخول)       </a>
</div> 
<button type="submit" name="submit" class="btn btn-success w-75 d-block m-auto" > تسجيل حساب      </button>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>