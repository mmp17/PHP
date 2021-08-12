<?php

include ('connect.php') ;

$id=$_POST['id'] ;
$teachers=$_POST['teachers'] ;
$gender=$_POST['gender'] ;
$url="index.php" ;

$sql="UPDATE teachers
SET teachers = '$teachers', gender= '$gender'  
WHERE id = $id;" ;
    $result2 = mysqli_query($con , $sql ) or die("Ошибка " . mysqli_error($con));

    if($result2)
  {
    
    header('Location: '.$url);
}

?>