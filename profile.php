  <!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
         <link rel="stylesheet" type="text/css" href="profilecss.css" />
    </head>
    <body>
         <div id="container">
             
        <div id="pfl">
            
                 <h2>Profile</h2>
                     <form name="pfl" action="profile.php" method="post">

            <textarea name="profile" cols="60" rows="20" placeholder="write here"></textarea>
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
    
    
$profile=$_POST['profile'];
 
 
    
$query=" INSERT INTO `profile`(`profiletext` ) VALUES ('$profile')" or die ("Failed to query database".mysqli_error());
    
     
  $check=mysqli_query($conn,$query);
  
    if($check){
        header("Location:experience.php");
       $prfid = mysqli_insert_id($conn);
        $_SESSION["pid"]=$prfid;
    }
    else{
          echo("Soory,Error Occured");
    }
    
}































?>