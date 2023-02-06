<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$age = $_POST['age'];

if (
    empty($name) || empty($email) || empty($password) || empty($mobile)
    || empty($age)
) {
    echo "Please Fill Out The Form!";
    exit;
}

$sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
if (mysqli_num_rows($sql) > 0) {
    echo "Email Has Already Taken";
    exit;
}

$sql = "INSERT INTO user (NAME,EMAIL,PASSWORD,MOBILE,AGE) VALUES ('{$name}','{$email}','{$password}',{$mobile},{$age})";
if ($con->query($sql)) {
    echo "Registration Successful";
}
