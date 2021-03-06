<?php
    session_start();
    if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(isset($_SESSION['username']))   // Checking whether the session is already there or not
        {
            $valuser=$_SESSION['username'];
            $valpass=$_SESSION['password'];
                
            if(($user == $valuser)  && ($pass == $valpass))
            {
				header("Location:index.php");
                //echo '<script type="text/javascript"> window.open("index.php","_blank");</script>';    //  On Successful Login redirects to index.php
            }
            else
            {
                echo '<script type="text/javascript"> alert("Invalid Username Or Password");</script>';        
            }
        }
        else
        {
            echo '<script type="text/javascript">
            alert("Please Registration First");
            window.open("registration.php","_blank");
            </script>';             
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
    body
        {
            background: #4b6cb7;
            background: -webkit-linear-gradient(to right, #182848, #4b6cb7);
            background: linear-gradient(to right, #182848, #4b6cb7);
        }
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
    </style>
</head>
<body>
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-sm-6 p-5">
                <form action="login.php" method="post">
                <div class="card rounded-3 bg-dark text-light">
                        <h5 class="mt-3 text-center">LOGIN</h5>
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-md-4">
                                    Username
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="username" class="form-control bg-dark text-light" placeholder="name@example.com">
                                </div>
                            </div>
                            
                            <div class="row p-2">
                                <div class="col-md-4">
                                    Password
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control bg-dark text-light" placeholder="Password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                    <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col text-center mt-2">
                                    <b>New User? </b><a href="registration.php">Register Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>