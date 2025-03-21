<?php
  $host = "localhost";
  $dbname = "task_app_db";
  $username = "root";
  $password = "";
          
  $conn = mysqli_connect(hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);
          
  if (mysqli_connect_errno()) {
      die("Connection error: " . mysqli_connect_error());
  } 
?>