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
	  <h2>Student Result</h2>
	  <form action="saveresult.php" name="result" method="post">
	  	<div class="form-group">
	      <label for="sname">Name of the student:</label>
	      <select name="sname" id="sname">
			  <option value="john">John</option>
			  <option value="mike">Mike</option>
			  <option value="tiffany">Tiffany</option>
			  <option value="lisa">Lisa</option>
			  <option value="harry">Harry</option>
		  </select>
	    </div>
	    <div class="form-group">
	      <label for="sub">Course:</label>
	      <select name="sub" id="sub">
			  <option value="mit001">MIT001</option>
			  <option value="mit002">MIT002</option>
			  <option value="mit003">MIT003</option>
		  </select>
	    </div>
	    <div class="form-group">
	      <label for="ctmark">Class Test:</label>
	      <input type="text" class="form-control" id="ctmark" placeholder="Enter class test mark" name="ctmark">
	    </div>
	    <div class="form-group">
	      <label for="fmark">Final:</label>
	      <input type="text" class="form-control" id="fmark" placeholder="Enter final mark" name="fmark">
	    </div>
	    <button type="submit" class="btn btn-primary" onclick="return validateres()">Submit</button>
	  </form>
	</div>
	<script type = "text/javascript">
	   <!--
	      // Form validation code will come here.
	      function validateres() {
	      	var ctmart =parseFloat(document.getElementById("ctmart").value);
	      	var fmark =parseFloat(document.getElementById("fmark").value);

	      	if( ctmart>40 || fmark<0 ) {
	            alert( "Class test mark will be between 0-40" );
	            document.result.fmark.focus() ;
	            return false;
	         }
	      
	         if( fmark>60 || fmark<0 ) {
	            alert( "Final mark will be between 0-60" );
	            document.result.fmark.focus() ;
	            return false;
	         }

	         return( true );
	      }
	   //-->
	</script>
	
</body>
</html>