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
    <?php
    $blog = $_POST['statusUpdate'];
    ?>
    <form action="index.php" method="post">
      <label for="statusUpdate">What's on your mind?</label>
      <div class="form-group">
        <input type="text" name="statusUpdate"><button>post</button>
      </div>
    </form>
    <section>
      <?php
      echo $blog
      ?>
    </section>
  </div>
</body>

</html>