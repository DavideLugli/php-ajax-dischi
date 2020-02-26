<?php include __DIR__. '/database.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>php ajax dischi</title>
  <!-- mio style -->
  <link rel="stylesheet" href="dist/style.css">
</head>

<body>
  <header>
    <div class="container">
      <img src="img/logo.png" alt="logo" />
    </div>
  </header>

  <div class="album-container container">
    <?php foreach ($database as $cd) { ?>
    <div class="album">
      <img src="<?php echo $cd['poster']; ?>" alt="">
      <h3><?php echo $cd['title']; ?></h3>
      <span class="author"><?php echo $cd['author']; ?></span>
      <span class="year"><?php echo $cd['year']; ?></span>
    </div>
    <?php } ?>
  </div>

</body>

</html>
