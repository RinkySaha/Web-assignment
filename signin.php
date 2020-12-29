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
	<div class="container">
	  <h2>Log In</h2>
	  <form action="loginaction.php" method="post" name="login">
	    <div class="form-group">
	      <label for="lemail">Email:</label>
	      <input type="email" class="form-control" id="lemail" placeholder="Enter email" name="lemail" required>
	    </div>
	    <div class="form-group">
	      <label for="lpwd">Password:</label>
	      <input type="password" class="form-control" id="lpwd" placeholder="Enter password" name="lpwd" required>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	  </form>
	</div>
	
</body>
</html>