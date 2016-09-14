
<!--  ▼  PHP | userAuthSQL  ▼  -->

<?php 

if (isset($_POST['logButton'])) {
	
	$userID = $_POST['userID'];
	$userPW = $_POST['userPW'];
	
	$db_query = mysqli_query($db_con,"SELECT * FROM users WHERE username='" . $userID ."'");
	
	if(mysqli_num_rows($db_query) == 1) {
			
		$record = mysqli_fetch_array($db_query);
		
		if(md5($userPW) == $record['password']) {
			echo '
<script type="text/javascript">
	logMenu1();
	document.getElementById("login").innerHTML="";
	userLogin("'.$userID.'");
</script>
			';
			$_SESSION['user'] = $userID;
			$_SESSION['pass'] = $userPW;
			header('Refresh:1');
		} 
		else {
			echo '
<script type="text/javascript" defer>
	logDeny();
</script>
			';
		}
	}
	else {
		echo '
<script type="text/javascript">
	logDeny();
</script>
		';
	}
}

?>

<!--  ▲  PHP | userAuthSQL  ▲  -->
	
	
<!--// PHP | userAuthPHP1.php \\-->

<?php

if (isset($_POST["logButton1"]) == true) {

	$userID = $_POST["userID1"];
	$mypass = '123456';
	$passcheck = $_POST["userPW1"];
	
	if($passcheck == $mypass && $userID !="") {
		echo '<script>
			document.getElementById("helloUser").innerHTML=
			"Hi, '.$userID.'. Welcome."
			</script>
		';
	} 
	else {
		echo '
			<script>
			document.getElementById("incorrect").innerHTML=
			"Please fill the form out correctly.";
			</script>
		';
	}
}

?>

<!--\\ PHP | userAuthPHP1.php //-->


<!--// PHP | userAuthPHP2.php \\-->

<?php

if (isset($_POST['logButton2'])) {
	
	$userID = $_POST['userID2'];
	$userPW = $_POST['userPW2'];
	$mypass = '123456';
	
	if($userPW == $mypass && $userID !='') {
		echo '
			<script>
			document.getElementById("helloUser2").innerHTML=
			"Hi, '.$userID.'. Welcome."
			</script>
		';
		$_SESSION['user2'] = $userID;
		$_SESSION['pass2'] = $userPW;
	} 
	else {
		echo '
<script type="text/javascript">
	logDeny2();
</script>
		';
	}
}

?>

<!--\\ PHP | userAuthPHP2.php //-->
