  <!DOCTYPE html>
<html>
    <head>
        <title>Skills</title>
         <link rel="stylesheet" type="text/css" href="skillscss.css" />
    </head>
       <body>
         
         <div id="container">
             
             
        <div id="skl">
            
            
                 <h2>skills</h2>
                     <form name="skl" action="skills.php" method="post">

            <textarea name="skills" cols="80" rows="20" placeholder="write here"></textarea>
            <br><br>
        <input type="submit" class="button1" name="save" value="submit" required>
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
    
    
$skills=$_POST['skills'];
 
 
    
$query=" INSERT INTO `skills`(`skltext` ) VALUES ('$skills')" or die ("Failed to query database".mysqli_error());
    
     
  $check=mysqli_query($conn,$query);
    if($check){
         header("Location:cv.php");
         $sklid=mysqli_insert_id($conn);
          $_SESSION["sklid"]=$sklid;
        
    }
    else{
          echo("Soory,Error Occured");
    }
    
}



