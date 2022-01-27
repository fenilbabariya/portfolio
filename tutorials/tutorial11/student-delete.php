<?php
session_start();
require "db.php";

$enrollment = isset($_GET['enrollment'])?$_GET['enrollment']:"";
if($enrollment == "")
{
    header("location:index.php");
}
$sql = "delete from user where enrollment=$enrollment";
$db->quert($sql);
$_SESSION['status'] = "Record Deleted";
header("location:index.php");
?>