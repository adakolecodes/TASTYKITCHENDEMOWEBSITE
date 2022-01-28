<?php
session_start();

if(isset($_POST['signup'])){
    require "dbconfig.php";

    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    $sql = "INSERT INTO customers (phonenumber, password) VALUES ('$phonenumber', '$password')";
    $exe = mysqli_query($connect, $sql);

    $_SESSION['success'] = "Success";
    header("location: index.html");
}

?>