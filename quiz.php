<?php
    include_once 'header.php';
	
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "AtomVisAccounts";


$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}
?>


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
	margin: 10px;
	padding:10px;
	width: 60%;
	border-style: inset;
	
}

h2{
	text-align: center;
	font-size: 25px;
}
</style>

            <section class="signup-form"> <!-- sort out css later-->
                <h2>Start quiz</h2>
                <div class="signup-form-form"> <!-- sort out css later-->
				<form action="includes/quiz-inc.php" method="post">
					<button type="submit" name="quizstart" class="input-box" value = "quizstart"> Start quiz</button>
				</form>

<?php
    include_once 'footer.php';
?>