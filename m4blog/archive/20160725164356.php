				
<div class="content">
	
	<center>
		<div id="jsMenu">
			<br />
			<form action="#post20160725164356" method="POST"><!--
			
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_RocketPower.js">RocketPower</button><!--
			
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_Cuboid3D.js">Cuboid3D</button><!--
			
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_BounceBall.js">BounceBall</button><!--
					
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_DrawDrops.js">Draw Drops</button><!--
			
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_CuboidObject.js">Cuboid Object</button><!--
			
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_BounceBallObject.js">BounceBall Obj</button><!--
					
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_FishTank.js">Fish Tank</button><!--
			
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_Empty.js">Empty</button><!--
			
				--><button type="submit" class="button" id="loadJS" name="loadJS" 
					value="resources/KAjavascripts/KA_Empty.js">Empty</button>
			</form>
		</div>
	</center>
	
	<br />
	<center>

			<?php 
				if(isset($_POST['loadJS'])) {
					echo 'http://localhost/m4blog/'.$_POST['loadJS'];
				}
			?>
		<br /><br />
		<canvas width="400" height="400" data-processing-sources="
			<?php 
				if(isset($_POST['loadJS'])) {
					echo 'http://localhost/m4blog/'.$_POST['loadJS'];
				} else {
					echo 'http://localhost/m4blog/resources/KAjavascripts/KA_FishTank.js
					'
				;}
			?>
		">
		</canvas>

	</center>
	
</div>
			
