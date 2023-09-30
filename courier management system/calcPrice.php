<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image:url(truck.png); 
        background-size: cover;
    }
    .pricecalc{
        margin-left: 25%; 
        margin-right: 20%; 
       border: solid  black;
	 background-color: rgba(252, 252, 252, 0.829);
    }
    .pwt{
        border-bottom: solid 2px rgb(255, 0, 179);
        padding-bottom: 10px;
        padding-top: 5px;
    }
    .pwt p{
        margin-left: 150px;
    }
    #prodwt{
        margin-left: 150px;
    }
    #pricebtn{
        margin-left: 25%; 
        margin-right: 20%; 
        padding: 10px;
        background-color: rgb(255, 252, 209);
    }
    #paybtn{
        margin-left: 40%; 
        margin-right: 20%; 
        padding: 10px;
        background-color: rgb(255, 252, 209);
    }
    #nextbtn{
        padding: 10px;
        background-color: rgb(255, 252, 209);  
    }
  #disp_price{
    height: 100px;
    width: 60%;
    border: solid 3px rgb(0, 204, 255);
    margin-left: 280px;
    border-radius: 20px 20px 20px 20px;
    background-color: rgb(53, 248, 255);
  }
  #disp_price{
      text-align: center;
      font-family: 'Courier New', Courier, monospace;
      font-size: 40px;
      font-weight: 600;
      color: red;
      padding-top: 30px;
  }
</style>
<body>
    <div id="maincalc">
     <!---->
     <div class="pricecalc" id="pricecalc">
         <div class="pwt">
        <p id="p1">Product Weight</p>
        <input type="text" id="prodwt"> 
        </div>
        <div id="send_radio">
          <p id="p1" >Product Medicines</p> 
          <input type="radio" value=60 name="med1">Yes [-60/Kg]</input>
          <input type="radio" value=0 name="med1" >No</input> <br> <br> <hr>  
          <p id="p1">Product Books</p>
          <input type="radio" value=-30 name="book1">Yes [-30/Kg]</input>
          <input type="radio" value=0 name="book1">No</input>  <br> <br> <hr>
          <p id="p1">Product Fragile</p>
          <input type="radio" value=600 name="frgile1">Yes [+600/Kg]</input>
          <input type="radio" value=0 name="frgile1">No</input> <br> <br> <hr>
          <p id="p1">Product Liquid</p>
          <input type="radio" value=200 name="liquid1">Yes [+200/Kg]</input>
          <input type="radio" value=0 name="liquid1">No</input> <br> <br> <hr>
          <p id="p1">Product Urgent Delivery</p>
          <input type="radio" value=300 name="ugd1">Yes [+300/Kg]</input>
          <input type="radio" value=0 name="ugd1">No</input> <br> <br> <hr>
          <p id="p1">Imp doc (Not to fold!)</p>
          <input type="radio" value=90 name="ipdoc1">Yes [+90/Kg]</input>
          <input type="radio" value=0 name="ipdoc1">No</input> <br> <br> <hr>
          <p id="p1">Product Eadibles</p>
          <input type="radio" value=240 name="edb1">Yes [+240/Kg]</input>
          <input type="radio" value=0 name="edb1">No</input> <br> <br> <hr>
          <p id="p1">Product Electronics</p>
          <input type="radio" value=300 name="elet1">Yes [+300/Kg]</input>
          <input type="radio" value=0 name="elet1">No</input>  <br> <br> <hr>
        </div> 
      </div>
      <div id="pricecalc">
        <button id="pricebtn" onclick="calcPrice()">Calculate Price</button>
        <p id="disp_price"></p>
        <button id="paybtn" onclick="payment()">Payment </button>
        <button id="nextbtn" onclick="nextPage()"><a href="shipping.php">Enter Details</a></button>
      </div>
      <!----> 
    </div>   

      <script>
        function calcPrice()
        {
            var sum=0,pwt;
            pwt=parseInt(document.getElementById("prodwt").value);
            var med=document.getElementsByName('med1');
            for(var i=0;i<2;i++){
                if(med[i].checked){
                    sum=sum+parseInt(med[i].value);
                }
            }
            var book=document.getElementsByName('book1');
            for(var i=0;i<2;i++){
                if(book[i].checked){
                    sum=sum+parseInt(book[i].value);
                }
            }
            var frg=document.getElementsByName('frgile1');
            for(var i=0;i<2;i++){
                if(frg[i].checked){
                    sum=sum+parseInt(frg[i].value);
                }
            }
            var liq=document.getElementsByName('liquid1');
            for(var i=0;i<2;i++){
                if(liq[i].checked){
                    sum=sum+parseInt(liq[i].value);
                }
            }
            var ugd=document.getElementsByName('ugd1');
            for(var i=0;i<2;i++){
                if(ugd[i].checked){
                    sum=sum+parseInt(ugd[i].value);
                }
            }
            var ipd=document.getElementsByName('ipdoc1');
            for(var i=0;i<2;i++){
                if(ipd[i].checked){
                    sum=sum+parseInt(ipd[i].value);
                }
            }
            var ebd=document.getElementsByName('edb1');
            for(var i=0;i<2;i++){
                if(ebd[i].checked){
                    sum=sum+parseInt(ebd[i].value);
                }
            }
            var ele=document.getElementsByName('elet1');
            for(var i=0;i<2;i++){
                if(ele[i].checked){
                    sum=sum+parseInt(ele[i].value);
                }
            }
            document.getElementById("disp_price").innerHTML= "Total: "+(sum+pwt);
           /* var pwt, ppr;
        pwt=document.getElementById("prodwt").value;
        if(pwt>0 && pwt<=50)
            ppr=300;
        else if(pwt>50 && pwt<=150){
            ppr=550;
        }
        else{
            ppr=600;
        }*/

        //var total=pwt*ppr - m*pwt - b*pwt + f*pwt + l*pwt + ud*pwt + id*pwt + edb*pwt + e*pwt; 

        /*document.getElementById("disp_price").innerHTML="<h2>The Price is: "+ total + "</h2>";*/
        }
        function payment()
        {
            document.getElementById("disp_price").style.backgroundColor="red";
            document.getElementById("disp_price").style.border="solid 3px white";
            document.getElementById("disp_price").style.color="white";
            document.getElementById("disp_price").innerHTML="Payment Done!!!";
        }
        function nextPage()
        {
            var element = document.getElementById("maincalc");
	    element.parentNode.removeChild(element);
        }
      </script>
</body>
</html>