  <!DOCTYPE html>
<html>
    
        <head>
        <title>Experience</title>
         <link rel="stylesheet" type="text/css" href="experiencecss.css" />
    </head>
    <body>
         
         <div id="container">
             
        <div id="exp">
            
                 <h2>Experience</h2>
                     <form name="exp" action="experience.php" method="post">

            <textarea name="experience" cols="80" rows="20" placeholder="write here"></textarea>
            <br><br>
        <input type="submit" class="button1" name="save" value="next" required>
    </form>
    </div>

         
        </div>
    </body>
    
</html>


<?php
session_start();

   
$host="localhost";
$user="root";
$password="";
$dbname="project";

 $conn=mysqli_connect($host,$user,$password,$dbname);

if(isset($_POST['save']))

{
    
    
$experience=$_POST['experience'];
 
 
    
$query=" INSERT INTO `experience`(`exptext` ) VALUES ('$experience')" or die ("Failed to query database".mysqli_error());
    
     
  $check=mysqli_query($conn,$query);
    if($check){
         header("Location:interest.php");
         
        $expid=mysqli_insert_id($conn);
          $_SESSION["exid"]=$expid;
    }
    else{
          echo("Soory,Error Occured");
    }
    
}





 