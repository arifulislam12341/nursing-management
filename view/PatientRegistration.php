<?php
session_start();

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient Registration</title>

	<link rel="stylesheet" href="../css/reg1.css">
</head>
	<body>
	<div class="box">
	
	<table  align='center'>
	<h1 align='center'>Patient Registration Form</h1>
	                    
		<h3 align='center'>
			<?php
			if(!empty($_SESSION['message']))
			{
				echo $_SESSION['message'];
			}
		 	?>    
		</h3>               
       
		<form action="../control/PatientControl.php" method="post">
				
				  <tr>
					<td>Full Name :</td>
					<td> 
						<input name="fname" type="text"> 
						<?php 
							if(!empty($_SESSION['name_error']))
							{
								echo $_SESSION['name_error'];
							}
						?>
					  </td>
				</tr>  
			
				<tr>
					<td>Contact :</td>
					<td><input type="contact" name="contact"> 
					 <?php  
						if(!empty($_SESSION['contact_error']))
						{
							echo $_SESSION['contact_error'];
						} 
					 ?>
					</td>
				</tr>
                <tr>
	                <td>Nid :</td>
					<td><input type="nid" name="nid">  
					<?php
						if(!empty($_SESSION['Nid_error']))
						{
							echo $_SESSION['Nid_error'];
						}
					 ?>
					</td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="email" name="email"> 
					<?php 
						if(!empty($_SESSION['email_error']))
						{
							echo $_SESSION['email_error'];
						}
					 ?>
					</td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password"> 
					 <?php
					 	if(!empty($_SESSION['pass_error']))
						{
						 	echo $_SESSION['pass_error'];
						}
					 ?>
					</td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
						
						<?php
	                        if(!empty($_SESSION['Gender_error']))
							{
							 	echo $_SESSION['Gender_error'];
							} 
                         ?>
					</td>
				</tr>
           
                <tr>
					<td>Address:</td>
					<td>
						<textarea rows="4" cols="40" name="Address"></textarea> 
						<?php 
							if(!empty($_SESSION['add_error']))
							{
							 	echo $_SESSION['add_error'];
							}
						?>
					</td>
				</tr>
            	<br>
        		<tr>
        			<td align='center'><input type="submit"  name="submit" value="Submit"><input type="reset"  value="Reset"></td>
        		</tr>
				<tr>
					<td align='center'><br>
	                <b>Already have an account?</b>
					<a href="Patientlogin.php">
						Log-in
					</a>				
            	</tr>
		
		
		<tr><td align='center'><br>
			<b>Return To Home</b>
				<a href="Home.php">
				<b>	Home</b>
				</a>								
        	</tr>
			</table>
			</form>
</div>
	</body>
</head>
</html>

<?php
	unset($_SESSION['name_error']);
    unset($_SESSION['email_error']);
    unset($_SESSION['add_error']);
    unset($_SESSION['contact_error']);
    unset($_SESSION['pass_error']);
    unset($_SESSION['Gender_error']);
    unset($_SESSION['Nid_error']);
    unset($_SESSION['message']);
?>