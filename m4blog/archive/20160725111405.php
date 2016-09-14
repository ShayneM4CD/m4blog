				
<div class="content">
	<center> 
		This is the KA / Script attempt causing TypeError e.draw is not a function.
		<br /><br />
		<!--This draws the Canvas on the webpage -->
		<canvas id="mycanvas"></canvas> 
    </center>
 
 <script>
	var sketchProc = function(processingInstance) {
		with (processingInstance) {
        size(400, 400); 
        frameRate(30);
		angleMode = "degrees";

var bgColor = color(128, 128, 128);
var nodeColor = color(119, 0, 255);
var edgeColor = color(255, 255, 255);
var nodeSize = 8.00;

// Create a new Cuboid Object with the co-ords of one node and the H W & D of your cuboid
var createCuboid = function(x, y, z, w, h, d) {
    var nodes = [   [x, y, z],      [x, y, z+d], 
                    [x, y+h, z],    [x, y+h, z+d], 
                    [x+w, y, z],    [x+w, y, z+d],
                    [x+w, y+h, z],  [x+w, y+h, z+d] ];
    var edges = [   [0, 1], [1, 3], [3, 2], [2, 0],
                    [4, 5], [5, 7], [7, 6], [6, 4],
                    [0, 4], [1, 5], [2, 6], [3, 7]  ];
    return {"nodes" : nodes, "edges" : edges};
};

// create a cuboid
var cuboid = createCuboid(-50, -80, -30, 100, 160, 60);
var nodes = cuboid.nodes;
var edges = cuboid.edges;

// Rotation in X Y and Z axis
var rotateX3D = function(theta) {
    var sinTheta = sin(theta);
    var cosTheta = cos(theta);
    for(var n=0; n<nodes.length;n++) {
        var node = nodes[n];
        var y = node[0];
        var z = node[2];
        node[0] = y*cosTheta - z*sinTheta;
        node[2] = z*cosTheta + y*sinTheta;
    }
};
var rotateY3D = function(theta) {
    var sinTheta = sin(theta);
    var cosTheta = cos(theta);
    for(var n=0; n<nodes.length;n++) {
        var node = nodes[n];
        var x = node[1];
        var z = node[2];
        node[1] = x*cosTheta - z*sinTheta;
        node[2] = z*cosTheta + x*sinTheta;
    }
};
var rotateZ3D = function(theta) {
    var sinTheta = sin(theta);
    var cosTheta = cos(theta);
    for(var n=0; n<nodes.length; n++) {
        var node = nodes[n];
        var x = node[0];
        var y = node[1];
        node[0] = x*cosTheta - y*sinTheta;
        node[1] = y*cosTheta + x*sinTheta;
    }
};

// Draw the cuboid
var draw = function() {
    background(bgColor);
    
    //edges
    stroke(edgeColor);
    for(var n=0; n<edges.length; n++) {
        var n0 = edges[n][0];
        var n1 = edges[n][1];
        var node0 = nodes[n0];
        var node1 = nodes[n1];
        line(node0[0], node0[1], node1[0], node1[1]);
    }
    
    //nodes
    fill(nodeColor);
    noStroke();
    for(var n=0; n<nodes.length;n++) {
        var node = nodes[n];
        ellipse(node[0], node[1], nodeSize, nodeSize);
    }
    
};
    translate(200,200);

    rotateX3D(120.0);
    rotateY3D(120.0);
    rotateZ3D(10.0);

// Rotate on mouseDragged in X or Y axis
    var mouseDragged = function() {
        rotateX3D(mouseX/50 - pmouseX/50);
        rotateY3D(mouseY/50 - pmouseY/50);
    };
		
		}
	};

    // Get the canvas that Processing-js will use
    var canvas = document.getElementById("mycanvas"); 
    // Pass the function sketchProc (defined in myCode.js) to Processing's constructor.
    var processingInstance = new Processing(canvas, sketchProc); 
 </script>

	
</div>
			
