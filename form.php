
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    <style type="text/css">
        body{
            color: blue ;
            background-color: lightblue ;
            margin: auto ;
            display: flex ;
        
        }

        .dataentry {
            position: absolute;
            left: 100px;
            top: 30px;
            color: blue;
            margin: auto;
            border-radius: 5px;
            background: grey;
            padding: 20px;
            font-size: 12px;
        }

        input[type=text], select{
            width: 100%;
            padding: 12px 20 px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1rem;
            line-height: inherit;
            color: inherit;
            white-space: normal;
        }

        .teacherslist {
            position: absolute;
            right: 100px;
            top: 30px;
            color: blue;
        }

        .image {
            position: absolute;
            left: 80px;
            right: 20px;
            top: ; 
            bottom: 20px;
           
        }
                

    </style>

    <title>Teachers List</title>
</head>
<body>
    
    <div>

        <div class="dataentry">
          
                <form action="insert.php" method="POST"> 
                    <fieldset>
                        <legend>Teachers working in Mirzo Ulughbek district</legend>

                        <label>Names of Teachers</label>
                        <input type="text" name="teachers" placeholder="Full Name" required> <br>                                          
                        <label>Gender</label>
                        <select name="gender" id="gender">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        <br>
                        <label>Teacher's car</label>
                        <select name="car" id="car">
                            <?php $query= "SELECT * FROM cars" ;            
                            $result103 = mysqli_query($con,$query)   or die(mysqli_error($con));  
                            while($row103 = mysqli_fetch_assoc( $result103 )) {
            
            
                            ?>
                            <option value="0">No Car</option>
                            <option value="<?php echo $row103['car_model'] ; ?>"><?php echo $row103['car_model'] ; ?></option> 
                            <?php };?>  

                        </select>
                        <button type="submit" name="save">Enter</button>

                    </fieldset>
                </form>
            
            
        </div>

        <br>

        <div class="image">
            <img src="images/image2.jpg" alt="teachers picture"  height="300"> 
        
        </div>

    </div>

    <hr>

    <div class="teacherslist">

        <h6>Register of Teachers working in Mirzo Ulughbek district, Tashkent </h6>
        <table class="table table-striped table-hover table-responsive text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Teachers</th>
            <th scope="col">Gender</th> 
            <th scope="col">Car</th>                                          
            <th scope="col">Registered Date</th>                                     
            <th scope="col">Actions</th>                                     
        </tr>
        </thead>

        <tbody>
        <?php $query= "SELECT * FROM teachers" ;            
        $result103 = mysqli_query($con,$query)   or die(mysqli_error($con));  
        while($row103 = mysqli_fetch_assoc( $result103 )) {
            
            
            ?>
        <tr>
            <td><?php echo $row103['id'] ; ?></td>
            <td><?php echo $row103['teachers'] ; ?></td>
            <td><?php 
            $gender= $row103['gender'] ;
            if ( $gender==1) 
            {
                echo "male";
            }
            elseif ( $gender==2) 
            {
                echo "female";
            }
            ?></td>
            <td>
            <?php 
            $car= $row103['car'] ;
            if (empty ($car)) 
            {
                echo "n.a.";
            }
            elseif (isset ($car)) 
            {
                echo $row103['car'];
            }
            ?>
            </td>
            <td><?php echo $row103['date'] ; ?></td>
            

            <td> <a href="delete.php?id=<?php  echo $row103['id'] ; ?>"> <button type="button" class="btn btn-primary">Delete</button> </a>
            
            <a href="edit.php?id=<?php  echo $row103['id'] ; ?>&teachers=<?php  echo $row103['teachers'] ; ?>"> <button type="button" class="btn btn-success">Edit</button></td> </a>
            
        </tr>  
        
        <?php } ; ?>
    
        
        </tbody> 

        </table>

    </div>





</body>
</html>