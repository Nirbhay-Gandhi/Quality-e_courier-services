<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Quiz</title>
<style>
   /*  h1 {
    font-family:'Gabriola', serif;
    text-align: center;
}*/
ul {
    list-style: none;
}
/*li {
    font-family:'Cambria', serif;
    font-size: 1.5em;
}*/
input[type=radio] {
    border: 0px;
    width: 20px;
    height: 1.5em;
}
p {
    font-family:'Gabriola', serif;
}
/* Quiz Classes */
 .quizContainer {
    background-color: rgb(115, 192, 255);
    border-radius: 6px;
    width: 75%;
    margin: auto;
    padding-top: 5px;
    /*-moz-box-shadow: 10px 10px 5px #888;
    -webkit-box-shadow: 10px 10px 5px #888;
    box-shadow: 10px 10px 5px #888;*/
    position: relative;
}
.quizcontainer #quiz1
{
text-shadow:1px 1px 2px orange;
font-family:"Georgia", Arial, sans-serif;
}
.nextButton {
    /*box-shadow: 3px 3px 5px #888;
    border-radius: 6px;
   /* width: 150px;*
    height: 40px;*/
    text-align: center;
    background-color: lightgrey;
    /*clear: both;*/
    color: rgb(17, 7, 105);
    
    position: relative;
    margin: auto;
	font-size:15px;
    padding-top: 5px;
	float:right;
	right:30%;
}

.preButton {
    /*box-shadow: 3px 3px 5px #888;
    border-radius: 6px;
    /*width: 150px;*
    height: 40px;*/
    text-align: center;
    background-color: lightgrey;
    /*clear: both;*/
    color: rgb(17, 7, 105);
    
    position: relative;
    margin: auto;
	font-size:15px;
    padding-top: 5px;
	float:left;
	left:30%;
}

.question {
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 20px;

    width: 100%;
    height: auto;
    margin: auto;
    border-radius: 6px;
    background-color: blue;
    text-align: center;
    color: rgb(255, 255, 255);
}
.quizMessage {
    border-radius: 6px;
    width: 20%;
    margin: auto;
    text-align: center;
    padding: 5px;
	font-size:20px;
	font-weight:bold;
	position:absolute;
	top:80%;
	left:40%;
}
.choiceList {
    /*font-family: 'Arial', serif;
    color: #ed12cd;*/
	font-size:20px;
	font-weight:bold;
}
.result {
    width: 40%;
    height: auto;
    border-radius: 6px;
    background-color: linen;
    margin: auto;
	color:green;
    text-align: center;
	font-size:25px;
    font-family:'Verdana', serif;
	font-weight:bold;
	position:absolute;
	top:80%;
	left:30%;
}
#header{
        text-align: center;
        background-color: blue;
        color: cornsilk;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 40px;
        font-weight: 700;
    }
#message, #frm1{
    background-color: rgb(241, 150, 150);
    color: rgb(7, 1, 61);
    font-weight: 400;
    margin-left: 35%;
    padding: 5px 20px;
    width: 500px;
}
#frm1{
	visibility: hidden;
}
#frm1ip{
	color: rgb(7, 7, 61); 
	background-color: rgb(205, 245, 245); 
	width: 50px; 
	font-size: 20px; 
	font-weight: 800; 
	margin-left: 30px; 
	border-radius: 20px; 
	padding: 0px 10px;
}
/* End of Quiz Classes */
</style>

<body>
    <div id="header">Welcome to Career Options for <span style="color: rgb(255, 223, 40);">Fast Coutier Services</span></div> 
    <br> <br> 
    <div class="quizContainer container-fluid well well-lg">
        <div id="quiz1" class="text-center">
			<center><img class="img-responsive" height="80px" width="150px" src="logo.jpeg"></center>
			<h4 style="position:absolute;left:70%;top:30%;" align="center" ><span id="">Time Remaining: </span><br/><span id='timer' style="font-size:25px; font-family: 'Courier New', Courier, monospace; color: crimson; background-color: rgb(255, 255, 255);"></span></h4>
            <br> <br> 
		</div>
		
        <div class="question"></div>
        <br> 
        <ul class="choiceList"></ul>
        <div class="quizMessage"></div>
        <div class="result"></div>
		<button class="preButton">Previous Question</button>
        <button class="nextButton">Next Question</button>
    </div>
<div id="message" style="font-size: 30px; font-family: 'Courier New', Courier, monospace;"></div>

<form action="" id="frm1" method="POST">
	<label for="">Marks</label>
	<input type="text" name="amarks" id="frm1ip"/>
	<br> <input type="text" name="names" placeholder="Your Name"/> <br>
	<input type="submit" name="btn" value="Verified Marks" style="color: rgb(7, 7, 61);"/>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwprj";
if(isset($_POST['btn'])){
$aname=$_POST['names'];
$amarks=$_POST['amarks'];
}
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE `application` SET `marks` = '$amarks' WHERE `application`.`name` = '$aname';";
  // use exec() because no results are returned
  $conn->exec($sql);
  sleep(2);
  echo "Branch Inserted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
//header("Location: http://localhost/iwpproject/view_branches.php");?>
<script type="text/javascript">
window.location = "http://localhost/swprj/home.php";
</script>  
<?php 
$conn = null;
}
?>

<script>
var questions = [{
    question: "Who is the developer of the Project e-Courier Services?",
    choices: ["Nirbhay S Gandhi", "Tim Cook", "Merk Brownlee", "None of the above"],
    correctAnswer: 0
},{
	question: "If a customer have put some illegal drugs in the parcel, and have asked to deliver it. You accept the parcel and then you get a call from customs. What would you say?",
    choices: ["I confess, even I was involved", "By mistake", "I don't have fear of anyone", "Run away"],
    correctAnswer: 2
}, {
	question: "You had an ugly fight with a customer, what will you do?",
    choices: ["Beat him up nicely", "Run away", "Call police", "Can't tell"],
    correctAnswer: 0
}];


var currentQuestion = 0;
var viewingAns = 0;
var correctAnswers = 0;
var quizOver = false;
var iSelectedAnswer = [];
	var c=180;
	var t;
$(document).ready(function () 
{
    // Display the first question
    displayCurrentQuestion();
    $(this).find(".quizMessage").hide();
    $(this).find(".preButton").attr('disabled', 'disabled');
	
	timedCount();
	
	$(this).find(".preButton").on("click", function () 
	{		
		
        if (!quizOver) 
		{
			if(currentQuestion == 0) { return false; }
	
			if(currentQuestion == 1) {
			  $(".preButton").attr('disabled', 'disabled');
			}
			
				currentQuestion--; // Since we have already displayed the first question on DOM ready
				if (currentQuestion < questions.length) 
				{
					displayCurrentQuestion();
					
				} 					
		} else {
			if(viewingAns == 3) { return false; }
			currentQuestion = 0; viewingAns = 3;
			viewResults();		
		}
    });

	
	// On clicking next, display the next question
    $(this).find(".nextButton").on("click", function () 
	{
        if (!quizOver) 
		{
			
            var val = $("input[type='radio']:checked").val();

            if (val == undefined) 
			{
                $(document).find(".quizMessage").text("Please select an answer");
                $(document).find(".quizMessage").show();
            } 
			else 
			{
                // TODO: Remove any message -> not sure if this is efficient to call this each time....
                $(document).find(".quizMessage").hide();
				if (val == questions[currentQuestion].correctAnswer) 
				{
					correctAnswers++;
				}
				iSelectedAnswer[currentQuestion] = val;
				
				currentQuestion++; // Since we have already displayed the first question on DOM ready
				if(currentQuestion >= 1) {
					  $('.preButton').prop("disabled", false);
				}
				if (currentQuestion < questions.length) 
				{
					displayCurrentQuestion();
					
				} 
				else 
				{
					displayScore();
					$('#iTimeShow').html('Quiz Time Completed!');
					$('#timer').html("You scored: " + correctAnswers + " out of: " + questions.length);
					c=185;
					$(document).find(".preButton").text("View Answer");
					$(document).find(".nextButton").text("Play Again?");
					quizOver = true;
					return false;
					
				}
			}
					
		}	
		else 
		{ // quiz is over and clicked the next button (which now displays 'Play Again?'
			quizOver = false; $('#iTimeShow').html('Time Remaining:'); iSelectedAnswer = [];
			$(document).find(".nextButton").text("Next Question");
			$(document).find(".preButton").text("Previous Question");
			 $(".preButton").attr('disabled', 'disabled');
			resetQuiz();
			viewingAns = 1;
			displayCurrentQuestion();
			hideScore();
		}
    });
});



function timedCount()
	{
		if(c == 185) 
		{ 
			return false; 
		}
		
		var hours = parseInt( c / 3600 ) % 24;
		var minutes = parseInt( c / 60 ) % 60;
		var seconds = c % 60;
		var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);            
		$('#timer').html(result);
		
		if(c == 0 )
		{
					displayScore();
					$('#iTimeShow').html('Quiz Time Completed!');
					$('#timer').html("You scored: " + correctAnswers + " out of: " + questions.length);
					c=185;
					$(document).find(".preButton").text("View Answers");
					$(document).find(".nextButton").text("Wait For Results");
					quizOver = true;
					return false;
					
		}
		
		/*if(c == 0 )
		{	
			if (!quizOver) 
			{
				var val = $("input[type='radio']:checked").val();
            	if (val == questions[currentQuestion].correctAnswer) 
				{
					correctAnswers++;
				}
				currentQuestion++; // Since we have already displayed the first question on DOM ready
				
				if (currentQuestion < questions.length) 
				{
					displayCurrentQuestion();
					c=15;
				} 
				else 
				{
					displayScore();
					$('#timer').html('');
					c=16;
					$(document).find(".nextButton").text("Play Again?");
					quizOver = true;
					return false;
				}
			}
			else 
			{ // quiz is over and clicked the next button (which now displays 'Play Again?'
				quizOver = false;
				$(document).find(".nextButton").text("Next Question");
				resetQuiz();
				displayCurrentQuestion();
				hideScore();
			}		
		}	*/
		c = c - 1;
		t = setTimeout(function()
		{
			timedCount()
		},1000);
	}
	
	
// This displays the current question AND the choices
function displayCurrentQuestion() 
{

	if(c == 185) { c = 180; timedCount(); }
    //console.log("In display current Question");
    var question = questions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQuestion].choices.length;
    // Set the questionClass text to the current question
    $(questionClass).text(question);
    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();
    var choice;
	
	
    for (i = 0; i < numChoices; i++) 
	{
        choice = questions[currentQuestion].choices[i];
		
		if(iSelectedAnswer[currentQuestion] == i) {
			$('<li><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
		} else {
			$('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
		}
    }
}

function resetQuiz()
{
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}

function displayScore()
{
    $(document).find(".quizContainer > .result").text("You scored: " + correctAnswers + " out of: " + questions.length);
    $(document).find(".quizContainer > .result").show();
	document.getElementById("frm1").style.visibility="visible";
	document.getElementById("frm1ip").value=correctAnswers;
    if(correctAnswers==3)
    {
        document.getElementById("message").innerHTML="Congratulations!";
    }
    else
    {
        document.getElementById("message").innerHTML="Diqualified!";
    }
}

function hideScore() 
{
    $(document).find(".result").hide();
}

// This displays the current question AND the choices
function viewResults() 
{

	if(currentQuestion == 10) { currentQuestion = 0;return false; }
	if(viewingAns == 1) { return false; }

	hideScore();
    var question = questions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQuestion].choices.length;
    // Set the questionClass text to the current question
    $(questionClass).text(question);
    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();
    var choice;
	
	
	for (i = 0; i < numChoices; i++) 
	{
        choice = questions[currentQuestion].choices[i];
		
		if(iSelectedAnswer[currentQuestion] == i) {
			if(questions[currentQuestion].correctAnswer == i) {
				$('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
			} else {
				$('<li style="border:2px solid red;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
			}
		} else {
			if(questions[currentQuestion].correctAnswer == i) {
				$('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
			} else {
				$('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
			}
		}
    }
	
	currentQuestion++;
	
	setTimeout(function()
		{
			viewResults();
		},3000);
}

</script>

</body>
  </html>