<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hello PHP World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div class="container">
    <form action="post.php" method="post">
      <div class="form-group">
        <input type="text" name="statusUpdate" placeholder="What's on your mind?"><button>post</button>
      </div>
    </form>
    <section>
      <?php
      $DBserver = 'localhost';
      $DBUser = 'root';
      $DBPass = 'root';
      $DBName = 'hellophpworld';
      $connection = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      } 
      $results = $connection->query("SELECT post FROM MicroBlog");
      foreach ($results as $row){
              echo "<div class='micro-blog'>" . $row['post'] . "</div>";
      }
      mysqli_close($connection);
      ?>
    </section>
  </div>
</body>

</html>