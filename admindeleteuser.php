<?php
include "config.php";
session_start();
/* $userprofile=$_SESSION['username'];
if($userprofile==true){
}
else{
    header("location:login.php");
} */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($connection, "DELETE  FROM `login` WHERE `id`='$id'");
    header("location:adminindex.php");
    exit;
}