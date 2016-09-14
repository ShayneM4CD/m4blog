
angleMode = "degrees";

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

var cuboid = new Cuboid3D(-50, -80, -30, 100, 160, 60);

void setup() {
	
	size(400, 400);
    background(245);
    frameRate(60);
	angleMode = "degrees";
	
	cuboid.rotateX3D(20);
	cuboid.rotateY3D(20);
	cuboid.rotateZ3D(20);

}

void draw() {
	cuboid.draw();
};