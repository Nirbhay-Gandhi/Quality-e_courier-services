<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="courier.css" rel="stylesheet" type="text/css">
<style>
    body{
        background-color: rgb(203, 204, 248);
        font-family:sans-serif;
    }

    .searchbar{
        margin: 5% 40%;
        font-size: 20px;
    }
    #inp{
        font-size: 20px;
    }
    #btn1{
        height: 30px;
        width: 120px;
        background-color: coral;
        color: rgb(0, 24, 92);
        border: 4px solid coral;
        border-radius: 8px;
    }
    #btn1:hover{
        background-color: darkblue;
        color: rgb(253, 253, 244);
        border: 4px solid rgb(12, 18, 116);
        pointer-events: visiblePainted;
    }
    #inp{
        border: 4px solid rgb(12, 18, 116);
        border-radius: 8px;
        width: 250px;
    }
    #tracktbl{
        background-color: rgb(20, 1, 90);
        color: rgb(255, 255, 255);
        border: solid 2px white;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 30%;
    }
    #tracktbl tr td{
        margin-left: 5px;
        margin-right: 5px;
        padding-left: 40px;
        padding-right: 40px;
    }
    #btn11{
        padding: 8px 30px;
        background-color:yellow;
        color: red;
    }
    #frm1{
        margin-top:100px;
        margin-left:50%;
    }
    #ip1{
        padding: 10px 20px; 
    }
    .div1{
        margin-top:20px;
        margin-left:50%;
        color: black;
    }
    #lbtn{
        padding: 10px 20px;
        margin-left: 20px;
    }
    #frm2{
        margin-top:10px;
        margin-left:20px;
        visibility: hidden;
    }
</style>
<body>
<header>
        <div class="heading">
        <nav>
          <ul>
            <div class="logo">
          <img src="logo2.jfif">
        </div>
        <div id="search">
          <!--<input type="text" name="search" id="search" placeholder="Seach this website">-->
        </div>
    
                <li><a href="contact.php" target="">Contact Us </a></li>
                <li><a href="about_us.php" target="">About Us</a></li>
                <li><a href="admin page.php" target="">Admin</a></li>
                <li><a href="carrier.php" target="">carrer</a></li>
                <li><a href="home.php" target="">Home</a></li>
                </ul>
                </nav>
        </div>
        </header>
        <h2>TRACK ORDER</h2> 

<form action="" method="post" id="frm1">
<input type="text" name="name" id="ip1" placeholder="Enter Your Track ID">
<input type="submit" value="TRACK" name="btn" id="btn11">
</form>

<?php 
$conn = mysqli_connect("localhost","root","","iwprj"); 
if(!$conn)
{
    die("Failed to connect: ".mysqli_error());
}
$name="";
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
}
$sql = "SELECT * FROM orderlist WHERE trkid='$name'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
?>
<div class="div1"><b>Tracking ID#: </b> <?php echo $row['trkid']?></div> <hr>
<div class="div1"><b>Status:</b> <?php echo $row['status']?></div> <hr>
<div class="div1"><b>Reciever:</b> <?php echo $row['rname']?></div> <hr>
<?php
}
?>

<button id="lbtn" onclick="makevis()">Make Changes</button>
<script>
    function makevis()
    {
        document.getElementById("frm2").style.visibility="visible";
    }
</script>
<form action="" method="post" id="frm2">
Enter New Address <br> <textarea name="txt" id="" cols="30" rows="5" placeholder="Enter the new address with city pin and state"></textarea> <br>
Request Cancellation <br> <input type="radio" name="cancel" id="" value="yes"> Yes
<input type="radio" name="cancel" id="" value="no"> No <br>
Confirm Track Id <input type="text" name="tracks"> <br>
<input type="submit" value="Submit" name="btn5" id="btn11">
</form>

<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iwprj";
        if(isset($_POST['btn5'])){
        $add=$_POST['txt'];
        $canl=$_POST['cancel'];
        $trk=$_POST['tracks'];
        }
        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `request` (`trkid`, `addr`, `cancel`) VALUES ('$trk', '$add', '$canl');";
        // use exec() because no results are returned
        $conn->exec($sql);
        sleep(2);
        echo "Request Send successfully";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        } 
        $conn = null;
        }
?>

</body>
</html>