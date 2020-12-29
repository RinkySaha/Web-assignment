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
	  <h2>Sign UP</h2>
	  <form action="signupaction.php" name="sn_up" method="post">
	  	<div class="form-group">
	      <label for="name">Name:</label>
	      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
	    </div>
	    <div class="form-group">
	      <label for="phn_no">Phone No:</label>
	      <input type="text" class="form-control" id="phn_no" placeholder="Enter phn_no" name="phn_no" required>
	    </div>
	    <div class="form-group">
	      <label for="email">Email:</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
	    </div>
	    <div class="form-group">
	      <label for="pwd1">Password:</label>
	      <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd1" required>
	    </div>
	    <div class="form-group">
	      <label for="pwd2">Confirm Password:</label>
	      <input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="pwd1" required>
	    </div>
	    <button type="submit" class="btn btn-primary" onclick="return validate()">Submit</button>
	  </form>
	</div>

	<script type = "text/javascript">
	   <!--
	      // Form validation code will come here.
	      function validate() {
	      	var pas1=document.getElementById("pwd1").value;
	      	var pas2=document.getElementById("pwd2").value;
	      
	         if( pas1 != pas2 ) {
	            alert( "Password Not matching" );
	            document.sn_up.pwd2.focus() ;
	            return false;
	         }
	         return( true );
	      }
	   //-->
	</script>
	
</body>
</html>