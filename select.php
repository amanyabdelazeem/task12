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
$data = $conn->query("SELECT * FROM `student`;")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>student name</th>
        <th>email</th>
        <th>password</th>
        <th>update</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php

        foreach ($data as $row) {
            echo "<tr>
           <td>{$row['Student_name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['student_password']}</td>
        <td><a href='./update_student.php?id={$row['student_id']}'>edit</a></td>
      <td><a href='./delete_student.php?id={$row['student_id']}'>delete</a></td>
        </tr>";
           
      
        
    }
     ?>
    </tbody>
  </table>
</div>

</body>
</html>

