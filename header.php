<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
    </head>
	
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  font-size: 25px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
    <body>

        <nav>
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php
                        if(isset($_SESSION["useruid"]) and $_SESSION["useruid"] != "Admin" and $_SESSION["useruid"] != "AtomVisAdmin" ){
                            echo"<li><a href='profile.php'>Profile Page</a></li>";
                            echo"<li><a href='includes/logout-inc.php'>Log out</a></li>";
							echo"<li><a href='quiz.php'>Quiz</a></li>";
                        }
						elseif(isset($_SESSION["useruid"]) and $_SESSION["useruid"] == "Admin" || $_SESSION["useruid"] == "Admin"){
							echo"<li><a href='profile.php'>Profile Page</a></li>";
                            echo"<li><a href='includes/logout-inc.php'>Log out</a></li>";
							echo"<li><a href='addquestion.php'>Add questions</a></li>";
							echo"<li><a href='quiz.php'>Quiz</a></li>";
						}
                        else{
                            echo"<li><a href='signup.php'>Sign Up</a></li>";
                            echo"<li><a href='login.php'>Log in</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

        <div class="wrapper">