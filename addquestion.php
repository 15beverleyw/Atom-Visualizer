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
                <h2>Add question</h2>
                <div class="signup-form-form"> <!-- sort out css later-->
                <form action="includes/addquestion-inc.php" method="post">
					<input type="text" name="question" placeholder="Question" size="40" class="input-box">
					<input type="text" name="difficulty" placeholder="Difficulty" size="40" class="input-box">
					<input type="text" name="answer" placeholder="Number Of Correct Answer" size="40" class="input-box">
					<input type="text" name="ans1" placeholder="Answer 1" size="40" class="input-box">
					<input type="text" name="ans2" placeholder="Answer 2" size="40" class="input-box">
					<input type="text" name="ans3" placeholder="Answer 3" size="40" class="input-box">
					<input type="text" name="ans4" placeholder="Answer 4" size="40" class="input-box">
					<button type="submit" name="submitquest" class="input-box"> Add question</button>
				</form>
                </div>
                <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo"<p>Fill in all fields</p>";
                    }
                    else if($_GET["error"] == "stmtfailed") {
                        echo"<p>Something went wrong, try again</p>";
                    }
                    else if($_GET["error"] == "none") {
                        echo"<p>Question added</p>";
                    }
                }

                ?>
            </section>


<?php
    include_once 'footer.php';
?>