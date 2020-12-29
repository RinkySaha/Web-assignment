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

	$sname=$_POST['sname']; 
	$sub=$_POST['sub']; 
    $ctmark=floatval($_POST['ctmark']);
	$fmark=floatval($_POST['fmark']); 


	// To protect MySQL injection (more detail about MySQL injection)
	
    $sname = stripslashes($sname);
	$sub = stripslashes($sub);
	$ctmark = stripslashes($ctmark);
	$fmark = stripslashes($fmark);


	$sname = mysqli_real_escape_string($conn, $sname);
	$sub = mysqli_real_escape_string($conn, $sub);
	$ctmark = mysqli_real_escape_string($conn, $ctmark);
	$fmark = mysqli_real_escape_string($conn, $fmark);
	session_start();

	$tid = $_SESSION['tid'];

	$sql = "INSERT INTO res_info (tid, name, course, ctmark, fmark)
	   VALUES 
    ('$tid', '$sname', '$sub', '$ctmark', '$fmark')";
	
    
    if (mysqli_query($conn, $sql)) {
		echo "<center>Successfully Stored</center><br><br>";
        echo '<center><a href="showresult.php">See result</a></center>';
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	?>
	

	
  </div>
	
</body>
</html>