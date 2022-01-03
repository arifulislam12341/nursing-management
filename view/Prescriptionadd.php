<?php
//session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Donor Add</title>
    <style>
        table.center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<link rel="stylesheet" href="../css/addpr.css">
<body>
   <div class="menu">
       <ul>  
<li><a  href="PatientDetails.php">Go back</a></li>
    </ul>
    <div class="box">
    <h1 align='center'>ADD PRESCRIPTION</h1>

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
                 prescription number :
                </td>
                <td>
                    <input type="number" name="num"placeholder="Enter Your prescritpion number">
                </td>
            </tr>

           
            <tr>
                <td>Enter your medicine:</td>
                   <td>
                   <textarea id="med" name="med" rows="4" cols="50">
                    
                    </textarea>
                    
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                    
                </td>

            </tr>

        </table>




    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $formdata = array(
        'name' => $_POST['fname'],
        'serial' => $_POST['num'],
        'medicineList' => $_POST['med'],
    );

    $existingdata = file_get_contents('../model/da1.json');
    $tempJSONdata = json_decode($existingdata, true);
    $tempJSONdata[] = $formdata;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if (file_put_contents("../model/da1.json", $jsondata)) {
        echo "success";
        // $_SESSION['message']='Data successfully saved.';
        // header("Location:../view/admin_registration.php");
    } else {
        echo "not success";
        // $_SESSION['message']="No data saved";
        // header("Location:../view/admin_registration.php");
    }
}

?>