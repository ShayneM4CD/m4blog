void setup() {
	size(400, 400);
    background(245);
    frameRate(30);
}
background(color(0,0,0))
/* Global Variables */

var scrX = width*0.1;
var scrY = height*0.1;

var app;
var icon;


/** Apps **/
	
	/* BounceBall */
	
	var BounceBall = function() {
		this.ballX = 200;
		this.ballY = 300;
		this.ballWidth = 65;
		this.ballColor = color(139, 32, 227);
		
		this.speed = 1.00;
		this.bounceHeight = 225;
		this.paraScale = this.bounceHeight/900;
		this.paraY = 0;
		this.time = 30;
		
		this.shadowRBG = 30 + this.paraY;
		this.shadowColor = color(min(this.shadowRBG, 235));
	};
	
	BounceBall.prototype.draw = function() {
			strokeWeight(width*0.005);
			fill(235, 235, 235);
			rect(width*0, height*0, width, height);
		// shadow
			noStroke();
			this.shadowRBG = 50 + this.paraY*0.85;
			if(this.shadowRBG > 235) {this.shadowRBG = 235;}
			this.shadowColor = color(this.shadowRBG, this.shadowRBG, this.shadowRBG);
			fill(this.shadowColor);
			ellipse( this.ballX,                           this.ballY + this.ballWidth*0.5, 
					(this.ballWidth*6.0-this.paraY)*0.15, (this.ballWidth*6.0-this.paraY)*0.05);
		// ball
			this.paraY = -this.paraScale*this.time*this.time + this.paraScale*this.time*60;
			this.time += this.speed;
			this.ballX += this.speed*1.5;
			noStroke();
			fill(this.ballColor);
			ellipse(this.ballX,                      this.ballY - this.paraY, 
					this.ballWidth-this.paraY*0.080, this.ballWidth*0.80+this.paraY*0.030);
		// return to the beginning of time...
			if(this.time>60) {this.speed=-this.speed;}
			if(this.time<0)  {this.speed=-this.speed;}
		};
	
	BounceBall.prototype.icon = getImage("http://localhost/m4blog/resources/images/BallImage.png");
	
	var bounceBall = new BounceBall();

	/* 3D Cuboid */
	 
	var Cuboid3D = function(x, y, z, w, h, d) {
		this.bgColor = color(128, 128, 128);
		this.nodeColor = color(119, 0, 255);
		this.edgeColor = color(255, 255, 255);
		this.nodeSize = 8.00;
		this.nodes = [   [x, y, z],      [x, y, z+d], 
							[x, y+h, z],    [x, y+h, z+d], 
							[x+w, y, z],    [x+w, y, z+d],
							[x+w, y+h, z],  [x+w, y+h, z+d] ];
		this.edges = [   [0, 1], [1, 3], [3, 2], [2, 0],
							[4, 5], [5, 7], [7, 6], [6, 4],
							[0, 4], [1, 5], [2, 6], [3, 7]  ];
			return {"nodes" : this.nodes, "edges" : this.edges};
		};
	
	Cuboid3D.prototype.rotateX3D = function(theta) {
			var sinTheta = sin(theta);
			var cosTheta = cos(theta);
			for(var n=0; n<this.nodes.length;n++) {
				var node = this.nodes[n];
				var y = node[0];
				var z = node[2];
				node[0] = y*cosTheta - z*sinTheta;
				node[2] = z*cosTheta + y*sinTheta;
			}
	};
	Cuboid3D.prototype.rotateY3D = function(theta) {
			var sinTheta = sin(theta);
			var cosTheta = cos(theta);
			for(var n=0; n<this.nodes.length;n++) {
				var node = this.nodes[n];
				var x = node[1];
				var z = node[2];
				node[1] = x*cosTheta - z*sinTheta;
				node[2] = z*cosTheta + x*sinTheta;
			}
	};
	Cuboid3D.prototype.rotateZ3D = function(theta) {
			var sinTheta = sin(theta);
			var cosTheta = cos(theta);
			for(var n=0; n<this.nodes.length; n++) {
				var node = this.nodes[n];
				var x = node[0];
				var y = node[1];
				node[0] = x*cosTheta - y*sinTheta;
				node[1] = y*cosTheta + x*sinTheta;
			}
	};
	
	Cuboid3D.prototype.draw = function() {
		
		fill(this.bgColor);
		rect(width*0, height*0, width, height);
		
		translate(200,200);
	
	 /* Edges */
		stroke(this.edgeColor);
		for(var n=0; n<this.edges.length; n++) {
			var n0 = this.edges[n][0];
			var n1 = this.edges[n][1];
			var node0 = this.nodes[n0];
			var node1 = this.nodes[n1];
			line(node0[0], node0[1], node1[0], node1[1]);
		}
	
	 /* Nodes */
		fill(this.nodeColor);
		noStroke();
		for(var n=0; n<this.nodes.length;n++) {
			var node = this.nodes[n];
			ellipse(node[0], node[1], this.nodeSize, this.nodeSize);
		}
	
 };
	
	Cuboid3D.prototype.icon = getImage("http://localhost/m4blog/resources/images/CuboidImage.png");
	
	var cuboid = new Cuboid3D(-50, -80, -30, 100, 160, 60);
	cuboid.rotateX3D(20);
	cuboid.rotateY3D(20);
	cuboid.rotateZ3D(20);

	/* Rocket Power */
	
	var Rocket = function() {
		this.rY = 13/20*height;
		this.speed = 2.0;
	};
	
	Rocket.prototype.draw = function() {
		
		noStroke();
		fill(255, 255, 255);
		rect(0, 0, width, height);
		
		fill(mouseX/3, mouseY/3, mouseX/mouseY*30);
		textAlign(CENTER, CENTER);
		textSize(40);
		text("ROCKET POWER", width/2, height/8);
		textSize(mouseY/6);
		text("Totally Amazeballs!", width/2, height/4.5);
		
		fill(255, 0, 0);
		triangle(178/400*width, this.rY, 222/400*width, this.rY, 200/400*width, this.rY-height/8);
		fill(224, 224, 224);
		rect(9/20*width, this.rY, 1/10*width, 113/400*height);
		fill(255, 132, 0);
		triangle(9/20*width, this.rY + 1/4*height, 11/20*width, this.rY + 1/4*height, 9/20*width, this.rY + 7/20*height);
		triangle(9/20*width, this.rY + 1/4*height, 11/20*width, this.rY + 1/4*height, 11/20*width, this.rY + 7/20*height);
		fill(255, 234, 0);
		triangle(187, this.rY + 100, 213, this.rY + 100, 200, this.rY+150);
		
		this.rY = this.rY - this.speed;
	};
	
	Rocket.prototype.icon = getImage("http://localhost/m4blog/resources/images/RocketImage.png");
	
	var rocket = new Rocket();

	/** None **/
	var None = function() {};
	None.prototype.draw = function() {};
	None.prototype.icon = getImage("http://localhost/m4blog/resources/images/UnknownImage.png");
	var none = new None();

	/** Home | App Launcher **/
	
	var apps = [bounceBall, cuboid, rocket, none];
  
	var Home = function () {
	this.bgColor = color(0, 0, 0);
	this.iconNum = 3;
	this.iconW = 1/this.iconNum*width;
	
	};
	
	Home.prototype.icon = getImage("http://localhost/m4blog/resources/images/HomeImage.png");
	 
	Home.prototype.draw = function() {
		fill(this.bgColor);
		rect(0,0,width,height);
		
		for(var r = 0; r < apps.length; r++) {
			for(var s = 0; s < apps.length; s++) {
				if(s === floor(r/this.iconNum)) {
					icon = apps[r].icon;
					fill(131, 129, 161);
					rect(r*this.iconW - width*s, s*this.iconW, this.iconW, this.iconW);
					image(icon, r*this.iconW - width*s, s*this.iconW, this.iconW, this.iconW);
				}
			}
		}
	};
	
	var home = new Home();
	var iconW = home.iconW;
	app = home;


/* Layout */

	/* Clock */

	var clockZeros = function(num) {
		var x;
		var ghostString = "";
		if(1 > num/10) {
			x = 0;
		} else {
			x = ghostString;
		}
		return x + ghostString + num;
	};

	/* Buttons */

	var Button = function(buttonX, buttonY, label, nextScreen) {
		this.x = buttonX;
		this.y = buttonY;
		this.label = label;
		this.nextScreen = nextScreen;
		this.width = 0.1*width;
	};

	Button.prototype.menu = function() {
	};

	Button.prototype.draw = function() {
			fill(255, 255, 255);
			rect(this.x,this.y,this.width,this.width);
		if (this.label === "menu") {
			//println("Yup");
		}
	};
	
	var menuButton = new Button(0, scrY*9, "menu", home);
	var backButton = new Button(scrX*9, scrY*9, "back", home);


/** User Input Functions **/

var mouseClicked = function() {

	/* Rocket Power */
	if(app === rocket){
		rocket.rY = 260;
	}
	
	/* App Launcher */
	if(app === home){
		for(var r = 0; r < apps.length; r++) {
			for(var s = 0; s < apps.length; s++) {
				if(s === floor(r/home.iconNum)) {
					
					pushMatrix();
					
					translate(scrX, scrY);
					scale(0.80);
					
					if(mouseX > r*home.iconW - width*s &&
					 mouseX < r*home.iconW - width*s + home.iconW && 
					 mouseY > s*home.iconW && 
					 mouseY < s*home.iconW + home.iconW
					 ){
						app = apps[r];
					}
					popMatrix();
				}
			}
		}
	}
	
	/* Back & Menu Buttons */

	if(mouseX > 9/10*width ||
	   mouseX < 1/10*width &&
	   mouseY > 9/10*height
	  ){
		app = home;
	}
	
};

var mouseDragged = function() {
	
	/* Cuboid3D */
	
		if(app === cuboid) {
			cuboid.rotateX3D(mouseX - pmouseX);
			cuboid.rotateY3D(mouseY - pmouseY);
		}
};


/** Draw Function **/

void draw() {


 /** Layout **/

	/* Background */
	strokeWeight(width*0.005);
	stroke(0, 0, 0);
	fill(76, 80, 122);
	rect(width*0, height*0, width, height);

	/* Phone Screen**/
	strokeWeight(width*0.005);
	stroke(0, 0, 0);
	fill(0, 0, 0);
	rect(width*0.1, height*0.0, width*0.8, height*0.1); // top bar
	fill(255, 255, 255);
	rect(width*0.1, height*0.1, width*0.8, height*0.9); // body area

	/** Buttons **/
	menuButton.draw();
	backButton.draw();
	
	/* Clock */
	fill(255,255,255);
	textFont(createFont("monospace"), width*0.05);
	textAlign(CENTER, CENTER);
	text(clockZeros(hour()) + ":" + clockZeros(minute()), width*0.8, height*0.05);


 /** Display App **/
 
	strokeWeight(width*0.005);
	fill(76, 80, 122);
	rect(width*0.1, height*0.9, width*0.8, height*0.1); // covers icons below, under app
	
	pushMatrix();
	translate(scrX, scrY);
	scale(0.80);
	app.draw();
	popMatrix();

};





 /** Now what?
 * more apps - enough to require scrolling
 * calc, graphic, hoppy beaver, Snake, Visualizer, rain, fishtank, animal, Seizure Sauce, 8-ball, Card-Match
 * Individualize the Buttons
 * Make unique icons
 * Glowing Icons & menu/back Buttons onHover
 **/
