<!DOCTYPE html>
<html>   
 <head>  
  <style> 
  .container {  
      max-width: 1350px;  
      width: 100%;  
	margin-left: auto;
      margin-right: auto; 
    
      height: auto;  
      display: block;  
       border: solid  black;
	color: white;
	 background-color: transparent;
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
      width: 150px;  
    }   
.inner{
            margin-left: auto;
            margin-right: auto;
            padding:10px;
	    color: white;
            text-align:center;
        }
.label1{
    font-weight: 600;
    background-color: rgb(255, 251, 0);
    padding: 7px;
    color: black;
}
.possible{
    color: rgb(250, 247, 243);
    border: double 2px white;
    background-color: rgba(255, 255, 255, 0.185);
    visibility: inherit;
}
#psb1{
    margin-left: 200px;
    padding: 8px;
    font-weight: 600;
}
#forpsb{
    height: 150px;
    width: 850px;
    border: solid 3px rgb(2, 2, 177);
    border-radius: 20px 20px 20px 20px;
    background-color: rgb(203, 212, 230);
    margin-left: 200px;
    text-align: center;
    color: red;
    font-family: 'Courier New', Courier, monospace;
    font-size: 35px;
    font-weight: 700;
}
.visb{
visibility: hidden;
}
.myform{
border: solid 2px rgb(0, 0, 0);
background-color: rgba(245, 245, 245, 0.158);
height: 200px;
width: 100%;
color: whitesmoke;
margin-top: 15px;
padding: 20px;
font-size: 20px;
}
         </style>
   <title>Office Form</title>    
        </head>    
        <body style="background-image: url('https://cdn.wallpapersafari.com/11/52/YxRayv.jpeg');">
		      <img src= "capture.png" ALIGN:"right" alt="PIC1" width="384" height="200"/>   
            <h2>Branch Extension</h2> 
            
           <!-- <form action="" name="possibility"> -->
                <div class="possible" id="calcfrom">
                    <div class = "form_group">    
                        <label class="label1">Parcel Requests:</label> 
                        <br> <br>    
                        <input id="preq" type = "text" name = "Requests" value = "" required/>    
                        </div> 

 			<div class = "form_group">  
			<label class="label1">Terrain:</label><br> <br>   
			<input type="radio" id="Hilly" name="Terrain" value="5">Hilly</input> <br>
			<input type="radio" id="Coastal" name="Terrain" value="8">Coastal</input> <br>
            <input type="radio" id="desert" name="Terrain" value="4">Desert</input> <br>
            <input type="radio" id="plain" name="Terrain" value="10">Plain</input> <br> 
   		    </div>  
			

 			<div class = "form_group">  
			 <label class="label1">Rating:</label><br> <br>   

			<input type="radio" id="1" name="Rating" value="1">1</input>
            <input type="radio" id="1" name="Rating" value="2">2</input>
            <input type="radio" id="1" name="Rating" value="3">3</input>
            <input type="radio" id="1" name="Rating" value="4">4</input>
            <input type="radio" id="1" name="Rating" value="5">5</input>
            <!--
			<input type="radio" id="3" name="Rating" value="3">
			<label for="3">3</label>

			<input type="radio" id="4" name="Rating" value="4">
			<label for="4">4</label>

			<input type="radio" id="5" name="Rating" value="5">
			<label for="5">5</label>-->
   		        </div>  

 			<div class = "form_group">
            <label class="label1">Employee Count:</label><br> <br>  
            <select name="emp" id="sel1">
                <option value="1">less than 5</option>
                <option value="2">greater than 5 & less than 15</option>
                <option value="3">greater than 15</option>
            </select>
                <!---  
			 <label class="label1">Employee Count:</label><br> <br>   

			<input type="radio" id="<5" name="Count" value="Skeleton">
			<label for="<5"><5</label><br>

			<input type="radio" id="<15" name="Count" value="Sparse">
			<label for="<15"><15</label><br>

			<input type="radio" id=">15" name="Count" value="Significant">
			<label for=">15">>15</label><br>-->
   		    </div>  
            <!--</form>-->
            <button onclick="possible()" id="psb1">Check possibility</button>
            <div id="forpsb"></div>
            <button onclick="agree()" id="psb1">I agree</button>
</div>


<!--

</head>
<body>
-->

<div class="visb" id="mainform">
 <h3>Location</h3>   
 <form name = "form1" action="" method="POST" onsubmit="return val();">
    <div class = "myform" id="mainform2">
        <label> Name:</label>
        <input type = " text" name = "names" value = "" required id="inp1"/> <br>  <br>
        <label> Locality:</label>
        <input type = " text" name = "localities" value = "" required id="inp2"/> <br>  <br>
        <label>City:</label>
        <input type = " text" name = "cities" value = "" required id="inp3"/> <br>  <br>
        <label>State:</label>
        <input type = " text" name = "states" value = "" required id="inp4"/> <br> <br>
        <label>Phone:</label>
        <input type = " number" name = "phones" value = "" required id="inp5"/>    <br> <br>
        <input type="submit" onclick="val()" value="Submit" id="form-submit" name="btn">
   </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwprj";
if(isset($_POST['btn'])){
$name=$_POST['names'];
$city=$_POST['cities'];
$state=$_POST['states'];
$phone=$_POST['phones'];
}
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `branches` (`name`, `city`, `state`, `phone`) VALUES ('$name', '$city', '$state', '$phone');";
  // use exec() because no results are returned
  $conn->exec($sql);
  sleep(2);
  echo "<h3>Branch Inserted successfully</h3>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
//header("Location: http://localhost/iwpproject/view_branches.php");?>
<script type="text/javascript">
window.location = "http://localhost/iwpproject/view_branches.php";
</script>  
<?php 
$conn = null;
}
?>

</div> 
<br> 

 </div>
 
 <script>
     function possible()
     {
         var score=0, noP;
        var pr=document.getElementById("preq").value;
        if(pr<100)
        {
            score=1;
        }
        else if(pr>100 && pr<=200)
        {
            score=2;
        }
        else
        {
            score=3;
        }
        var reg=document.getElementsByName("Terrain");
        for(var i=0;i<4;i++){
                if(reg[i].checked){
                    score=score+parseInt(reg[i].value);
                }
            }
        var rat=document.getElementsByName("Rating");
        for(var i=0;i<5;i++){
                if(rat[i].checked){
                    score=score+parseInt(rat[i].value);
                }
            }
        var sel=parseInt(document.getElementById("sel1").value);
        score += sel;
        if(score<=10)
        {
            document.getElementById("forpsb").innerHTML="Feasibility score is- "+score+"<br>"+"<b><b> Not Recommended</b></b> to create Office!";
        }
        else if(score>10 && score<18)
        {
            document.getElementById("forpsb").innerHTML="Feasibility score is- "+score+"<br>"+"Creating office <b><b>Not Profitable</b></b>!";
        }
        else
        {
            document.getElementById("forpsb").innerHTML="Feasibility score is- "+score+"<br>"+"Creating office <b><b>Highly Profitable</b></b> go ahed!"; 
        }
        }
     function agree()
     {
        var element = document.getElementById("calcfrom");
	    element.parentNode.removeChild(element); 
        document.getElementById("mainform").style.visibility="visible";
         /*document.getElementById("calcfrom").style.visibility="hidden";
         document.getElementById("mainform2").style.marginTop="-400px";*/
     }
     function val()
     {
      var nam = document.getElementById('inp1').value;
      /*var regname = /^[A-Za-z]{5,}$/;

      if(!regname.test(nam)){
        alert("Invalid Name");
        return false;
      }*/

      var local = document.getElementById('inp2').value;
      var regloc = /^[A-Za-z]{5,}$/;

      if(!regloc.test(local)){
        alert('Invalid Locality');
        return false;
      }

      var cit = document.getElementById('inp3').value;
      var regcity = /^[A-Za-z]{3,}$/;

      if(!regcity.test(cit)){
        alert('Invalid City');
        return false;
      }

      var stat = document.getElementById('inp4').value;
      var regstate = /^[A-Za-z]{3,}$/;

      /*if(!regstate.test(stat)){
        alert('Invalid State');
        return false;
      }*/

      var numb = document.getElementById('inp5').value;
      var regnum = /^[7-9][0-9]{9}$/;

      if(!regnum.test(numb)){
        alert('Invalid Number');
        return false;
      }

    }
 </script>

  </script>

</body>    
    </html>   
               