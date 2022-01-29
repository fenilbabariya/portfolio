<?php
session_start();
require "db.php";

// echo "<pre>";
// echo print_r($_POST);
// echo "</pre>";

$id = isset($_POST['id'])?$_POST['id']:"";
$title = isset($_POST['title'])?$_POST['title']:"";
$author = isset($_POST['author'])?$_POST['author']:"";
$price = isset($_POST['price'])?$_POST['price']:"";
$stock = isset($_POST['stock'])?$_POST['stock']:"";

$filename=$_FILES['bookimage']['name'];
$tempname=$_FILES['bookimage']['tmp_name'];
$fname=date('d-m-Y_H-i-s');
$pname=$fname."_".$filename;
$folder="images/".$pname;
move_uploaded_file($tempname,$folder);
if($id=="")
{
    $sql = "insert into books (title, author, price, stock, titleurl) values ('$title', '$author', '$price', '$stock', '$folder')";
}
else
{
    $sql = "update books set title='$title', author='$author', price='$price', stock='$stock' where id=$id";
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