<?php   

  $servername = "localhost";  //replace your servername
  $username = "root";   //replace your username
  $password = "localhost@123";        //replace your password
  $dbname = "harini";    //replace your database name

  // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
  //Check connection
   if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
       echo ' not connected';
     }
     else
     echo 'connected';
        ?>