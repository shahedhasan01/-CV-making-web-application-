<!DOCTYPE html>

<html>
<head>
     
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="logincss.css" />
</head>
<body>
    <div id="container">
        
        <div id="nav">
            <form name="logForm" action="login.php" method="post">
                
            <h2>Registration & Login</h2>

            <img src="log.png" alt="logimg" width="150" height="150" />
            <br><br>
                
            <h3>Log In</h3>
            
            Username <br><input type="text" name="name"required>
            <br>
            Password <br><input type="password" name="password"required>
            <br><br>
            <input type="submit" name="login" value="login" required>
         </form>
        </div>

            <div id="mid">
                <form name="myForm" action="login.php"   method="post">


                    <h3>Register</h3>
                    
                    Username <br><input type="text" name="username"required>
                    <br><br>
                    Email  <br><input type="text" name="email">
                    <br><br>
                    Password  <br>
                    <input type="password" name="pass"required>
                     
                    <br> <br>
                    Age <br> <input type="number" name="age">
                    <br> <br>

                    Religion <select name="religion">
                        <option value="islam">Islam</option>
                        <option value=" hindu ">Hindu</option>
                        <option value="christian">Christian</option>
                    </select>
                    <br><br>
                    Gender<input type="radio" name="gender" value="male" >male
                      
                          <input type="radio" name="gender" value="female" >female
                       <br><br>
                    
                    <input type="checkbox" name="tic"> Accept Terms and Conditions<br><br>


                    <input type="submit" name="insert" class="button" value="Sign up" >
                    
                </form>
                 

            </div>
        </div>
</body>
</html>




<?php

session_start();

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
     
    
     $usercheck= " SELECT * FROM `user` WHERE name='$username'";
     
     $querycheck=mysqli_query($conn,$usercheck);
     
     $userfetch=mysqli_fetch_array($querycheck);
     
     if ($userfetch['name'==$username]){
        echo("Same Name already exits.");
         
     }
     
     else{ 
     
 $query=" INSERT INTO `user`(`name`, `email`, `password`, `age`, `religion`,`gender` ) VALUES ('$username','$email','$pass','$age','$religion','$gender')" or die ("Failed to query database".mysqli_error());
    
     
  $check=mysqli_query($conn,$query);
   
     if($check){
        echo("Registration Completed.");
        
    }
 else{
     echo("Failed to register");
 }
         
 }
     
    mysqli_close($conn);
 
}

//login

 if(isset($_POST['login']))
 { 
$name=$_POST['name'];
$pass=$_POST['password'];
     
      
$host="localhost";
$user="root";
$password="";
$dbname="project";
$conn=mysqli_connect($host,$user,$password,$dbname);
    
      
 $query=" SELECT * FROM `user` WHERE name='$name' and password='$pass'" or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
     $check=mysqli_fetch_array($result);
   
     if($check['name'==$name] &&  $check['password'==$pass]){
          $_SESSION["name"] = $name;
         header("Location:perinfo.php");
        
         
    }
 else{
     echo("Unkonwn Information!TRY AGAIN");
      exit();
 }
        mysqli_close($conn);
     
 }



$_SESSION["id"]=" ";
codeq=" SELECT id FROM `user`";
check=mysqli_query($conn,$codeq);


$expid=mysqli_insert_id($conn);

codei=INSERT INTO `user` (`code`) VALUES ('')";













?>