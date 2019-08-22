<!DOCTYPE html>
<html>
    <head>
         
        
    </head>
       <body>
            name:<input type="text" name="name">
              
            
              </body>




</html>



<?php

if(isset($_POST['insert']))
 { 

$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$age=$_POST['age']; 
$religion=$_POST['religion']; 
$gender=$_POST['gender'];
 


 
$host="localhost";
$user="root";
$password="";
$dbname="project";
 
 $conn=mysqli_connect($host,$user,$password,$dbname);
     
    
    
    
  $usercheck= " SELECT * FROM `user` WHERE name='$name'";
    
    if ($row=$usercheck){
        echo("ID:".$row["id"]);
        
        
    }











?>