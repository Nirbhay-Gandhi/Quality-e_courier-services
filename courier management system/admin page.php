<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
        <style>
            .container{
		background-color: transparent;
                width:80%;
                margin-left:auto;
                margin-right:auto;
                border:0 solid  white;
            }
        .top{
            background-color: transparent;
            text-align: center;
            height:50px;
border:3px solid  white;
            color: white;
        }
        .inner{
            margin-left: auto;
            margin-right: auto;
            padding:10px;
	    color: white;
            border:3px solid  white;
            text-align:center;
        }

 	body{
	background-image: '01.png';
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: centre;
  font-family: Arial;
  font-size: medium;
	 }

   .link{/**button for dummy login*/
            text-decoration: none;
            text-transform: capitalize;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 600;
            height: 50px;
            width: 200px;
            border: 2px solid black;
            border-radius: 20px;
            background-color: rgb(206, 206, 241);
            text-align: center;
            line-height: 50px;
            margin:auto;
            margin-top: 1cm;
        }
  </style>
</head>
<body>

</head>
<body>
<body style="background-image: url('https://wallpapercave.com/wp/wp2570965.jpg');">
<img src= "logo2.jfif" ALIGN:"right" alt="PIC1" width="384" height="200"/>
<div class="container">    
<h1 class="top" >Admin Login</h1>
<div class="inner">    
 <h2>Enter Credentials</h2>    
    
    <!--<form id="login-form" action="/about_us/admin_portal.html">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username" value = "" required><br><br>
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password" value = "" required><br><br>
      <input type="submit" value="Login" id="login-form-submit">
    </form>-->

    <form id="login-form" action="admin_portal.php" method="POST" onsubmit="return validate();">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username" value = "" required><br><br>
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password" value = "" required><br><br>
      <input type="submit" onclick="validate()" value="Login" id="login-form-submit">
    </form>
    </div>
        </div>
        <button class="link"><a href="admin_portal.php">Dummy Login</a></button>
    <!--<div class="instrn">Instruction: User name: 95BGV0807</div>
    <div class="instrn">Instruction: password: 9AcJN896t</div>-->
  </main>
  <script>
    function validate(){
      var usernam = document.getElementById('username-field').value;
      var reguser= /^[1-9]{2}[A-Za-z]{3}[0-9]{4}$/;
        if(!reguser.test(usernam)){
          //system@abc.com 95BGV0807
            alert("Invalid username");
            return false;

        }
        var Password = document.getElementById('password-field').value;
        var regpass= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        //system@abc.com 9AcJN896t
       if(!regpass.test(Password)){

             alert("Must contain at least one  number, one uppercase, one lowercase letter, and at least 8 or more characters");
              return false;
          }
    }
</script>
</body>
</html>
