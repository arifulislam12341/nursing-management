<?php
session_start();
include('../db/project.php');
$name_error = "";
$cont_error = "";
$Nid_error = "";
$email_error = $add_error= "";
$Gender_error = "";
$pass_error="";
if (isset($_POST['submit']))
{

    if (empty($_POST["fname"]))
    {
        $name_error = "You must enter name";

    }
    else
    {
        if((strlen($_POST["fname"]) < 3))
        $name_error = "Name must be more than 3 characters";
    }

    if (empty($_POST['email']))
    {
        $email_error = "You must enter email";
    }
    else
    {
        $email=$_POST['email'];
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
             $mail_error = "Enter an Valid Email";
        }
    }

    if (empty($_POST["Address"]) || (strlen($_POST["Address"]) < 3))
    {
        $add_error = "Enter Your Address";

    }
    
    if (empty($_POST["contact"]))
    {
        $contact_error = "Enter Your Contact Nubmer";

    }
    else
    {
        if((strlen($_POST["contact"]) < 3))
        {
            $contact_error = "Contact Number must be more than 3 characters";
        }
    }
    
    if(empty($_POST['password'])) {
       $pass_error="Please Enter a Password";
    }
    else
    {
        $password = $_POST['password'];
        if(strlen($password) < 6) {
            $pass_error = "Password must be at least 6 characters";
        }
    }

    
    if (empty($_POST["gender"]))
    {
        $Gender_error ="Please Check Your Gender";
    }

    if (empty($_POST["nid"]))
    {
        $Nid_error = "Please Enter a Nid Number";
    }


    $connection=new project();
    $con=$connection->start();


    $iner=$connection->insert($con,"paregistration",$_POST["fname"], $_POST['contact'],$_POST['nid'],$_POST['email'], $_POST['password'], $_POST['gender'],
   $_POST['Address']);
   $nul="";
    if($iner==true)
    {
       $nul= "Data has been inputed successfully";
    }
    else
    {
        $nul= "Data has not been taken";
    }

    
    if($name_error==""  && $add_error=="" && $cont_error=="" && $pass_error=="" && $Gender_error=="" && $Nid_error=="")
    {

        
        $formdata = array(
        'name'=> $_POST['fname'],
        'contact'=> $_POST['contact'],
        'nid' => $_POST['nid'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'gender'=> $_POST['gender'],
        'Address' => $_POST['Address'],
        );   

        $existingdata = file_get_contents('../model/Patient.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../model/Patient.json", $jsondata)){
            $_SESSION['message']='Data successfully saved.';
           
            header("Location:../view/PatientRegistration.php");
        } else{
            $_SESSION['message']="No data saved";
           
            header("Location:../view/PatientRegistration.php");
        }  
    }
    else{
        $_SESSION['name_error']=$name_error;
        $_SESSION['email_error']=$email_error;
        $_SESSION['add_error']=$add_error;
        $_SESSION['contact_error']=$contact_error;
        $_SESSION['pass_error']=$pass_error;
        $_SESSION['Gender_error']=$Gender_error;
        $_SESSION['Nid_error']=$Nid_error;
        header("Location:../view/PatientRegistration.php");
    
    }
}
?>
