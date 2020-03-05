<?php
    $blog = $_POST['statusUpdate'];
    $DBserver = 'localhost';
    $DBUser = 'root';
    $DBPass = 'root';
    $DBName = 'hellophpworld';
    $connection = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
    if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());
    } else {
      echo ('Connection successful! ');
    }
    $sql = "INSERT INTO MicroBlog (post) VALUES ('".$blog."')";
    if ($connection->query($sql) === TRUE) {
      echo ('New record created.');
    } else {
      echo ('Error: ' . $sql . '<br>' . $connection->error);
    }
    mysqli_close($connection);
