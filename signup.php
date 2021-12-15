<?php
    include_once 'header.php';
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
	font-size: 35px;
}
</style>

            <section class="signup-form"> <!-- sort out css later-->
                <h2>Sign Up</h2>
                <div class="signup-form-form"> <!-- sort out css later-->
                <form action="includes/signup-inc.php" method="post">
                    <input type="text" name="name" placeholder="Full Name" size="40" class="input-box">
                    <input type="text" name="email" placeholder="Email" size="40" class="input-box">
                    <input type="text" name="uid" placeholder="Username" size="40" class="input-box">
                    <input type="password" name="pwd" placeholder="Password" size="40" class="input-box"> 
                    <input type="password" name="pwdconfirm" placeholder="Confirm Password" size="40" class="input-box">
                    <button type="submit" name="submit" class="input-box"> Sign Up</button>
                </form>
                </div>
                <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo"<p>Fill in all fields</p>";
                    }
                    else if($_GET["error"] == "invaliduid") {
                        echo"<p>Choose a proper username</p>";
                    }
                    else if($_GET["error"] == "invalidemail") {
                        echo"<p>Choose a proper email</p>";
                    }
                    else if($_GET["error"] == "passwordsdontmatch") {
                        echo"<p>Passwords don't match</p>";
                    }
                    else if($_GET["error"] == "stmtfailed") {
                        echo"<p>Something went wrong, try again</p>";
                    }
                    else if($_GET["error"] == "usernametaken") {
                        echo"<p>Username already taken</p>";
                    }
                    else if($_GET["error"] == "none") {
                        echo"<p>Signup successfull</p>";
                    }
                }

                ?>
            </section>


<?php
    include_once 'footer.php';
?>