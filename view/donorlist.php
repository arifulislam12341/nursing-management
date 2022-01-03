<?php
    //session_start();
    $data = file_get_contents("../model/da.json");
    $mydata = json_decode($data);

    foreach($mydata as $myobject)
    {
        foreach($myobject as $key=>$value)
        {
            echo "Donor  ".$key." : ".$value."<br>";
            //header("userdata.php"); 

        } 
        echo"----------------------------------------<br>";
    }


?>