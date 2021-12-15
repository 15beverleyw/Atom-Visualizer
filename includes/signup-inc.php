<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdconfirm = $_POST["pwdconfirm"];

    

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    

    if(emptyInputSignup($name,$email,$username,$pwd,$pwdconfirm) !== false) {
        header("location:../signup.php?error=emptyinput");
        echo "Empty";
        exit("Empty inputs");
    }
	
    if(invalidUid($username) !== false) {
        header("location:../signup.php?error=invalidUid");
        echo "Inc Uid";
        exit("Invalid Uid");
    }
    
	

    if(invalidEmail($email) !== false) {
        header("location:../signup.php?error=invalidEmail");
        echo "Inv Email";
        exit("Invalid email");
    }
    

    if(pwdMatch($pwd,$pwdconfirm) !== false) {
        header("location:../signup.php?error=passwordsdontmatch");
        echo "Password match fail";
        exit("Passwords don't match");
    }
    

    if(uidExists($conn, $username,$email) !== false) {
        header("location:../signup.php?error=usernametaken");
        echo "Uname fail";
        exit("Username taken");
    }
    

    echo "<p>Passed</p>";
    createUser($conn,$name,$email,$username,$pwd);

}
else{
    
    header("location:../signup.php");
}