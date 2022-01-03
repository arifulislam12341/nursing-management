<!DOCTYPE html>
<html>

<head>
  <!-- <link rel="stylesheet" type="text/css" href="../css/info.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/nurse.css">
<body>
<div class="menu">
       <ul>  
<li><a  href="PatientDetails.php">Go back</a></li>
    </ul>
<div class="box">
<center>
  <h1>Search Nurses</h1>


  

  <script>
    function showmyuser() {
      var uname = document.getElementById("uname").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        } else {
          document.getElementById("mytext").innerHTML = this.status;
        }
      };
      xhttp.open("POST", "../control/adnurdellogic.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("uname=" + uname);


    }
  </script>
  </head>



  <label>
    <h3>Search the name<h3>
  </label><br>

  <input type="text" id="uname" onkeyup="showmyuser()">


  <p id="mytext"></p>


  


  </form>

  </center>
</body>

</html>

