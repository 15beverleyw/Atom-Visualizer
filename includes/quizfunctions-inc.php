<style>
.signup-form{
	background-color: lightgrey;
	margin: auto;
    width: 60%;
    padding: 10px;
	border-style: inset;
}
.signup-form-form{
	text-align: center;
	margin: auto;
	width: 60%;
	
	
}
.input-box{
		background-color: #fff;
        border: 1px solid #666;
        color: #000;
        padding: 10px 15px;
        text-align: center;
        display: inline-block;
        font-size: 20px;
        margin: 15px;
        cursor: pointer;
		margin: 10px;
		width: 60%;
		border-style: inset;
		text-align: center;
	
}

h2{
	text-align: center;
	font-size: 35px;
}
label {
        background-color: #fff;
        border: 1px solid #666;
        color: #000;
        padding: 10px 15px;
        text-align: center;
        display: inline-block;
        font-size: 20px;
        margin: 15px;
        cursor: pointer;
		margin: 10px;
		width: 60%;
		border-style: inset;
		
      }
</style>
<?php
error_reporting(E_ALL | E_NOTICE); //turn on all errors
ini_set("display_errors","On"); //activate display_error

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "AtomVisAccounts";


$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}



function StartQuiz($conn){
	require_once 'dbh-inc.php';
	$UserDiff = 1;
	$UserLives = 3;
	$QuizPoints = 0;
	GenQuestion($conn,$UserDiff);
	
}


function GenQuestion($conn,$UserDiff){

    if ($UserDiff == 1){
		//Retrieving the contents of the table
		$result = mysqli_query($conn, "SELECT * FROM quizdiff1");

		//Number of rows
		$count = mysqli_num_rows($result);
	} 
	
	
	elseif ($UserDiff == 2){
		//Retrieving the contents of the table
		$result = mysqli_query($conn, "SELECT * FROM quizdiff2");

		//Number of rows
		$count = mysqli_num_rows($result);
	} 
	elseif ($UserDiff == 3){
		//Retrieving the contents of the table
		$result = mysqli_query($conn, "SELECT * FROM quizdiff3");

		//Number of rows
		$count = mysqli_num_rows($result);
	}
	elseif ($UserDiff == 4){
		//Retrieving the contents of the table
		$result = mysqli_query($conn, "SELECT * FROM quizdiff4");

		//Number of rows
		$count = mysqli_num_rows($result);
	}
	elseif ($UserDiff == 5){
		//Retrieving the contents of the table
		$result = mysqli_query($conn, "SELECT * FROM quizdiff5");

		//Number of rows
		$count = mysqli_num_rows($result);
	}
	
	$pickquest = rand(1,$count);
	
	DisplayQuestion($conn,$pickquest,$UserDiff);
}

function QuestionExists($conn,$pickquest,$UserDiff){
	
	if($UserDiff == 1){
		$sql = "SELECT * FROM quizdiff1 WHERE quizId = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			//header("location:../quiz-inc.php?error=stmtfailed");
			exit();
		}

		
		mysqli_stmt_bind_param($stmt, "s",$pickquest);
		mysqli_stmt_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);

		if($row = mysqli_fetch_assoc($resultData)){
			return $row;
		}
		else{
			GenQuestion($conn,$UserDiff);
		}

		mysqli_stmt_close($stmt);
	}
}

function DisplayQuestion($conn,$pickquest,$UserDiff){
	$QuestionExists = QuestionExists($conn,$pickquest,$UserDiff);
	$Question = $QuestionExists["quizQuestion"];
	$ans1 = $QuestionExists["ans1"];
	$ans2 = $QuestionExists["ans2"];
	$ans3 = $QuestionExists["ans3"];
	$ans4 = $QuestionExists["ans4"];
	$CorrectAns = $QuestionExists["quizAnswer"];
	?>
	<section class="signup-form">
		<div class="signup-form-form"> 
		<form method="post">
			<h2><?php echo $Question; ?></h2>
			<input type="radio" id="ans1" name="ans" value="ans1" checked="checked">
			<label for="ans1"><?php echo $ans1; ?></label><br>
			<input type="radio" id="ans2" name="ans" value="ans2">
			<label for="ans2"><?php echo $ans2; ?></label><br>
			<input type="radio" id="ans3" name="ans" value="ans3">
			<label for="ans3"><?php echo $ans3; ?></label><br>
			<input type="radio" id="ans4" name="ans" value="ans4">
			<label for="ans4"><?php echo $ans4; ?></label><br>
			<input type="submit" name="button1"  value = "button" class = "input-box">
		</form>
		</div>
	</section>
	<?php
	
	 if(isset($_POST["ans1"])) {
            echo "This is Button1 that is selected";
        }
	if(isset($_POST["button"])){
		echo("workS");
		CheckAns($CorrectAns);
	}
}

function CheckAns($CorrectAns){
	echo("hehe snusk");
	$ans= $_POST["ans"];
	if($ans == $CorrectAns){
		echo("correct");
	}
}




//need a function to take the amount of rows from a difficulty table and then gnerate a random number that can then be linked to that so that a question can be
//generated randomly within a difficulty. Then, the question and the 4 possible answers need to be displayed by using a question version of UIDExists to return
// all of the values from that row of the question db. they can be mad into inputs using a checkbox and then when a buttomn is pressed, the answer is checked, if it
//is correct, points are added and the question picker is run again (after checking for difficulty) and the new question is displayed. If wrong, minus a life until 0.
// $_SESSION["Question"] = $QuestionExists["quizQuestion"];
// echo"<p> Session: " . $_SESSION["Question"] ."</p>";