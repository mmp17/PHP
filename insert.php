<?php

include ('connect.php') ;

$teachers=$_POST['teachers'] ;
$gender=$_POST['gender'] ;
$car=$_POST['car'] ;

$sql ="INSERT INTO teachers (id, teachers, gender, car, date) 
VALUES(NULL, '$teachers', '$gender', '$car', NOW())";
      $result2 = mysqli_query($con , $sql ) or die("Ошибка " . mysqli_error($con));

      if($result2)
    {
      
      echo "<div class='alert alert-success alert-styled-right alert-arrow-right alert-bordered'>
                    <button type='button' class='close' data-dismiss'alert'><span>×</span><span class='sr-only'>Close</span></button>
                    <span class='text-semibold'>Success!</span> 
                    </div>" ;
  }


?>