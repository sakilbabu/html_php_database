<?php
include("con.php");

if(isset($_POST['submit'])){
  $Name=$_POST['name'];
  $Roll=$_POST['roll'];
  $Phone=$_POST['phone'];

  $query=mysqli_query($con,"insert into student(name,roll,phone) values('$Name','$Roll','$Phone')");

  if($query){
    echo " <script>alert('information saved');</script> ";
  }
  else{
    echo " <script>alert('information is not saved');</script> ";
  }
}

?>

<html>  
<head>   
<title>  
student info submission Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  

<form method="post">  
  
<label> Name </label>         
<input type="text" name="name" required> <br> <br>  
<label> Roll: </label>     
<input type="text" name="roll" required> <br> <br>  
<label> Phone_Number: </label>         
<input type="text" name="phone" required> <br> <br> 
        
<input type="submit" name="submit" value="submit"> <br> <br> 
  
 
</form>  
</body>  
</html>  