<?php

session_start();
header("location:login.html");

$con = mysqli_connect("localhost", "admin", "pass");

mysqli_select_db($con, "userregi");

$name = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["password"];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1)  {
    echo "Username Already Taken!";
}else {
    $reg = " insert into usertable(username, email, password) values ('$name', '$email', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>