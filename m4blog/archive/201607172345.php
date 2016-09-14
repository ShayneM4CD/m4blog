
<div class="content">
	
	<b>Just a list of random skeleton commands & stuff :</b>
	
	<ul class="codeFont">
		<li>CREATE TABLE users(id int NOT NULL AUTO_INCREMENT,username varchar(20),password varchar(100), PRIMARY KEY(id));</li>
		<li>INSERT INTO users(username,password) VALUES("",md5(""));</li>
		<li>UPDATE users SET username="",password=md5("") WHERE id=#</li>
		<li>$db_query='INSERT INTO users(username,password) VALUES("'.$_SESSION["addUserID"].'",md5("'.$_SESSION["addUserPW"].'"))';</li>
	</ul>
	
	<br />
	
	<b>Pseudo Code | Loop through all posts :</b>
	
	<blockquote class="codeFont">
	
		<pre>
for($db_archive.length) {
    if ($db_archive.length == 0) {
	echo '
	    ◄script►noResult();◄/script►
	';
    }
    else if ($db_archive.length == 1) {
	header('Location: $db_archive[0]');
    }
    else {
	echo '
	    ◄script►
		for(a=0;a◄'.$db_archive.length.';a++) {
		    document.getElementById("main").innerHTML += 
			'◄a href="' . $db_archive QUERY["a"] . '.php"►; 
			' . $db_archive QUERY["a"] . '◄/a►'
		}
	    ◄/script►
	'
    }
}
		</pre>
		
	</blockquote>
	
</div>
