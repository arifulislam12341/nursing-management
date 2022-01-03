 <?php
 	include('../db/project.php');
	session_start();

	if(isset($_SESSION['username'])|| isset($_COOKIE['username']))
    {
        header("Location:../view/PatientDetails.php");
    }
    else{
    	$data = file_get_contents('../model/Patient.json');
        $data_array = json_decode($data, true);
        
    
        if (isset($_POST['submit'])) {
        	$email=$_POST['email'];
        	$pass=$_POST['password'];
        	foreach ($data_array as $key => $value) {
        		if($value['email']==$email)
        		{
        			if($value['password']==$pass)
        			{
	    				 $_SESSION['username']=$value['name'];
	    				 setcookie('username', $value['name'], time() + (86400 * 5), "/");
	               		 header("Location:../view/PatientDetails.php"); 
        			}
        		}
        	}
        	
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Patient Login</title>
		<link rel="stylesheet" href="../css/patlogin.css">
         <script src='../js/REG.js'></script>

	</head>
	<body>
	<div class="box">
		                    
		<form  action="" onsubmit="return validate()" method="post">
		<h1 align='center'>Login Form</h1>
			<table  align='center'>	
			<tr>
			<td><b>Email :</b></td>
			<td><br><input type="email" id="email" name="email" placeholder="ENTER YOUR VALID EMAIL"> 
			<p id="errorname"></p>
			</tr>
			<tr>
			<td><b>Password :</b></td>
			<td><input type="password" id="pass" name="password" placeholder="ENTER YOUR VALID PASS"> 
			<p id="errorpass"></p>
			</tr>					
			<tr>
			<tr>
			<tr><td align='center'><br><input type="submit" name="submit" value="Login"></td></tr>
            <tr><td align='center'><br>
			<b>Don't have an account yet?</b>
				<a class="s" href="PatientRegistration.php">
					Create an account 
				</a>								
        	</tr>			
		</form>
		
		<tr><td align='center'><br>
			<b> Return To Home? </b><br>
				<a  href="Home.php">
				<b>Home</b>
				</a>									
        	</tr>
			
	</div>
	</body>
</html>