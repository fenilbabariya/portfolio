<?php
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-4"> 
    	<table class="table table-dark table-striped">
    		<thead>
        	<tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>City</th>
                    <th>Stream</th>
                    <th>Sem</th>
                    <th>Mobile</th>
            </tr>
            </thead>
            <?php
            $sql = "select No,concat(firstname,' ',lastname) as fullname,city,stream,sem,mobile from student";
    		$result = $db->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                //print_r($row);
            ?>
            
            <tbody class="table">
            <tr>
                    <td><?=$row['No']?></td>
                    <td><?=$row['fullname']?></td>
                    <td><?=$row['city']?></td>
                    <td><?=$row['stream']?></td>
                    <td><?=$row['sem']?></td>
                    <td><?=$row['mobile']?></td>
                    
            </tr>
        </tbody>
            <?php
            	}
            ?>
      
    	</table>

</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>