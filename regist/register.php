<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Сайтқа тіркелу</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Тіркелу</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Атыңыз</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Құпиясөз</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Құпиясөзді қайталаңыз</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Тіркелу</button>
  	</div>
  	<p>
  		Бұрын тіркелдіңізбе? <a href="login.php">Кіру</a>
  	</p>
  </form>
</body>
</html>