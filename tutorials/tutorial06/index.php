<?php
    session_start();
?>

<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Home </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  </head>
<body>

<?php
      if(!isset($_SESSION['username'])) // If session is not set then redirect to Registration Page
       {
           header("Location:login.php");  
       }
       else
       {
            echo 'Welcome To Home Page...'.$_SESSION['username'];
          //echo '<script type="text/javascript"> alert("Login Successfully..."); </script>';
            echo "</br><a href='logout.php'>Click Here To Logout</a> "; 
       }
?>

<div class="container mb-3 mt-3">
      <form action="logout.php" method="post">
        <table class="table table-striped table-bordered" id="myTable" style="width: 100%">
            <thead class="table-dark">
                <tr>
                    <td><b>No</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Age</b></td>
                    <td><b>State</b></td>
                    <td><b>City</b></td>
                    <td><b>Action</b></td>
                </tr>
            </thead>
            <tbody>
                <tr id="tab_1">
                    <td>1</td>
                    <td>Fenil</td>
                    <td>fbabariya706@gmail.com</td>
                    <td>21</td>
                    <td>Gujarat</td>
                    <td>Rajkot</td>
                    <td>
                        <button type="submit" id="btn1" class="btn btn-danger">Logout</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
      </form>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
$(document).ready(function()
        {
            
        });
    </script>
</body>
</html>