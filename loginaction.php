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
    $lemail=$_POST['lemail'];
	$lmypassword=$_POST['lpwd'];  


	// To protect MySQL injection (more detail about MySQL injection)
	
    $lemail = stripslashes($lemail);
	$lmypassword = stripslashes($lmypassword);


	$lemail = mysqli_real_escape_string($conn, $lemail);
	$lmypassword = mysqli_real_escape_string($conn, $lmypassword);

    $lmy_password_hash = hash('sha512', $lmypassword);


	$sql="SELECT * FROM user WHERE  email='$lemail' and password='$lmy_password_hash'";
	
    
    $result=mysqli_query($conn, $sql);
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);

	
	
	
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		$row=mysqli_fetch_assoc($result);

        // Register $myusername, $mypassword and redirect to file "login_success.php"
        session_start();
        $_SESSION['lemail'] = $lemail;
        $_SESSION['lpassword'] = $lmy_password_hash;
        $_SESSION['tid'] = $row['id'];
        echo"<h1> Welcome</h1>";
        header("location:result.php");
	}
	else {
        echo "<h1> Wrong username and password </h1>";
        echo '<a href="signin.php"><button>back</button></a>';
	}
	?>
	

	
  </div>
	
</body>
</html>