<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="courier.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        #mydiv{
            height: 100px;
            width: 200px;
            border: 2px solid red;
            background-color: rosybrown;
        }
        .admin-img{
            height: 200px;
            width: 200px;
            /*border: 3px solid black;
            border-radius: 8px;*/
            align-items: center;
            margin: auto;
            /*margin-left: 500px;*/
        }
        .admin-img img{
            margin-top: 20px;
            height:199px; 
            width:199px;
            border:5px solid black;
            border-radius: 20px;
        }
        .buttons div{

            height: 50px;
            width: 200px;
            border: 2px solid black;
            border-radius: 20px;
            background-color: rgb(206, 206, 241);
            text-align: center;
            line-height: 50px;
            margin: 10px;
        }
        .buttons div:hover{
            background-color: chartreuse;
            color: crimson;
            cursor: pointer;
            border: 2px solid chartreuse;
        }
        .link{
            text-decoration: none;
            text-transform: capitalize;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 600;
        }
        .buttons{
            display: flex;
            margin: 10px;
            justify-content: center;
        }
        #tracktbl{
        background-color: rgb(20, 1, 90);
        color: rgb(255, 255, 255);
        border: solid 2px white;
        padding-left: 5px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    #tracktbl tr td{
        margin-left: 2px;
        margin-right: 2px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        width: 120px;
    }
    .form3{
        margin-left: 200px;
        border: dotted 1px white;
        width: 300px;
        height: 50px;
        /*margin-top:5px;*/
        padding: 10px 30px;
    }
    #trac, #mybtn{
        margin-left: -10px;
        padding: 5px; 
        width: 100px;
    }
    
    </style>
</head>
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
                  <li><a href="home.php">Home </a></li>
                  <li><a href="contact.php">Contact Us </a></li>
                  <li><a href="track.php">TRACK</a></li>
                  <li><a href="about_us.php">About Us</a></li>
                </ul>
                </nav>
  
            </div>
  
              </header>
              <div class="form3">
                        <form action="" method="post">
                        <h4><u>Update Order / Delete Order</u></h4> <br> 
                        <input type="text" name="trac" id="trac" style="padding: 5px 8px; margin-left: -10px; width: 65px;"> 
                            <select name="status" id="status_sel" style="padding: 5px 8px; margin-left: -10px; background-color: rgb(255, 133, 255);">
                                <option value="Recieved">Recieved</option>
                                <option value="Transit (station-1)">Transit (station-1)</option>
                                <option value="Transit (station-2)">Transit (station-2)</option>
                                <option value="Transit (station-3)">Transit (station-3)</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Cancelled">Cancelled</option>
                                <option value="Returning back to Sender/Seller">Returning back to Sender/Seller</option>
                                <option value="Remove">Remove</option>
                            </select>
                            <input type="submit" name="btn" value="Update Order" id="mybtn">
                        </form>
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "iwprj";
                            if(isset($_POST['btn'])){
                            $trackingtech=$_POST['trac'];
                            $ostat=$_POST['status'];
                            }
                            try {
                            if($ostat == "Remove"){
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                // set the PDO error mode to exception
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                //UPDATE `orderlist` SET `status` = '$ostat' WHERE `orderlist`.`trkid` = '$trackingtech';
                                $sql = "DELETE FROM `orderlist` WHERE `orderlist`.`trkid` = '$trackingtech'";
                                // use exec() because no results are returned
                                $conn->exec($sql);
                                sleep(0.5);
                            }
                            else{
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                // set the PDO error mode to exception
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                //UPDATE `orderlist` SET `status` = '$ostat' WHERE `orderlist`.`trkid` = '$trackingtech';
                                $sql = "UPDATE `orderlist` SET `status` = '$ostat' WHERE `orderlist`.`trkid` = '$trackingtech'";
                                // use exec() because no results are returned
                                $conn->exec($sql);
                                sleep(0.5);
                            }
                            } catch(PDOException $e) {
                            echo $sql . "<br>" . $e->getMessage();
                            }
                            $conn = null;
                            }
                        ?>

            </div>
    <div class="admin-img">
        <img src="adminimg.png" alt="admin-img">
    </div>
    <div class="buttons" style="margin-top: 20px;">
        <!--<div><a href="/forms/shipping.html" class="link">add shipment</a></div>-->
        <div><a href="calcPrice.php" class="link">add shipment</a></div>
        <div><a href="office.php" class="link">add new office</a></div>
        <div><a href="view_branches.php" class="link">view branches</a></div>
        <div><a href="application.php" class="link">Job Applications</a></div>
        <div><a href="view_req.php" class="link">View Requests</a></div>
    </div>


    <h2 style="background-color: violet; text-align: center;">Orders</h2>

    <section class="container cd-table-container">
    <h2 class="cd-title">Search Table Record:</h2>
    <input type="text" class="cd-search table-filter" data-table="order-table" placeholder="Item to filter.." />

<!--php code-1-->
<?php 
$conn = mysqli_connect("localhost","root","","iwprj");
if(!$conn)
{
    die("Failed to connect data base");
}
//retrieving data
$sql = "SELECT * FROM orderlist";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num>0)
{
?>
    <table border="2" id="tracktbl" class="cd-table order-table table">
        <tr style="background-color: turquoise; color: rgb(7, 0, 65);">
            <td><b>Tracking_ID</b></td>
            <td><b>Sender Name</b></td>
            <td><b>Sender Number</b></td>
            <td><b>Sender City</b></td>
            <td><b>Reciever Name</b></td>
            <td><b>Reciever Number</b></td>
            <td><b>Reciever City</b></td>
            <td><b>Order Status</b></td>
        </tr>
        <?php  
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
        <tr>
            <td id="td1"><?php  
                    $vvar=$row['trkid'];
                    echo $row['trkid'];  ?> <!--<form action="" method="get"><input type="submit" name="nbtn" value="GO"></form>--> </td>
            <td><?php  echo $row['sname'] ?></td>
            <td><?php  echo $row['sph'] ?></td>
            <td><?php  echo $row['scty'] ?></td>
            <td><?php  echo $row['rname'] ?></td>
            <td><?php  echo $row['rph'] ?></td>
            <td><?php  echo $row['rcity'] ?></td>
            <td style="background-color: lightblue; color:black; font-weight:600;"><?php  echo $row['status'] ?></td>
        </tr>
    <?php 
    } 
    ?>
    </table>
    <?php
}
else{
    echo "nothong to display!";
}
?>
 <script  src="js/script.js"></script>
</body>
</html>