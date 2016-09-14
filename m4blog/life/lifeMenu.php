
<div class="post" id="lifeMenu">
	<div class="content">
		<center>
			<div class="qDiv"> <!-- First column -->
				<a class="button" href="/m4blog/life/body">Body</a>
				<br />
				<a class="button" href="/m4blog/life/mind">Mind</a>
				<br />
				<a class="button" href="/m4blog/life/social">Social</a>
				<br />
			</div>
			<div class="qDiv"> <!-- Second column -->
				<a class="button" href="/m4blog/life/body/hobbies">Hobbies</a>
				<br />
				<a class="button" href="/m4blog/life/skills">Skills</a>
				<br />
				<a class="button" href="/m4blog/life/goals">Goals</a>
				<br />
			</div>
			<div class="qDiv"> <!-- Third column -->
				<a class="button" href="/m4blog/life/media">Media</a>
				<br />
				<a class="button" href="/m4blog/life/projects">Projects</a>
				<br />
				<a class="button" href="/m4blog/life/portfolio">Portfolio</a>
				<br />
			</div>
			<div class="qDiv"> <!-- Fourth column -->
				<a class="button" href="/m4blog/life/other">Other</a>
				<br />
			</div>
		</center>
	</div>
</div>

<div id="lifeArea">
	
	<?php 
		if(isset($_POST['loadL'])) {
			include($m4blog.$_POST['loadL']);
		} else {}
	?>
	
</div>
