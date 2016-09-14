var e = function() {};
e.prototype.draw = function() {};
e.prototype.redraw = function() {};
		function clicked() {
			var x;
			x = document.getElementById('nameCheck').value;
			if (x !="") {
			document.getElementById("para").innerHTML="<strong>Hi, " + x + "! Welcome to my site!</strong>";
				document.getElementById('errorMsg').innerHTML='Name:';
			}
			else {
				document.getElementById('errorMsg').innerHTML='<font color="red">(required) Name:</font>';
			} 
		}
		
		function clicked2() {
				document.getElementById('errorMsg').innerHTML='Name:';
			var x;
			x = prompt('Please enter your name:');
			if (x !="" && x != null) {
				document.getElementById('para').innerHTML="<i>Hi, "+x+"! Welcome to my site!</i>";
			}
			else {
				alert('Please enter your name');
			}
		}
		
		
		function clickedPHP1() {
			var x;
			x = document.getElementById('userID1').value;
			if (x !="") {
			document.getElementById("para").innerHTML="<strong>Hi, " + x + "! Welcome to my site!</strong>";
			}
		}
		
		
		function logFail2() {
			document.getElementById("buttonSpace2").innerHTML=
			'<input id="logButton2" name="logButton2" class="logButton" type="submit" value="Login" />' + 
			'<p id="incorrect">Please fill the form out correctly.</p>';
		}
		
		function logDeny2() {
			document.getElementById("buttonSpace2").innerHTML=
			'<input id="logButton2" name="logButton2" class="logButton" type="submit" value="Login" />' + 
			'<p id="incorrect">Incorrect UserID / Password.</p>';
		}
		
		function clickedPHP2() {
			var x;
			x = document.getElementById('userID2').value;
			var y;
			y = document.getElementById('userPW2').value;
			if (x !="" && y !="") {
				return true;
			}
			else {
				logFail2();
				return false;
			}
		}
		
		
		function logFail() {
			document.getElementById("buttonSpace3").innerHTML=
			'<input id="logButton" name="logButton" class="logButton" type="submit" value="Login" />' + 
			'<p id="incorrect">Please fill the form out correctly.</p>';
		}
		
		function logDeny() {
			document.getElementById("buttonSpace3").innerHTML=
			'<input id="logButton" name="logButton" class="logButton" type="submit" value="Login" />' + 
			'<p id="incorrect">Incorrect Username / Password.</p>';
		}
		
		function clickedSQL() {
			var x;
			x = document.getElementById('userID').value;
			var y;
			y = document.getElementById('userPW').value;
			if (x !="" && y !="") {
				return true;
			}
			else {
				logFail();
				return false;
			}
		}
		
		function logMenu1() {
			document.getElementById("logMenu").innerHTML=
			'<a href="/m4blog/account/">My Account</a><!-- ' + 
			'--><a href="/m4blog/account/logout.php">Logout</a>';
		}
		function logMenu2() {
			document.getElementById("logMenu").innerHTML=
			'<a href="/m4blog/account/signUp.php">Sign Up</a><!-- ' + 
			'--><a href="/m4blog/account/">Login</a>';
		}
		
		function clickedADD() {
			var x;
			x = document.getElementById('addUserID').value;
			var y;
			y = document.getElementById('addUserPW').value;
			if (x !="" && y !="") {
				return true;
			}
			else {
				addFail();
				return false;
			}
		}
		
		function addFail() {
			document.getElementById("buttonSpace4").innerHTML=
			'<input id="addUserButton" name="addUserButton" class="logButton" type="submit" value="Add" />' + 
			'<p id="incorrect">Please fill the form out correctly.</p>';
		}
		
		function addDeny() {
			document.getElementById("buttonSpace4").innerHTML=
			'<input id="addUserButton" name="addUserButton" class="logButton" type="submit" value="Add" />' + 
			'<p id="incorrect">Something went wrong!</p>';
		}
		
		
		function userLogin(userID) {
			var userID = userID;
			document.getElementById("login").innerHTML=
			'<center><p class="welcome">'+userID+' is now Logging in..</p></center>';
		}
		
		function postFail() {
			
		}
		
		function clickedPOST() {
			var pTitle;
			pTitle = document.getElementById('pTitle').value;
			var cTitle;
			cTitle = document.getElementById('cTitle').value;
			var year;
			year = document.getElementById('year').value;
			var month;
			month = document.getElementById('month').value;
			var day;
			day = document.getElementById('day').value;
			var hour;
			hour = document.getElementById('hour').value;
			var minute;
			minute = document.getElementById('minute').value;
			var second;
			second = document.getElementById('second').value;
			if (pTitle !="" && cTitle !="" 
			&& year !="" && month !="" && day !="" 
			&& hour !="" && minute !="") {
				return true;
			}
			else {
				postFail();
				return false;
			}
		}
		
		function clickedHTML() {
			var pTitle;
			pTitle = document.getElementById('pTitle').value;
			var cTitle;
			cTitle = document.getElementById('cTitle').value;
			var year;
			year = document.getElementById('year').value;
			var month;
			month = document.getElementById('month').value;
			var day;
			day = document.getElementById('day').value;
			var hour;
			hour = document.getElementById('hour').value;
			var minute;
			minute = document.getElementById('minute').value;
			var second;
			second = document.getElementById('second').value;
			if (pTitle !="" &&  postHTML !=""
			|| pTitle !=""  && postHTML !="" 
			&& year !="" && month !="" && day !="" 
			&& hour !="" && minute !="") {
				return true;
			}
			else {
				postFail();
				return false;
			}
		}
		
		function clickedEDIT() {
			var postID;
			postID = document.getElementById('postID').value;
			if (postID !="" &&  postHTML !=""
			|| pTitle !=""  && postHTML !="" 
			&& year !="" && month !="" && day !="" 
			&& hour !="" && minute !="") {
				return true;
			}
			else {
				postFail(); //redirect?
				return false;
			}
		}
		
/*        
        // Wait for the page to load first
        window.onload = function() {

          //Get a reference to the link on the page
          // with an id of "mylink"
          var a = document.getElementById("mylink");

          //Set code to run when the link is clicked
          // by assigning a function to "onclick"
          a.onclick = function() {
			document.getElementById('maincontent').innerHTML='';
            // Your code here...

            //If you don't want the link to actually 
            // redirect the browser to another page,
            // "google.com" in our example here, then
            // return false at the end of this block.
            // Note that this also prevents event bubbling,
            // which is probably what we want here, but won't 
            // always be the case.
            return false;
          }
        }
*/
	
/*		window.onload = function(){
			aside = document.getElementById("postContainer");
			//aside.innerHTML="<img src='loadingImage.gif'>";
			var a = document.getElementById("mylink");
			a.onclick = function() {
				if(XMLHttpRequest) var x = new XMLHttpRequest();
				else var x = new ActiveXObject("Microsoft.XMLHTTP");
				x.open("GET", "/m4blog/archive/addPostHTML.php", true);
				x.send();
				x.onreadystatechange = function(){
					if(x.readyState == 4){
						aside.innerHTML = x.responseText;
						return true;
					}
				}
			}
		};
		
*/	
		
		function loadPHP() {
			return true;
		}
		
		
		function loadJS() {
			return true;
		}
		
		
		
		