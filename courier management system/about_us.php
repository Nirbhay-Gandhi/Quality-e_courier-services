<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .image-desc{
            background-image: url('background4.jfif');
            height: 120vh;
            background-repeat: no-repeat;
           background-size: cover;
           margin:auto;
           opacity: 0.8;
        }
         .imgdescpara{
            padding-left: 10%;
            padding-top: 10px;
            font-size: 22px;
            font-weight: 700;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .myul{ 
            font-family: cursive;
            font-weight: 400;
            font-style: normal;
            color: chartreuse;
            line-height: 28px;
        }
        .normal-decoration{
            background-color: chartreuse;
            clear: right;
            text-align: center;
        }
        .floatstyle{
            float: right;
            border-radius: 50%;
            margin-top: -35px;
            height: 100px; 
            width: 130px;
        }
        #sideflower {
        float: left;
        margin-top: -750px;
        position: relative;
        width: 120px;
        height: 120vh;
        box-shadow: 0px 0px 15px 1px rgba(252, 202, 233, 0.301);
        }
        .usemap{
            display: inline-block;
            vertical-align: top;
        }
        #addressid{
            margin-left: 30px;
            font-weight: 300;
            font-family: fantasy;
        }
        /*#flower-r{
            height:300px; 
            width: 50%;
            float: left;
            margin-top: -150px;
            box-shadow: 0 0 8px 8px rgba(236, 234, 234, 0.829);
        }
        #flower-l{
            height: 300px; 
            width: 50%;
            float: right;
            margin-top: -150px;
            box-shadow: 0 0 8px 8px rgba(236, 234, 234, 0.829);
        }
        #gallery-dec{
            background-color: rgb(255, 97, 221);
            margin-top: 100px;
            font-size: 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }*/

        .mydiv-row img{
            border: 2px solid black;
            height: 200px;
            width: 300px;
            margin:12px;
            flex-grow: 1;
        }
        .mydiv-row{
            display: flex;
            flex-wrap: wrap;

        }
        .gallery-decoration{
            text-align: center;
            font-size: 30px;
            font-family: cursive;
            font-weight: 600;
            background-color: rgb(247, 170, 71);
        }
        /**navigation bar css*/
        .heading li{
  background-color: rgb(255, 252, 65);
  margin: 40px 20px;
  border-radius: 25px;
}
.heading li:hover{/**navigation bar css*/
  background-color: #f10404;
  cursor: pointer;
  color: #ffffff;
}

.heading{/**navigation bar css*/
  width: 100%;
	overflow:hidden;
  height: 110px;
}

.logo img{/**navigation bar css*/
  float: left;
  padding: 10px 10px 10px 10px;
  /*border: 2px solid;*/
  border-radius: 0%;
  width: 200px;
}

#search{/**navigation bar css*/
  float: right;
  padding-left: 15px;
  padding-right: 15px;
  margin-top: 2px;
  border-radius: 10px;
  height: 25px;
}

header{/**navigation bar css*/
  background-color: #0e9db9f1;
  background-image: url('background4.jfif');
  border-radius: 0px;
  background-size: contain;
  color: white;
  font-size: 20px;
  border-bottom: #000000 5px solid;
	position: sticky;
}

header .current a{/**navigation bar css*/
  color:rgb(240, 30, 30);
	font-weight:100;
}

header a:hover{/**navigation bar css*/
	color: rgb(250, 250, 250);
	font-weight: bolder;
  background-color: #f10404;
  padding: 2px 2px 2px 2px;
}

header a{/**navigation bar css*/
	/*color: rgb(10, 134, 235);*/
  font-weight: bold;
	text-decoration: none;
	font-size:20px;
	text-transform: uppercase;
  /*text-shadow: 2px 2px #ff0000;*/
  font-family: 'Courier New', Courier, monospace;
}

header li{/**navigation bar css*/
	float: right;
	display: inline;
	padding:10px 20px 10px 20px;
}

header img{/**navigation bar css*/
  width:400px;
  height: 100px;
  padding: 0px 10px 0px 5px;

}
/**end*/
#down-flower{
    width: 90%;
    height: 70px;
    float: right;
    margin-top: -1085px;
    position: relative;
}
    </style>
</head>
<body><!--from here-->
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
                  <li><a href="contact.php">Contact Us </a></li>
                  <li><a href="track.php">Track</a></li>
                  <li><a href="admin page.php" target="">Admin</a></li>
                  <li><a href="home.php" target="">Home</a></li>
                  </ul>
                            </nav>
                    </div>
        </header><!--to here-->
    <main class="main-desc">
        <section class="image-desc" id="acknowlwdge">
            <div class="imgdescpara">
               <p>
                Parcel delivery services are in high demand as large number of people need to send parcels in day to day life 
                from one place to the other at personal or even at commercial level. 
                Parcels are in fact a very good way to deliver the documents or other important things at the distant 
                places in an easy and time saving manner. 
                It proves to be beneficial and useful for both the parties.<br><br>
                <div class="myul">
                <ul> We believe in </ul>
                <br>
                <li style="color: rgb(238, 16, 16);">Excellence</li>
                <dd> It is one of the key features of our parcel delivery service provider. 
                Whether you hire cheap courier services or other types of service providers, our service is the best.</dd><br>
                <li style="color: rgb(255, 100, 10);">Customer satisfaction </li>
                <dd> After all, customers may give positive reviews about any company and access it to be good in all 
                respects if it is able to keep them satisfied by way of its services.</dd>
                <br>
                <li style="color: rgb(5, 247, 255);">Fully traceable parcel delivery services</li>
                <dd>Customer latter may be able to trace their couriers or parcels whenever required and get to 
                know about the current status for the same.</dd>
                <br>
                <li style="color: rgb(255, 49, 93);">Fast services</li>
                <dd>We offer fast and quick services. </dd>
            </div>
               </p>
            </div>
        </section>
        <!--Side image bar below-->
        <div><img src="sideflower.jpg" alt="flower" width="20px" id="sideflower"></div>

        <h1 class="normal-decoration">Our Offices</h1>
        <img src="img3.jfif" alt="myimg" class="floatstyle">
        <div class="usemap">
            
            <img src="indiamap.jpg" alt="map" height="440px" width="600px" usemap="#indiamap">
            <map name="indiamap">
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="89,187,10"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="119,121,15"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="159,70,10"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="221,27,8"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="161,299,8"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="192,214,9"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="205,157,10"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="144,469,15"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="207,401,7"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="292,289,6"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="304,205,16"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="399,197,11"/>
            <area href="locations.html" alt="pos1" target="_blank" shape="circle" coords="448,154,10"/>
            </map>
        </div>
            <div class="usemap" id="addressid">
                <p>H.O: <br>Ahmedabad, Gujarat <br>079-234659 </p> <br>
                <p>H.O: <br>Jaipur, Rajasthan <br>9876465200/11</p> <br>
                <p>H.O: <br>Mumbai, Maharastra <br>8820203211/11/23 </p> <br>
                <p>H.O: <br>Chennai, Tamil Nadu <br>9191002020/11 </p> <br>
                <p>H.O: <br>Kolkata, W-B <br>8899898911/00 </p> <br>
                <p>H.O: <br>Bhopal, M.P <br>02931-223312 </p> <br>
            </div>

            <div class="gallery-decoration">Gallery</div>
    <div class="mydiv-row">
        <img src="img10.jfif" alt="">
        <img src="img11.jfif" alt="">
        <img src="img4.jfif" alt="">
        <img src="img5.jfif" alt="">
        <img src="img6.jfif" alt="">
        <img src="img7.jfif" alt="">
        <img src="img8.jfif" alt="">
        <img src="img9.jfif" alt="">
    </div>
    <img src="downflower2.jfif" alt="flower" id="down-flower">
    </main>
    <!--<style>
      body{
        background-color: rgb(94, 0, 97);
        color: rgb(21, 9, 75);
        color: rgb(94, 0, 97);
        
        color: rgb(250, 249, 243);
      }
    </style>-->
</body>
</html>