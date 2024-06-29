<?php
$server = "localhost";
$username = "root";
$pw="";
$dbname="school";
try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname",
   $username,
   $pw);

 $conn->setAttribute(
 PDO::ATTR_ERRMODE,
 PDO::ERRMODE_EXCEPTION
 );
 echo "connected succefully";}
catch (PDOException $e){
echo"connection failed:" .$e->getMessage();
}
$id=$_GET['id'];
$sql= "DELETE FROM student where student_id='$id' ";
$conn->exec($sql);
echo "<br>". "data deleted success";

?>