<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="logincss.css">

  
</head>

<body>
  
<div class="container">
  <div class="info" >
    <h1 style="font-weight: bold ;">Admin's Login</h1>
  </div>
</div>

<div class="form">
  <div class="thumbnail"><img src="logo.jpg"/></div>
  
  <form>
  
	<form action="process.php" method="post">
	<div class="login">
		<p>
			<label>Username:</label>
			<input type="text" id="user" name="user" />
		</p>
		<p>
			<label>Password:</label>
			<input type="password" id="pass" name="pass" />
		</p>
		<p>
			<input type="submit" id="submit" value="submit" />
		</p>
	
</form>
	</form>
</div>

  </form>
</div>

</body>
</html>
