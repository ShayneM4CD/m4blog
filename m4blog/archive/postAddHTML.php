<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php") 
?>

<?php include($m4blog."header.php"); ?>

<!-- ▼ ▼ -->

<div class="post" id="postAdd">

	<p class="welcome">
	
		<?php

$_SESSION["pTitle"] = $_POST["pTitle"];

if(isset($_POST["cTitle"]) && $_POST["cTitle"]!="") {
	$_SESSION["cTitle"] = $_POST["cTitle"];
} else {
	$_SESSION["cTitle"] = $_POST["pTitle"];		
}

if(isset($_POST["minute"]) && $_POST["minute"]!="") {
	$_SESSION["year"] = $_POST["year"];
	$_SESSION["month"] = $_POST["month"];
	$_SESSION["day"] = $_POST["day"];

	$_SESSION["hour"] = $_POST["hour"];
	$_SESSION["minute"] = $_POST["minute"];
	$_SESSION["second"] = $_POST["second"];
} else {
	$_SESSION["year"] = date ("Y", time());
	$_SESSION["month"] = date ("m", time());
	$_SESSION["day"] = date ("d", time());

	$_SESSION["hour"] = date ("H", time());
	$_SESSION["minute"] = date ("i", time());
	$_SESSION["second"] = date ("s", time());
}

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

if(isset($_POST["postHTML"]) && $_POST["postHTML"]!="") {
	$myfile = fopen($m4blog."archive/".$_SESSION["year"].$_SESSION["month"].$_SESSION["day"].
	$_SESSION["hour"].$_SESSION["minute"].$_SESSION["second"].".php" , "w") or die("Unable to open file!"); //this will create the file if it doesn't exist
	
	$txt = isset($_POST["postHTML"]) ? $_POST["postHTML"] . "\n" : ''; //this will get the data from selected input

	fwrite($myfile, $txt);
}

if(!mysqli_query($db_con,$db_query)) {
	die('Error: ' . mysqli_errno($db_con));
} else {
	header( 'Location: /m4blog/archive/' ) ;
}
		?>
		
	</p>
	
</div>


<!-- ▲ ▲ -->

<?php include($m4blog."footer.php"); ?>
