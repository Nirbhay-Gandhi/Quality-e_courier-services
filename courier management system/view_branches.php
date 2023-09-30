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
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 25%;
    }
    #tracktbl tr td{
        margin-left: 5px;
        margin-right: 5px;
        padding-left: 40px;
        padding-right: 40px;
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
                  <li><a href="track.php">TRACK</a></li>
                  <li><a href="admin_portal.php">Admin Page</a></li>
                </ul>
                </nav>
            </div>
  
              </header>

    <div class="admin-img">
        <img src="adminimg.png" alt="admin-img">
    </div>
    <div class="buttons" style="margin-top: 20px;">
        <!--<div><a href="/forms/shipping.html" class="link">add shipment</a></div>-->
        <div><a href="office.php" class="link">Add more branches</a></div>
    </div>
    <h2 style="background-color: violet; text-align: center;">Our Branches</h2>

<!--php code-1-->
<?php 
$conn = mysqli_connect("localhost","root","","iwprj");
if(!$conn)
{
    die("Failed to connect data base");
}
//retrieving data
$sql = "SELECT * FROM branches";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num>0)
{
?>
    <table border="2" id="tracktbl">
        <tr style="background-color: turquoise; color: rgb(7, 0, 65);">
            <td>Branch_ID</td>
            <td>Branch name</td>
            <td>City</td>
            <td>State</td>
            <td>Phone number</td>
        </tr>

    <?php  
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
        <tr>
            <td><?php  echo $row['id'] ?></td>
            <td><?php  echo $row['name'] ?></td>
            <td><?php  echo $row['city'] ?></td>
            <td><?php  echo $row['state'] ?></td>
            <td><?php  echo $row['phone'] ?></td>
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

</body>
</html>