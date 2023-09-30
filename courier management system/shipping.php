<!DOCTYPE html>
<html>   
 <head>  
  <style> 
  .container {  
    padding-top: 15px;
      max-width: 1350px;  
      width: 100%;  
	margin-left: auto;
  padding-left: 20px;
      margin-right: auto; 
      height: 400px;  
      display: block;  
       border: solid  black;
	 background-color: rgba(252, 252, 252, 0.829);
    }  

.container2{  
      max-width: 1350px;  
      width: 100%;  
	margin-left: auto;
      margin-right: auto; 
    
      height: auto;  
      display: block;  
       border: solid  black;
	 background-color: rgba(252, 252, 252, 0.829);
    }  
      /*margin-left: auto;
            margin-right: auto;*/
    body {  
	 background-image:url(truck.png); 
	background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: centre;
   
    }  

    h2 {  
      text-align: center;  
 background-color: #F0E8A0;  
    }  
  h3 {  
      text-align: left;

	margin-left: 270px;
      margin-right:270px ;  
	height: 25px;    
 	background-color: #FFF000;  
    }  
  /*h4 {  
      text-align: left;
	margin-left: 270px;
      margin-right: 270px; 
 	 height: 25px;    
 	
 	/*background-color: #FFF000 ;  *
    } */ 
      
    .form_group {  
      padding: 10px;
	
	
              
      ;    
    display: block;  
    }  
      
    label {  
      float: left;  
      padding-right: 50px;  
      line-height: 10px;  
      display: block;  
      width: 60px;  
    }   
 .inner{
            margin-left: auto;
            margin-right: auto;
            padding:10px;
	    color: white;
            text-align:center;
        }
  #p1{
    font-weight: 600;
    margin-bottom: -.45px;
  } 
  #send_radio{
    margin-left: 10%;
  }

  #pricebtn{
    border-radius: 20px 20px 20px 20px;
    background-color: red;
    color: white;
    border:solid 2px white;
    height: 28px;
  }
  #submitbtn{
    visibility: hidden;
    margin-left: 650px;
  }
  #submitvalidate{
    border-radius: 20px 20px 20px 20px;
    background-color: rgb(116, 227, 235);
    color: rgb(0, 0, 0);
    border:solid 2px rgb(0, 0, 0);
    height: 28px;
    padding: 10px;
    text-align: center;
  }
  #getcrv{
    height: 100px;
    width: 60%;
    border: solid 3px rgb(0, 204, 255);
    margin-left: 280px;
    border-radius: 20px 20px 20px 20px;
    background-color: rgb(53, 248, 255);
    font-family: 'Courier New', Courier, monospace;
    font-size: 20px;
    font-weight: 500;
  }
  #getcrv1{
    padding: 10px;
    margin-left: 15px;
  }
  #pherrors1, #pherrors2{
    font-size: 15px;
    font-weight: 600;
    color: crimson;
    visibility: hidden;
  }
  #salert{
    font-size: 20px;
    font-weight: 700;
    color: rgb(245, 11, 11);
    font-family: 'Courier New', Courier, monospace;
    visibility: hidden;
  }
         </style>
   <title>Shipping Form</title>    
        </head>    
        <body style="background-image: url('truck.png');
                    height: 25cm;">
		      <img src= "logo2.jfif" ALIGN:"right" alt="PIC1" width="384" height="200"/>  
   
          <h2>Shipping Logistics</h2>
 <h3>Sender</h3>   
 <form action="" name="reciever" method="POST" onsubmit="return validateMe();">
              <div class = "container">  
                <label>Name:*</label>    
                <input type = " text" name = "snames1" value = "" placeholder="First name" required/>    
                <input type = " text" name = "snames2" value = "" placeholder="Middle name"/>     
                <input type = " text" name = "snames3" value = "" placeholder="Last name"/>
                <br> <br>
                <label>Phone *</label>    
                <input type = " number" name = "sphs" value = "" id="sph1"/> <span id="salert">Invalid</span> <br> <br>
                <label>Phone 2:</label>    
                <input type = " number" name = "Phone2" value = "" id="sph2"/> 
                <br> <br>
                <label> House*</label>       
                      <input type="text" id="ipadr1" > <br> <br>
                      <label>Near</label>                                   
                      <input type="text" id="ipadr2"> <br> <br>
                      <label>Pincode</label>                                
                      <input type="text" id="ipadr3">   <br> <br>
                      <label>City*</label>
                      <input type="text" id="ipadr4" name="scities" required> <br> <br>
                      <label>State*</label>
                      <input type="text" id="ipadr5"> <br> <br>
                      <label>Country</label>
                      <input type="text" id="ipadr6" value="India">   
              </div>
              <h3>Receiver</h3> 
  
              <div class="container">
                <label>Name:*</label>    
                <input type = " text" name = "rnames1" value = ""  placeholder="First name" required/> 
                <input type = " text" name = "rnames2" value = "" placeholder="Middle name"/>     
                <input type = " text" name = "rnames3" value = "" placeholder="Last name"/>   
                <br> <br>
                <label>Phone *</label>    
                <input type = " number" name = "rphs" value = ""  id="rph1"/> <span id="salert">Invalid</span> <br> <br>
                <label>Phone 2:</label>    
                <input type = " number" name = "Phone2" value = "" id="rph2"> 
                <br> <br>
                <label> House*</label>       
                      <input type="text" id="rcadr1"> <br> <br>
                      <label>Near</label>                                   
                      <input type="text" id="rcadr2"> <br> <br>
                      <label>Pincode*</label>                                
                      <input type="text" id="rcadr3"> <span id="salert">Invalid</span>  <br> <br>
                      <label>City*</label>
                      <input type="text" id="rcadr4" name="rcities"> <br> <br>
                      <label>State*</label>
                      <input type="text" id="rcadr5" > <br> <br>
                      <label>Country*</label>
                      <input type="text" id="rcadr6" value="India" > <br> <br>
                      <label>Tracking id</label>
                      <input type="text" id="trackID" value="" name="trackings" >   <br> <br>
              </div>
              <label style="margin: 30px 80px; background-color: rgb(48, 1, 63); padding: 10px 20px; color: rgb(252, 252, 252);">Status</label>
              <select name="status" id="status_sel" style="padding: 7px 20px; margin-left: -10px; background-color: rgb(255, 133, 255);">
                <option value="Recieved">Recieved</option>
                <option value="In-transit (station-1)">In-transit (station-1)</option>
                <option value="In-transit (station-2)">In-transit (station-2)</option>
                <option value="Delivered">Delivered</option>
                <option value="Cancelled">Cancelled</option>
              </select>
            <input type="submit" name="btn" value="submit" style="padding: 10px 30px; margin-left: 50%; margin-top: 20px;"/>
            </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwprj";
if(isset($_POST['btn'])){
$sname1=$_POST['snames1'];
$sname2=$_POST['snames2'];
$sname3=$_POST['snames3'];
$sname=$sname1." ".$sname2." ".$sname3;
$rname1=$_POST['rnames1'];
$rname2=$_POST['rnames2'];
$rname3=$_POST['rnames3'];
$rname=$rname1." ".$rname2." ".$rname3;
$sphone=$_POST['sphs'];
$rphone=$_POST['rphs'];
$scity=$_POST['scities'];
$rcity=$_POST['rcities'];
$option=$_POST['status'];
$tracking=$_POST['trackings'];

}
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `orderlist` (`trkid`, `sname`, `sph`, `scty`, `rname`, `rph`, `rcity`, `status`) VALUES ('$tracking', '$sname', '$sphone', '$scity', '$rname', '$rphone', '$rcity', '$option');";
  // use exec() because no results are returned
  $conn->exec($sql);
  sleep(2);
  echo "Order Inserted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
//header("Location: http://localhost/iwpproject/view_branches.php");?>
<script type="text/javascript">
window.location = "http://localhost/iwpproject/admin_portal.php";
</script>  
<?php 
$conn = null;
}
?>

            <button id="getcrv1" onclick="getcrv()">Tracking ID </button>
            <div class = "inner">
              <!--<button id="submitvalidate" onclick="makevisible()">Payment Done</button>-->  
            </div> 
        </body>
        <script>
          function makevisible()
          {
            document.getElementById("submitvalidate").style.visibility="hidden";
            document.getElementById("submitbtn").style.visibility="visible";
          }
          function getcrv()
          {
            var x=Math.random().toString(36).substr(2, 10);
            document.getElementById("trackID").value=x;
            document.getElementById("trackID").style.backgroundColor="red";
            document.getElementById("trackID").style.color="white";
          }

          function validateMe()
          {
            var flag=4;
            var p1=document.getElementById("sph1");
            var p3=document.getElementById("rph1");
            var phone_regx=/^[7-9]\d{9}$/;
            var pin1=document.getElementById("ipadr3");
            var pin2=document.getElementById("rcadr3");

            if(phone_regx.test(p1.value))
            {
              flag--;
            }
            else
            {
              p1.style.backgroundColor="rgb(250, 118, 140)";
              p1.focus();
              alert("Invalid Mobile Number");
              return false;
            }
            if(pin1.value.trim().length != 6)
            {
              pin1.style.backgroundColor="rgb(250, 118, 140)";
              pin1.focus();
              alert("Invalid Pin1");
              return false;
            }
            else
            {
              flag--;
            }
          if(phone_regx.test(p3.value))
            {
              flag--;
            }
            else
            {
              p3.style.backgroundColor="rgb(250, 118, 140)";
              p3.focus();
              alert("Invalid Mobile Number");
              return false;
            }
            if(pin2.value.trim().length != 6)
            {
              pin2.style.backgroundColor="rgb(250, 118, 140)";
              pin2.focus();
              alert("Invalid Pin2");
              return false;
            }
            else
            {
              flag--;
            }
            if(flag==0)
            {
              return true;
            }
            else
            {
              return false;
            }
          }
        </script>
        <style>
          /*body{
            background-color: rgb(250, 118, 140);
          }*/
        </style>   
    </html>    

    