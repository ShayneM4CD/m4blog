
var rY = 260;
var speed = 3.0;
noStroke();

void setup() {
	size(400, 400);
    background(245);
    frameRate(60);
}

void draw() {
    background(255, 255, 255);
    fill(mouseX/3, mouseY/3, mouseX/mouseY*30);
    textAlign(CENTER, CENTER);
    textSize(40);
    text("ROCKET POWER", 200, 49);
    textSize(mouseY/6);
    text("Totally Amazeballs!", 200, 87);
    fill(224, 224, 224);
    rect(180, rY, 40, 113);
    fill(255, 0, 0);
    triangle(178, rY, 222, rY, 200, rY-50);
    fill(255, 132, 0);
    triangle(180, rY + 100, 220, rY + 100, 180, rY+140);
    triangle(180, rY + 100, 220, rY + 100, 220, rY+140);
    fill(255, 234, 0);
    triangle(187, rY + 100, 213, rY + 100, 200, rY+150);
    
    rY = rY - speed;
	
};

mouseClicked = function() {
	rY = 260;
};
    