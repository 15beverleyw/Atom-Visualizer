<?php

if(isset($_POST["submitquest"])){
	$quest = $_POST["question"];
	$diff = $_POST["difficulty"];
	$answer = $_POST["answer"];
	$ans1 = $_POST["ans1"];
	$ans2 = $_POST["ans2"];
	$ans3 = $_POST["ans3"];
	$ans4 = $_POST["ans4"];
	
	require_once'dbh-inc.php';
	require_once'addquestionfunctions-inc.php';
	
	if(emptyInputQuestion($quest,$diff,$answer,$ans1,$ans2,$ans3,$ans4) !== false) {
        header("location:../addquestion.php?error=emptyinput");
        echo "Empty";
        exit("Empty inputs");
    }
	
	if($diff == "1"){
		createQuestDiff1($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4);
	}
	elseif($diff == "2"){
		createQuestDiff2($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4);
	}
	elseif($diff == "3"){
		createQuestDiff3($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4);
	}
	elseif($diff == "4"){
		createQuestDiff4($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4);
	}
	elseif($diff == "5"){
		createQuestDiff5($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4);
	}
	
	
}	
else{
    header("location:../addquestion.php");
}