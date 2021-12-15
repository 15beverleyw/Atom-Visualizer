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

p{
	text-align: center;
	font-size: 35px;
}
</style>

<section class="signup-form">
<div class="signup-form-form">
<?php
    echo"<p> Welcome back " . $_SESSION["useruid"] ."</p>";
	echo"<p> Email: " . $_SESSION["useremail"] ."</p>";
	echo"<p> Points: " . $_SESSION["userpoints"] ."</p>";
?>
</div>
</section>
