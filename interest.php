  <!DOCTYPE html>
<html>
    <head>
        <title>Interest</title>
         <link rel="stylesheet" type="text/css" href="interestcss.css" />
    </head>
    <body>
         
         <div id="container">
             
        <div id="int">
            
                 <h2>Interest</h2>
                     <form name="int" action="interest.php" method="post">

            <textarea name="interest" cols="80" rows="20" placeholder="write here"></textarea>
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
    
    
$interest=$_POST['interest'];
 
 
    
$query=" INSERT INTO `interest`(`inttext` ) VALUES ('$interest')" or die ("Failed to query database".mysqli_error());
    
     
  $check=mysqli_query($conn,$query);
    if($check){
         header("Location:skills.php");
        $intid=mysqli_insert_id($conn);
          $_SESSION["intid"]=$intid;
    }
    else{
          echo("Soory,Error Occured");
    }
    
}



