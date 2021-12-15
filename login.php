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
                <h2>Log in</h2>
                <div class="signup-form-form"> <!-- sort out css later-->
                <form action="includes/login-inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username/Email" size="40" class="input-box">
                    <input type="password" name="pwd" placeholder="Password" size="40" class="input-box"> 
                    <button type="submit" name="submit" class="input-box">Log in</button>
                </form>
                </div>
                <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo"<p>Fill in all fields</p>";
                    }
                    else if($_GET["error"] == "wronglogin") {
                        echo"<p>Incorrect login information</p>";
                    }
                }

                ?>
            </section>

            

<?php
    include_once 'footer.php';
?>