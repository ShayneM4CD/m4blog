
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
		ellipse (this.ballX,this.ballY + this.ballWidth*0.5, 
				(this.ballWidth*6.0-this.paraY)*0.15, 
				(this.ballWidth*6.0-this.paraY)*0.05);
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

var bounceBall = new BounceBall();

void setup() {
	size(400, 400);
    background(245);
    frameRate(60);
}

void draw() {
    bounceBall.draw();
}