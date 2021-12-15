<?php
require_once 'dbh-inc.php';
require_once 'quizfunctions-inc.php';

if(isset($_POST["quizstart"])){
	
	require_once 'dbh-inc.php';
	
	
	StartQuiz($conn);
    $points = "SELECT userspoints FROM users WHERE usersUid = ? OR usersEmail= ?;";
}