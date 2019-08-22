 <!DOCTYPE html>
<html>
    <head>
        <title>Education</title>
         <link rel="stylesheet" type="text/css" href="educationcss.css" />
    </head>
<body>
 
<div id="edu">
                <form name="education" action="education.php" method="post">
                    <h2>Education</h2>
    <table>
        <tr>
                    <td>
                        College:
                    </td>
                <td>
                   
              <input type="text" name="college">
                         
                    </td>
                    </tr>
         <tr>
                    <td>
                        University:
                    </td>
                <td>
                   
              <input type="text" name="university">
                         
                    </td>
                    </tr>
            
             
<tr>
                    <td>
                        SSC CGPA:
                    </td>
                <td>
                   
              <input type="text" name="ssccgpa">
                         
                    </td>
                    </tr>
            
             
                   <tr>
                    <td>
                         HSC CGPA:
                    </td>
                <td>
                   
              <input type="text" name="hsccgpa">
                         
                    </td>
                    </tr>
            
             
                   <tr>
                    <td>
                         BSC CGPA:
                    </td>
                <td>
                   
              <input type="text" name="bsccgpa">
                         
                    </td>
        </tr>
         <tr>
                    <td>
                        Pass Year:
                    </td>
                <td>
                   
              <input type="number" name="bscyear">
                         
                    </td>
                    </tr>
         <tr>
               
                   <tr>
                    <td>
                         MSC CGPA:
                    </td>
                <td>
                   
              <input type="text" name="msccgpa">
                         
                    </td>
        </tr>
         <tr>
                    <td>
                        Pass Year:
                    </td>
                <td>
                   
              <input type="number" name="mscyear">
                         
                    </td>
                    </tr>
         <tr>
              
                    
             
                </table>
                    <br><br>
                <input type="submit" class="button1" name="save" value="next" required>
    </form>

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
    
    
$college=$_POST['college'];
$university=$_POST['university'];
$ssccgpa=$_POST['ssccgpa'];
$hsccgpa=$_POST['hsccgpa'];
$bsccgpa=$_POST['bsccgpa'];
$bscyear=$_POST['bscyear'];
$msccgpa=$_POST['msccgpa'];
$mscyear=$_POST['mscyear'];
  
    
 
 
    
$query=" INSERT INTO `education`(`college`, `university`, `ssccgpa`, `hsccgpa`, `bsccgpa`, `bscyear`, `msccgpa`, `mscyear`) VALUES ('$college','$university','$ssccgpa','$hsccgpa','$bsccgpa','$bscyear','$msccgpa','$mscyear')" or die ("Failed to query database".mysqli_error());
    
     
  $check=mysqli_query($conn,$query);
    if($check){
         header("Location:profile.php");
         $eduid = mysqli_insert_id($conn);
        $_SESSION["educationid"]=$eduid;
    }
    else{
          echo("Soory,Error Occured");
    }
    
}

if(isset($_GET['logout'])) {
    session_destroy();
    header('location:login.php');
}



 