<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Сайтқа кіру</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Кіру</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Атыңыз</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Құпиясөз</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"> Кіру</button>
  	</div>
  	<p>
  		Бұрын тіркелмедіңізбе? <a href="register.php">Тіркелу</a>
  	</p>
  </form>
</body>
</html>