<?php
	//session_start();
    	
?>

<!DOCTYPE html>
<html >
    <head>
        <title>Donor Add</title>
        <style>
            

            table.center 
            {
            margin-left: auto; 
            margin-right: auto;
            }
        </style>
        <link rel="stylesheet" href="../css/blod.css">
    </head>
    <body>
    <div class="menu">
       <ul>  
<li><a  href="PatientDetails.php">Go back</a></li>
    </ul>
    <div class="box">
    <h1 align='center'>Blood Donor</h1>

    <form action=" " method="post">
			<table class="center">
            <tr>
                <td>
                 Name:
                </td>

                <td>
                    <input name="fname" type="text" placeholder="Enter Your Name">
                </td>
            </tr>
            
            <tr>
                <td>
                 Conact Number:
                </td>
                <td>
                    <input type="number" name="contact"placeholder="Enter Your Contact Number">
                </td>
            </tr>

            <tr>
                <td>
                 Blood group:
                </td>
                <td>
                    <input type="text" name="group"placeholder="Enter Your Blood Group">
                </td>
            </tr>

                <tr>
                    <td>
                        Enter your address :
                    </td>
                    <td>
                    <input type="text" name="address"> 
                    </td>
                </tr>

                <tr>
                    <td>
                    <input type="submit" name="submit" value="Submit">
		            <input type="reset" value="Reset">
                    <button type="button"><a href="PatientDetails.php">Go back</a></button>
                    </td>
                   
                </tr>
                
 </table>
		
			
	            		
            	
		</form>
    </body>
</html>
	
<?php
	if (isset($_POST['submit']))
    {
        $formdata = array(
            'name'=> $_POST['fname'],
            'group'=>$_POST['group'],
            'contact'=> $_POST['contact'],
            'address'=>$_POST['address'],);

            $existingdata = file_get_contents('../model/da.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../model/da.json", $jsondata)){
            echo "success";
            // $_SESSION['message']='Data successfully saved.';
            // header("Location:../view/admin_registration.php");
        } else{
            echo "not success";
            // $_SESSION['message']="No data saved";
            // header("Location:../view/admin_registration.php");
        } 

       
    }
    
?>