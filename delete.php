<?php

include ('connect.php') ;

$id=$_GET['id'] ;

$deleteSql = "DELETE FROM teachers WHERE  id= '$id'";
$url = "index.php" ;

mysqli_query($con,$deleteSql) or die("<p>ВНИМАНИЕ ! На этой странице возможно произошла ошибка.</p>". mysqli_error($con));
header('Location: '.$url);

?>