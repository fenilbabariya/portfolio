<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $m = $_POST["month"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Result</title>
    <style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
</style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header text-center">
                        <h4>You have selected</h4>
                    </div>
                        <select class="form-select mt-1">
                            <option <?= ($m==1)?"selected":0; ?>>January</option>
                            <option <?= ($m==2)?"selected":0; ?>>February</option>
                            <option <?= ($m==3)?"selected":0; ?>>March</option>
                            <option <?= ($m==4)?"selected":0; ?>>April</option>
                            <option <?= ($m==5)?"selected":0; ?>>May</option>
                            <option <?= ($m==6)?"selected":0; ?>>June</option>
                            <option <?= ($m==7)?"selected":0; ?>>July</option>
                            <option <?= ($m==8)?"selected":0; ?>>August</option>
                            <option <?= ($m==9)?"selected":0; ?>>September</option>
                            <option <?= ($m==10)?"selected":0; ?>>October</option>
                            <option <?= ($m==11)?"selected":0; ?>>November</option>
                            <option <?= ($m==12)?"selected":0; ?>>December</option>
                        </select>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>