<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../css/info1.css">
	<script>src='../js/details1.js'</script>
</head>
<body>
<div class="menu">
	<ul>
<li><a  href="Helpline.php"><h4 align='center' >Help-Line</a></li>
<li><a  href="prescription.php"><h4 align='center' >ADD Prescription</a></li>
<li><a  href="blood.php"><h4 align='center' >Blood-BANK</a></li>
<li><a  href="avnurse.php"><h4 align='center' >SEE-AVAILABLE NURSE</a></li>
<li><a   href="logout.php">LOG-OUT</a></li>

</ul>
<div class="box">
<h1 align='center' style="font-family:Algerian"> Patient Information</P></h1>
	<table  align='center'>
	<form action="../control/process.php" onsubmit="return validate()" method="post">
<td>Full Name :</td>
					<td><input name="fname" id="name" type="text" placeholder="ENTER YOUR NAME"> 
					<p id="errorname"></p>
				
					</td>
				</tr>
			
				<tr>
					<td>Contact :</td>
					<td><input type="contact" id="contact" name="contact" placeholder="ENTER YOUR CONTACT NUMBER"> 
					<p id="errorcon"></p>
						</td>
				</tr>
				<tr>
	                <td>Serial :</td>
					<td><input type="serial" name="serial" placeholder="ENTER YOUR  SERIAL">  
					<p id="errorsr"></p>
					</td>
				</tr>
				<tr>
	                <td>Time :</td>
					<td><input type="time" name="time" placeholder="ENTER YOUR TIME ">  
					<p id="errortime"></p>
				
					</td>
				</tr>
				<tr>
	                <td>Payment :</td>
					<td><input type="payment" name="payment" placeholder="ENTER YOUR PAYMENT">  
					<p id="errorpay"></p>
					</td>
				</tr>
				<tr>
	                <td>Problem :</td>
					<td><input type="text" name="problem" placeholder="ENTER YOUR PROBLEM">  
					<p id="errorprb"></p>
					</td>
				</tr>
				<tr>
				<td align="center"><input type="submit" name="submit" value="Submit"><input type="reset" value="Reset">
</td>
</table>
</form>
</body>

</div>
</html>
