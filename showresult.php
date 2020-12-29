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
	  <form action="<?php echo $_SERVER["PHP_SELF"];?>" name="showresult" method="post">
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
	    <button type="submit" class="btn btn-primary">Show</button>
	  </form>

	  <br>
	  <br>
	  <?php
		include("database.php"); 
		if(isset($_POST['sname'])){
			$name=$_POST['sname'];
			$crs=$_POST['sub'];

			$cont = 1; 

			// To protect MySQL injection (more detail about MySQL injection)
		
		    $name = stripslashes($name);
			$crs = stripslashes($crs);


			$name = mysqli_real_escape_string($conn, $name);
			$crs = mysqli_real_escape_string($conn, $crs);

		    


			$sql="SELECT * FROM res_info WHERE  name='$name' and course='$crs'";



			$result=mysqli_query($conn, $sql);
			// Mysql_num_row is counting table row
			$count=mysqli_num_rows($result);

			if($count<2){
				echo "Result is not submitted yet";
			} 
			else{
				while ($row=mysqli_fetch_assoc($result)) {
					if($cont==1){
						$total1=$row['ctmark']+$row['fmark'];
					}
					else{
						$total2=$row['ctmark']+$row['fmark'];

					}
					$cont++;
					
				}

				if($total1>$total2){
					$dev = $total1-$total2;
				} 

				else {
					$dev = $total2-$total1;
				}

				if($dev>20){
					echo "Deviation is more than 20% so result is not generated";
				}

				else{
					$res=($total1+$total2)/2;
					echo "Result -";
					echo $res;
				}
				
				
			}

		}
	    

		
	?>
	</div>
	
</body>
</html>