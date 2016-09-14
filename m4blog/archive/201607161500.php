
<!--  ▼ ▼  Post 2016-07-16 15:00  ▼ ▼  -->

		<div class="content" id="login">
		
			<!--  ▼  PHP | welcome or login  ▼  -->
			<?php 
				
if(isset($_SESSION['user'])) {
	echo '</center><p class="welcome">Wecome Back, ' . $_SESSION['user'] . '.</p><center>'; 
} 
else {
	echo '
<br />
<form action="/m4blog/account/" method="post" onSubmit="return clickedSQL()">
	<table id="formTable3" class="formTable">
		<tr>
			<td>
				<b id="user">Username: </b>
			</td><td>
				<input type="text" id="userID" name="userID" />
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td><td>
				<input type="password" id="userPW" name="userPW" />
			</td>
		</tr>
		<tr>
			<td colspan="2" id="buttonSpace3">
				<input id="logButton" name="logButton" class="logButton" type="submit" value="Login" />
			</td>
		</tr>
	</table>
</form>
	';
}

		?>
		
			<!--  ▲  PHP | welcome or login  ▲  -->
						
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
	accMenu1();
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
	logDeny3();
</script>
			';
		}
	}
	else {
		echo '
<script type="text/javascript">
	logDeny3();
</script>
		';
	}
}
			?>
			
			<!--  ▲  PHP | userAuthSQL  ▲  -->
	
		</div>
		
<!--  ▲ ▲  Post 2016-07-16 15:00  ▲ ▲  -->
