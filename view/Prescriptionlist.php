<?php
    //session_start();
    $data = file_get_contents("../model/da1.json");
    $mydata = json_decode($data);

    foreach($mydata as $myobject)
    {
        foreach($myobject as $key=>$value)
        {
            echo $key." : ".$value."<br>";
            //header("userdata.php"); 

        } 
        echo"----------------------------------------<br>";
    }


?>