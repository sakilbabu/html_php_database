<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'CSE 312-');



$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit'])){
  $Name=$_POST['Name'];
  $Roll=$_POST['Roll'];
  $Phone_Number=$_POST['Phone_Number'];

  $query = mysqli_query($conn,"insert into student(Name,Roll,Phone_Number) values($Name,$Roll,$Phone_Number)");

  if($query){
    echo" <script>alert('information saved');</script> ";
  }
  else($query){
    echo" <script>alert('information saved');</script> ";
  }
}

?>