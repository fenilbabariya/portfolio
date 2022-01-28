<?php
session_start();
require "db.php";

// echo "<pre>";
// echo print_r($_POST);
// echo "</pre>";

$id = isset($_POST['id'])?$_POST['id']:"";
$enrollment = isset($_POST['enrollment'])?$_POST['enrollment']:"";
$firstname = isset($_POST['firstname'])?$_POST['firstname']:"";
$lastname = isset($_POST['lastname'])?$_POST['lastname']:"";
$city = isset($_POST['city'])?$_POST['city']:"";

if($id=="")
{
    $sql = "insert into student (enrollment, firstname, lastname, city) values ('$enrollment', '$firstname', '$lastname', '$city')";
}
else
{
    $sql = "update student set enrollment='$enrollment', firstname='$firstname', lastname='$lastname', city='$city' where id=$id";
}

if($db->query($sql))
{
    $_SESSION['status'] = ($id=="")?"Insertion Successful":"Update Successful";
}
else
{
    $_SESSION['status'] = ($id=="")?"Insertion Failed":"Update Failed";
}
header("location:index.php");

?>