<html>
<head>
	<title>your feedback</title>
</head>
<body>
	<h2>Thanks for your email</h2>
	<?php
		echo "Your email has been submitted successfully </br>";
		$name=$_POST['firstname'].' '.$_POST['lastname'];
		$subject=$_POST['subject'];
		$person=$_POST['person'];
		$description=$_POST['description'];
		$msg="$name , who is a/an $person , has written that : $description \n";
		$to='jeniya.sultana@yahoo.com';
		$email=$_POST['email'];
		mail($to,$subject,$msg,'From:'.$email);
		
	?>
</body>


</html>