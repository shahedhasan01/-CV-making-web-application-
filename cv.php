<?php
      
  session_start();
$host="localhost";
$user="root";
$password="";
$dbname="project";

$conn=mysqli_connect($host,$user,$password,$dbname);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>cv</title>
         <link rel="stylesheet" type="text/css" href="cvcss.css" />
    </head>
       <body>
         
  <div id="full">
        
       
      <div id="left" >
            
            
            
            
            <div id="name">
     <?php
         $nid=$_SESSION["perinfoid"];
      
$query=" SELECT name,profession FROM `perinfo` WHERE id='$nid'" or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
  $check=mysqli_fetch_assoc($result);
   
    while($row=$check)
    {  print ("<br>");
       print ("Name-  ".$row["name"]);
       print ("<br>");
       print ("".$row["profession"]);
       break;
}
 ?>
</div>
        
          
          
<div id="profile">
    
<?php
    $pid=$_SESSION["pid"];
      
$query=" SELECT profiletext FROM `profile` WHERE profileid='$pid'" or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
  
    $check=mysqli_fetch_assoc($result);
    
   while($row=$check){
       
        print ("<br><br>");
       print ("<h3>Profile</h3>");
        
       print ("".$row["profiletext"]);
       break;
}
 ?>
</div>
           
          
          
          
          
            <div id="contact">
    
<?php
  
               
                
 $lastid=$_SESSION["perinfoid"];
      
$query=" SELECT email,phone,address,birth FROM `perinfo` WHERE id='$lastid' " or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
  $check=mysqli_fetch_assoc($result);
  
   
    while($row=$check){
        
       print ("<br><br>");
       print ("<h3>Contact</h3>");
        print ("Date of birth:".$row["birth"]);
        print ("<br>");
       print ("Email:".$row["email"]);
        print ("<br>");
       print ("Phone:".$row["phone"]);
        print ("<br>");
       print ("Address:".$row["address"]);
        print ("<br>");
       
       break;
}
 ?>
</div>
        
</div>


      
      
      
      
      <div id="right">
         
          
          
          
          <div id="exp">
    
<?php
    
    $expid=$_SESSION["exid"];
      
$query=" SELECT exptext FROM `experience` WHERE expid='$expid'" or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
  $check=mysqli_fetch_assoc($result);
   while($row=$check){
       
       
       print ("<h2><u>Experience</u></h2>");
        
       print ("".$row["exptext"]);
       break;
}
 ?>
</div>
          
          
          
          
          
          
               <div id="edu">
    
<?php
      $eduid=$_SESSION["educationid"];
      
$query=" SELECT college,university,ssccgpa,hsccgpa,bsccgpa,bscyear,msccgpa,mscyear FROM `education` WHERE eduid='$eduid'" or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
  $check=mysqli_fetch_assoc($result);
                   
   while($row=$check){
       
        
       print ("<h2><u>Education</u></h2>");
        
       print ("College:".$row["college"]);
       print ("<br>");
       print ("University:".$row["university"]);
       print ("<br>"); 
       print ("SSC CGPA:".$row["ssccgpa"]);
       print ("<br>"); 
       print ("HSC CGPA:".$row["hsccgpa"]);
       print ("<br>"); 
       print ("BSC CGPA:".$row["bsccgpa"]);
       print ("<br>"); 
       print ("PASS YEAR:".$row["bscyear"]);
       print ("<br>"); 
       print ("MSC CGPA:".$row["msccgpa"]);
       print ("<br>");
        print ("PASS YEAR:".$row["mscyear"]);      

       break;
}
 ?>
</div>
          
          
          
          
           <div id="skl">
            
              
          <?php
          $skillid=$_SESSION["sklid"];
               
$query=" SELECT skltext FROM `skills` WHERE skillsid='$skillid'" or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
  $check=mysqli_fetch_assoc($result);
   
    while($row=$check)
    {   
         
       print ("<h2><u>Skills</u></h2>");
        
       print ("".$row["skltext"]);
       break;
}
 ?>
</div>
    
          
          <div id="int">
            
              <?php
              
              $intid=$_SESSION["intid"];
      
$query=" SELECT inttext FROM `interest`WHERE interestid='$intid'" or die ("Failed to query database".mysqli_error());
     
  $result=mysqli_query($conn,$query);
  $check=mysqli_fetch_assoc($result);
   
    while($row=$check)
    {   
         
       print ("<h2><u>Interests</u></h2>");
        
       print ("".$row["inttext"]);
       break;
}
 ?>
</div>
          </div>
        
      <div id="logout">
         
 <button class="button" name="logout" onclick="window.location.href='login.php'">logout</button>
          
     <?php
   if(isset($_GET['logout'])) {
    session_destroy();
    header('location:login.php');
} 
?>
        </div>
        </div>
</body>
</html>


