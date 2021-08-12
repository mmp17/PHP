<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include ('connect.php') ;
$id=$_GET['id'] ;

$query= "SELECT * FROM teachers WHERE id='$id'";            
        $result103 = mysqli_query($con,$query)   or die(mysqli_error($con));  
        while($row103 = mysqli_fetch_assoc( $result103 )) {
?>
    
<form action="save.php" method="POST">
<label>Teachers</label>
<input type="text" name="teachers" value="<?php echo $row103['teachers'] ; ?>"> <br><br>
<label>Gender</label>
<input type="select" name="gender" value="<?php echo $row103['gender'] ; ?>"> <br> <br>

<input type="hidden" name="id" value="<?php echo $row103['id'] ; ?>"> <br><br>
<button type="submit" name="save">O'zgartirish</button>
</form>

<?php
        } ;
?>



</body>
</html>