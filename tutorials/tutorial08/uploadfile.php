<?php

//echo "<pre>";
//print_r($_FILES['profile']);
//echo "<pre>";

$filename=$_FILES['profile']['name'];
$tempname=$_FILES['profile']['tmp_name'];
$fname=date('d-m-Y_H-i-s');
$pname=$fname."_".$filename;
$folder="images/".$pname;
move_uploaded_file($tempname,$folder);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- echo "<img src="<?=$folder?>" height=200 width=300 /><br>"; -->
    <img src="<?=$folder?>" alt="" srcset="" height=300 width=400>
    <br>
    <p><?=$pname?></p>
</body>
</html>