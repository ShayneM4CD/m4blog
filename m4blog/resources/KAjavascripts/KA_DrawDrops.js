
var dropNum = 100;

var xPositions = [];
var yPositions = [];
var colorPanel = [
// the panel (palette) of colors where all new drops are filled from
    color(26, 0, 255),      color(0, 63, 150),
    color(110, 94, 255),    color(10, 0, 145),
    color(0, 128, 255),     color(15, 84, 247),
    color(15, 183, 255),    color(37, 17, 217),
    color(112, 131, 255),   color(0, 69, 207)
];

// position & color for original dropNum # of drops
for(dropNum; dropNum > 0; dropNum--) {
    xPositions.push(random(0,400));
    yPositions.push(random(0,400));
}

var drawDrops = function() {
    background(204, 247, 255);
    for (var i = 0; i < xPositions.length; i++) {
        noStroke();
        fill(colorPanel[i % 10]);
        ellipse(xPositions[i], yPositions[i], 10, 10);
        
        yPositions[i] += 4.5;

        // Randomization - Me trying to learn about using modulus - It's messy, but works, kinda
        yPositions[i%(0.3*i)] += 0.8;
        yPositions[i%(0.6*i)] += 0.4;
        yPositions[i%(0.7*i)] += 1;
        
        // return drops to the top of canvas with some position randomization
        if (yPositions[i] > 405) {
            yPositions[i] = -50 + random(-40, 40);
            xPositions[i] = random(0, 400);
        }
    }
};

void setup() {
	size(400, 400);
    background(245);
    frameRate(60);
	angleMode = "degrees";
}

void draw() {
    drawDrops();
};

// also add a drop wherever the user clicks
void mouseClicked() {
    xPositions.push(mouseX);
    yPositions.push(mouseY);
};

