<html>
<head>
	<title>Result Generation</title>
	<link rel="icon" href="img/iitlogo-blue.png" type="image/png" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>

<body>
	<?php
	include("database.php");
	$myusername=$_POST['name']; 
	$phn_no=$_POST['phn_no']; 
    $email=$_POST['email'];
	$mypassword=$_POST['pwd1']; 


	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
    $phn_no = stripslashes($phn_no);
    $email = stripslashes($email);
	$mypassword = stripslashes($mypassword);


	$myusername = mysqli_real_escape_string($conn, $myusername);
	$phn_no = mysqli_real_escape_string($conn, $phn_no);
	$email = mysqli_real_escape_string($conn, $email);
	$mypassword = mysqli_real_escape_string($conn, $mypassword);

    $my_password_hash = hash('sha512', $mypassword);


	$sql = "INSERT INTO user (name, phn_no, email, password)
	   VALUES 
    ('$myusername', '$phn_no', '$email', '$my_password_hash')";
	
    
    if (mysqli_query($conn, $sql)) {
		echo "<center>Successfully Signed up</center><br><br>";
        echo '<center><a href="signin.php">Log In</a></center>';
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	?>
	

	
  </div>
	
</body>
</html>