<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Басты бет</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <h2>Бас мәзір</h2>
</div>
<div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Қош келдіңіз <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="1234.html"  style="color: purple;"> Сайтқа кіру  </a> </p>
    <?php endif ?>
</div>
    
</body>
</html>