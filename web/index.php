<?php
include_once "inc/header.php";
?>

    <script src="js/main.js?<?php echo STATS_VERSION;?>"></script>

	<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#full-toggles" aria-expanded="false">
		        <span class="sr-only">Toggle categories</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" onclick="turnOnAllSections()">AoC Stats</a>
		    </div>
			
	         <div class="collapse navbar-collapse navbar-left" id="full-toggles">
		         <form class="navbar-form navbar-left">
			        <div class="form-group aocversion">
						<select id="aocversion">
							<option value="aoc">The Conquerors</option>
							<option value="dlc">HD DLC (AoFE, AoAK)</option>
						</select>
			        </div>
		        </form>
		        <ul class="nav navbar-nav">
		        	<li onclick="toggleSection(this)" id="units-toggle"><a href="#">Units</a></li>
		        	<li onclick="toggleSection(this)" id="structures-toggle"><a href="#">Structures</a></li>
		        	<li onclick="toggleSection(this)" id="techs-toggle"><a href="#">Technologies</a></li>
		        	<li onclick="toggleSection(this)" id="civs-toggle"><a href="#">Civilizations</a></li>
		        	<li onclick="toggleSection(this)" id="gathers-toggle"><a href="#">Gathering</a></li>
		        </ul>
	        </div>
			<form class="navbar-form navbar-right" role="search">
		        <div class="form-group">
		        	<div class="row">
		        		<div class="col-sm-8 col-xs-9">
							<input type="text" id="global-search" class="form-control" placeholder="Search">
						</div>
						<div class="col-sm-3 col-xs-2">
							<a class="btn btn-disabled" id="compare" role="button" href="compare.php"><i class="fa fa-balance-scale" aria-hidden="true"></i> <span class="badge">0</span>&nbsp;
							<span class="glyphicon glyphicon-remove" id="compare-clear" style="margin-right: -8px"></span></a>
						</div>
					</div>
		        </div>

				<div class="icon-bar"></div>
	      </form>
		</div>
	</nav>
	<!--div id="header" class="header">
		<span class="title"><a onclick="turnOnAllSections()">AoC Stats</a></span>
		<div class="version-switcher">
			<select id="aocversion" class="aocversion">
				<option value="aoc">The Conquerors</option>
				<option value="dlc">HD DLC (AoFE, AoAK)</option>
			</select>
		</div>
		<div class="anchors">
			<a onclick="toggleSection(this)" id="units-toggle">Units</a>
			<a onclick="toggleSection(this)" id="structures-toggle">Structures</a>
			<a onclick="toggleSection(this)" id="techs-toggle">Technologies</a>
			<a onclick="toggleSection(this)" id="civs-toggle">Civilizations</a>
			<a onclick="toggleSection(this)" id="gathers-toggle">Gathering Speeds</a>
		</div>
		<div class="searchbox">
			<span>Search:</span>
			<input type="text" id="global-search" class="global-search"/>

		</div>
	</div-->
	<span class="clear"></span>
	<div id="content" class="container">
		<span class="section">Legend</span>
		<div id="legend" class="container">
			<p>Statistical data for all units, buildings and civilizations for Age of Empires 2. Click rows for extended information.</p>
			<table>
				<tr><td><b>T</b></td><td>type</td></tr>
				<tr><td><b>V</b></td><td>version</td></tr>
				<tr><td><b>W</b></td><td>wood</td></tr>
				<tr><td><b>F</b></td><td>food</td></tr>
				<tr><td><b>G</b></td><td>gold</td></tr>
				<tr><td><b>S</b></td><td>stone</td></tr>
				<tr><td><b>BT</b></td><td>build time - time required to build the unit in game seconds</td></tr>
				<tr><td><b>RT</b></td><td>reload time - the game time in seconds between the end and start of the next attack. When the experimental results were close to the reload time from the data files, I used the theoretical value. In cases such as longboats and chu ko nu, however, where there is a big difference due to multiple arrows, I added a note with the experimental results.</td></tr>
				<tr><td><b>AD</b></td><td>attack delay - game time to release projectile/start attack after the attack command</td></tr>
				<tr><td><b>MR</b></td><td>movement rate - number of tiles per second</td></tr>
				<tr><td><b>LOS</b></td><td>line of sight</td></tr>
				<tr><td><b>HP</b></td><td>hit points</td></tr>
				<tr><td><b>RA</b></td><td>range for units (interval if there is a minimal range, for example 2-5 means minimum range of 2 and maximum range 5</td></tr>
				<tr><td><b>AT</b></td><td>The main damage attack done by the units. Based on the unit type it can be melee or pierce. Extra attacks are listed in the extended info - they are raw bonus attacks against categories (for example janissaries get +2 against rams, but because capped rams have +1 extra ram armor and siege rams +2, janissaries do 2-1-0 against battering, capped and siege rams)</td></tr>
				<tr><td><b>AR</b></td><td>armor in the form melee_armor/pierce_armor. Extra armors are listed in the extended info.</td></tr>
				<tr><td><b>Act</b></td><td>Actions like compare - by clickling the icon you can add the row for comparison. You may have at most 4 rows to compare. To compare them click the icon in the top header.</td></tr>
			</table>
		</div>
		<div id="empty" style="display: none">
			<p>No results...</p>
		</div>
		<div id="units">
		<span class="section">Units</span>
		<table id="unit-stats" class="table table-striped table-hover table-bordered dt-responsive" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Unit type</th>
				<th data-toggle="tooltip" title="Unit type">T</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Age</th>
				<th>Cost</th>
				<th data-toggle="tooltip" title="build time - time required to build the unit in game seconds">BT</th>
				<th data-toggle="tooltip" title="reload time - the game time in seconds between consecutive starts of attack">RT</th>
				<th data-toggle="tooltip" title="attack delay - game time to release projectile/start attack after the attack command">AD</th>
				<th data-toggle="tooltip" title="movement rate (movement speed in tiles)">MR</th>
				<th data-toggle="tooltip" title="line of sight">LOS</th>
				<th data-toggle="tooltip" title="hit points">HP</th>
				<th data-toggle="tooltip" title="attack range in tiles for units with projectile weapons">RA</th>
				<th data-toggle="tooltip" title="The main damage attack done by the units. Based on the unit type it can be melee or pierce.">AT</th>
				<th data-toggle="tooltip" title="melee armor/pierce armor">AR</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Unit type</th>
				<th data-toggle="tooltip" title="Unit type">T</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Age</th>
				<th>Cost</th>
				<th data-toggle="tooltip" title="build time - time required to build the unit in game seconds">BT</th>
				<th data-toggle="tooltip" title="reload time - the game time in seconds between consecutive starts of attack">RT</th>
				<th data-toggle="tooltip" title="attack delay - game time to release projectile/start attack after the attack command">AD</th>
				<th data-toggle="tooltip" title="movement rate (movement speed in tiles)">MR</th>
				<th data-toggle="tooltip" title="line of sight">LOS</th>
				<th data-toggle="tooltip" title="hit points">HP</th>
				<th data-toggle="tooltip" title="attack range in tiles for units with projectile weapons">RA</th>
				<th data-toggle="tooltip" title="The main damage attack done by the units. Based on the unit type it can be melee or pierce.">AT</th>
				<th data-toggle="tooltip" title="melee armor/pierce armor">AR</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</tfoot>
	</table>
	</div>
	<div id="structures">
		<span class="section">Structures</span>
		<table id="structure-stats" class="table table-striped table-hover table-bordered dt-responsive" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Structure type</th>
				<th>&nbsp;&nbsp;</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Age</th>
				<th>Cost</th>
				<th data-toggle="tooltip" title="build time - time required to build the unit in game seconds">BT</th>
				<th data-toggle="tooltip" title="firing rate - the game time in seconds between consecutive starts of attack">RT</th>
				<th data-toggle="tooltip" title="line of sight">LOS</th>
				<th data-toggle="tooltip" title="hit points">HP</th>
				<th data-toggle="tooltip" title="attack range in tiles for arrows">RA</th>
				<th data-toggle="tooltip" title="The main pierce damage dealt by the structure.">AT</th>
				<th data-toggle="tooltip" title="melee armor/pierce armor">AR</th>
				<th>Garrison/Special</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Structure type</th>
				<th>&nbsp;&nbsp;</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Age</th>
				<th>Cost</th>
				<th data-toggle="tooltip" title="build time - time required to build the unit in game seconds">BT</th>
				<th data-toggle="tooltip" title="firing rate - the game time in seconds between consecutive starts of attack">RT</th>
				<th data-toggle="tooltip" title="line of sight">LOS</th>
				<th data-toggle="tooltip" title="hit points">HP</th>
				<th data-toggle="tooltip" title="attack range in tiles for arrows">RA</th>
				<th data-toggle="tooltip" title="The main pierce damage dealt by the structure.">AT</th>
				<th data-toggle="tooltip" title="melee armor/pierce armor">AR</th>
				<th>Garrison/Special</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</tfoot>
	</table>
		</div>
		<div id="techs">
		<span class="section">Technologies</span>
		<table id="technology-stats" class="table table-striped table-hover table-bordered dt-responsive" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Tech type</th>
				<th>&nbsp;&nbsp;</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Age</th>
				<th>Cost</th>
				<th data-toggle="tooltip" title="build time - time required to build the unit in game seconds">BT</th>
				<th>For</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Tech type</th>
				<th>&nbsp;&nbsp;</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Age</th>
				<th>Cost</th>
				<th data-toggle="tooltip" title="build time - time required to build the unit in game seconds">BT</th>
				<th>For</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</tfoot>
	</table>
		</div>
		<div id="civs">
		<span class="section">Civilizations</span>
		<table id="civilization-stats" class="table table-striped table-hover table-bordered dt-responsive" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>&nbsp;&nbsp;</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Type</th>
				<th>Unique Unit</th>
				<th>Unique Techs</th>
				<th>Team Bonus</th>
				<th>Tech Tree</th>
				<th>Civ Bonus</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>&nbsp;&nbsp;</th>
				<th data-toggle="tooltip" title="version when it was added">V</th>
				<th>Name</th>
				<th>Type</th>
				<th>Unique Unit</th>
				<th>Unique Techs</th>
				<th>Team Bonus</th>
				<th>Tech Tree</th>
				<th>Civ Bonus</th>
				<th>Act</th>
				<th>expander</th>
			</tr>
		</tfoot>
	</table>
		</div>
		<div id="gathers">
		<span class="section">Gathering speeds</span>
		<table id="gathering-stats" class="table table-striped table-hover table-bordered dt-responsive" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>&nbsp;&nbsp;</th>
				<th>Type</th>
				<th>Source</th>
				<th>Speed</th>
				<th>Note</th>
				<th>Act</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>&nbsp;&nbsp;</th>
				<th>Type</th>
				<th>Source</th>
				<th>Speed</th>
				<th>Note</th>
				<th>Act</th>
			</tr>
		</tfoot>
	</table>
		</div>
	</div>
	
<?php
include_once "inc/footer.php";
?>