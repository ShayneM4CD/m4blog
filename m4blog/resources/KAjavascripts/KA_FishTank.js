
	var centerX = 200;
	var centerY = 100;
	var bodyLength = 118;
	var bodyHeight = 74;

	var fishy = function(centerX, centerY, bodyLength, bodyHeight, tailW, tailH) {
		
		var bodyColor = color(random(0,255), random(0,255), random(0,255));
		var tailColor = bodyColor/3;
		
		noStroke();
		fill(bodyColor);
		// body
		ellipse(centerX, centerY, bodyLength, bodyHeight);
		// tail
		fill(tailColor);
		var tailWidth = bodyLength/tailW;
		var tailHeight = bodyHeight/tailH;
		triangle(centerX-bodyLength/2, centerY,
				 centerX-bodyLength/2-tailWidth, centerY-tailHeight,
				 centerX-bodyLength/2-tailWidth, centerY+tailHeight);
		// eye
		fill(33, 33, 33);
		ellipse(centerX+bodyLength/4, centerY, bodyHeight/random(5,10), bodyHeight/random(5,10));

	};					 

void setup() {
	size(400, 400);
    background(245);
    frameRate(60);
	angleMode = "degrees";

	background(89, 216, 255);

	fishy(300, 200, 40, 20, 2, 2);
	fishy(240, 80, 60, 45, 3, 2.5);
	fishy(200, 200, 50, 30, 4, 2.5);
	fishy(90, 80, 60, 35, 7, 4.3);
	
}

void draw() {
};

void mouseClicked() {
    fishy(mouseX, mouseY, random(30, 70), random(15, 50), random(2, 3), random(2, 3));
};