
var ballX = 200;
var ballY = 300;
var ballWidth = 75;
var ballColor = color(139, 32, 227);

var speed = 1.00;
var bounceHeight = 225; //in units/pixels.. it took some math to derive this from paraScale
var paraScale = bounceHeight/900; // paraScale was 0.25 (or 225/900, so bounceHeight = 225)
var paraY;
var time = (random(0, 60));

var shadowRBG = 30 + paraY;
var shadowColor = color(min(shadowRBG, 235));

void setup() {
	size(400, 400);
    background(245);
    frameRate(60);
	angleMode = "degrees";
}

void draw() {
    background(235, 235, 235);
// shadow
    shadowRBG = 50 + paraY*0.85;
    if(shadowRBG > 235) {shadowRBG = 235;}
    shadowColor = color(shadowRBG, shadowRBG, shadowRBG);
    fill(shadowColor);
    ellipse(ballX, ballY + ballWidth/2, (ballWidth*6.0-paraY)/7, (ballWidth*6.0-paraY)/21);
// ball
    paraY = -paraScale*time*time + paraScale*time*60;//parabola a = 0.25, family -a(x+0)(x-60) 
    time += speed;
    noStroke();
    fill(ballColor);
    ellipse(ballX, (ballY - paraY), -paraY*0.080+ballWidth, paraY*0.030+ballWidth*0.80);// stretch W & H
// return to the beginning of time...
    if(time>60) {time=0;}
};