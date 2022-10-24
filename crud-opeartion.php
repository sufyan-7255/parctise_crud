<?php
include("connection.php");
include("index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Practise Crud</title>
</head>
<body>
    <br><br>
    <form method="POST" class="offset-md-5">
        <input type="text" name="inputname" placeholder="Enter Name">
        <br><br>
        <input type="text" name="inputemail" placeholder="Enter Email">
        <br><br>
        <input type="text" name="inputpassword" placeholder="Enter Password">
        <br><br><br>
        <input class="btn btn-success" name="submit" type="submit">
    </form>



<br><br>


<div class="container">
    <table class="table table-border table-hover">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        
    <?php

$selectquery = "select * from 1_practise_tbl";
$selectqueryconnect = mysqli_query($con, $selectquery);
while($r = mysqli_fetch_array($selectqueryconnect))
{
    ?>
    <td><?php echo $r["id"]?></td>
    <td><?php echo $r["name"]?></td>
    <td><?php echo $r["email"]?></td>
    <td><?php echo $r["password"]?><br></td>
    <?php
}
    
    ?>
    
    
</table>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    
</body>
</html>