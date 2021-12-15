<?php

function emptyInputQuestion($quest,$diff,$answer,$ans1,$ans2,$ans3,$ans4){

    $result;
    if(empty($quest) || (empty($diff)) || (empty($answer)) || (empty($ans1)) || (empty($ans2)) || (empty($ans3)) || (empty($ans4))) {
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}
	
function createQuestDiff1($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4){

    $sql = "INSERT INTO quizdiff1(quizQuestion,quizAnswer,ans1,ans2,ans3,ans4) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../addquestion.php?error=stmtfailed");
        echo"<p> function INSERT INTO fail</p>";
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssss",$quest,$answer,$ans1,$ans2,$ans3,$ans4);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../addquestion.php?error=none");
    echo"<p> function Create question fail</p>";
    exit();
}

function createQuestDiff2($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4){

    $sql = "INSERT INTO quizdiff2(quizQuestion,quizAnswer,ans1,ans2,ans3,ans4) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../addquestion.php?error=stmtfailed");
        echo"<p> function INSERT INTO fail</p>";
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssss",$quest,$answer,$ans1,$ans2,$ans3,$ans4);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../addquestion.php?error=none");
    echo"<p> function Create question fail</p>";
    exit();
}

function createQuestDiff3($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4){

    $sql = "INSERT INTO quizdiff3(quizQuestion,quizAnswer,ans1,ans2,ans3,ans4) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../addquestion.php?error=stmtfailed");
        echo"<p> function INSERT INTO fail</p>";
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssss",$quest,$answer,$ans1,$ans2,$ans3,$ans4);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../addquestion.php?error=none");
    echo"<p> function Create question fail</p>";
    exit();
}

function createQuestDiff4($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4){

    $sql = "INSERT INTO quizdiff4(quizQuestion,quizAnswer,ans1,ans2,ans3,ans4) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../addquestion.php?error=stmtfailed");
        echo"<p> function INSERT INTO fail</p>";
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssss",$quest,$answer,$ans1,$ans2,$ans3,$ans4);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../addquestion.php?error=none");
    echo"<p> function Create question fail</p>";
    exit();
}

function createQuestDiff5($conn,$quest,$answer,$ans1,$ans2,$ans3,$ans4){

    $sql = "INSERT INTO quizdiff5(quizQuestion,quizAnswer,ans1,ans2,ans3,ans4) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../addquestion.php?error=stmtfailed");
        echo"<p> function INSERT INTO fail</p>";
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssss",$quest,$answer,$ans1,$ans2,$ans3,$ans4);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../addquestion.php?error=none");
    echo"<p> function Create question fail</p>";
    exit();
}
?>