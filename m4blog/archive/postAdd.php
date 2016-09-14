<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php") 
?>

<?php include($m4blog."header.php"); ?>

<!-- ▼ ▼ -->

<div class="post" id="login">

	<p class="welcome">
	
		<!--/ PHP | Add User to Database \-->
		<?php
		
$_SESSION["cTitle"] = $_POST["cTitle"];
$_SESSION["pTitle"] = $_POST["pTitle"];

$_SESSION["year"] = $_POST["year"];
$_SESSION["month"] = $_POST["month"];
$_SESSION["day"] = $_POST["day"];

$_SESSION["hour"] = $_POST["hour"];
$_SESSION["minute"] = $_POST["minute"];
$_SESSION["second"] = $_POST["second"];

if (isset($_SESSION['cTitle'])) {
			
} // = $_POST['addUserID'];
	$db_query='	
	INSERT INTO 
	postArchive(
		contTitle,
		postTitle,
		year,
		month,
		day,
		hour,
		min,
		sec
	)
	VALUES(
		"'.$_SESSION["cTitle"].'",
		"'.$_SESSION["pTitle"].'",
		"'.$_SESSION["year"].'",
		"'.$_SESSION["month"].'",
		"'.$_SESSION["day"].'",
		"'.$_SESSION["hour"].'",
		"'.$_SESSION["minute"].'",
		"'.$_SESSION["second"].'"
	);
';
	$myfile = fopen($m4blog."archive/".$_POST["year"].$_POST["month"].$_POST["day"].
	$_POST["hour"].$_POST["minute"].$_POST["second"].".php" , "w") or die("Unable to open file!"); //this will create the file if it doesn't exist
	
	$txt = isset($_POST["postHTML"]) ? $_POST["postHTML"] . "\n" : ''; //this will get the data from selected input
	fwrite($myfile, $txt);
	
	if(!mysqli_query($db_con,$db_query)) {
		die('Error: ' . mysqli_errno($db_con));
	} else {
		header( 'Location: /m4blog/archive/' ) ;
	}
		
		?>
					
		<!--\ PHP | Add User to Database /-->

	</p>
	
</div>

<!--php if(isset($_SESSION["user"])) {header("Refresh:1");} ?-->

<!-- ▲ ▲ -->

<?php include($m4blog."footer.php"); ?>
