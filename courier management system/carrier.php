<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carier</title>
    <link href="courier.css" rel="stylesheet" type="text/css"> 
</head>

<style>
    #header{
        text-align: center;
        background-color: blue;
        color: cornsilk;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 40px;
        font-weight: 700;
    }
    #instrn{
        font-size: 20px;
    }
    #frm1{
        border: 3px solid black;
        padding: 20px;
        /*font-size: 20px;*/
        font-weight: 500;
        width: 300px;
        margin: 40px 30%;
        background-color: rgb(115, 192, 255);
    }
    body{
        background-image: url(carrer3.jfif);
        background-repeat: no-repeat;
        background-size: cover;
    }
    ul li{
        margin-left: 40px;
    }
</style>

<body>

  <marque><div id="header">Welcome to Career Options for <span style="color: rgb(255, 223, 40);">Fast Coutier Services</span></div></marque>
    <br> <br> 
   <div id="instrn"> <b> Instructions </b>
        <ul>
            <li>You have to take a Quiz to Join our company</li>
            <li>If you socre <b>3 out of 3</b> in the Quiz then only your profile will be called for interview</li>
            <li>Score Well and get appriciation from our director <b>Mr. Nirbhay Gandhi.</b></li>
            <li>Once you click on <b>Take Quiz</b>, the quiz will get immediately <b>started.</b> There 
            is no way to pause the timmer.</li>
            <li><strong>Important  </strong>once you finish the Quiz, click on <b>'Verified Marks'</b> buttion to submit your quiz. Without that your quiz 
            will not be submitted and your marks will <b> not be considered.</b></li>
        </ul>
    </div>
    <form action="" name="quiz_data" id="frm1" method="POST">
            <label for="" style="margin-right: 70px;">Name</label>
            <input type="text" name="names" required/> <br> <br> 
            <label for="" id="" style="margin-right: 5px;">Mobile Number</label>
            <input type="text" name="mobs" required/> <br> <br> 
            <label for="" id="" style="margin-right: 55px;">Address</label>
            <input type="text" name="adrs"/> <br> <br> 
            <label for="" id="" style="margin-right: 55px;">Qualification</label>
            <input type="text" name="quls" required/> <br> <br> 
            <input type="submit" value="Take Quiz" name="btn"/>
        </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwprj";
if(isset($_POST['btn'])){
$aname=$_POST['names'];
$aphone=$_POST['mobs'];
$aqul=$_POST['quls'];
}
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `application` (`name`, `mobile`,`qualification`) VALUES ('$aname', '$aphone','$aqul');";
  // use exec() because no results are returned
  $conn->exec($sql);
  sleep(2);
  echo "Branch Inserted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
//header("Location: http://localhost/iwpproject/view_branches.php");?>
<script type="text/javascript">
window.location = "http://localhost/swprj/quiz.php";
</script>  
<?php 
$conn = null;
}
?>
    

</body>
</html>