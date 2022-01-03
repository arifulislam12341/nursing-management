<?php
include('../db/project.php');

$connection=new project();
$con=$connection->start();


$iner=$connection->add($con,"getserial",$_POST['serial'],$_POST['fname'],$_POST['contact'], $_POST['time'],  $_POST['payment'], $_POST['problem']);
if($iner==true)
{
    echo "Data has been inputed successfully <br>";
}
else
{
    echo "Data has not been taken";
}


	   $formdata = array(
        'name'=> $_POST['fname'],
        'contact'=> $_POST['contact'],
        'Serial' => $_POST['serial'],
        'Time'=> $_POST['time'] ,
        'Payment'=> $_POST['payment'],
        'Problem'=> $_POST['problem'],
    );
       $existingdata = file_get_contents('../model/details.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
    
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("../model/details.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("../model/details.json");
	 $mydata = json_decode($data);
?>