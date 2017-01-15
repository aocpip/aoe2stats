<?php

$changes_json = <<<JSON
{
	"Loom": {
		"civb": {
			"Aztecs": "Not free in DLCs"
		}
	},
	"Cartography": {
		"time": "0:01",
		"cost": "Free to research",
		"civb" : {
			"Chinese": "still free",
			"Portuguese and allies": "Enabled from Dark age"
		}
	},
	"Coinage" : {
		"cost": "200F 100G",
		"time": "1:10",
		"civb": {
			"Chinese": "Cost 180F 90G in Feudal, 170F 85G in Castle, 160F 80G in Imperial Age"
		}
	},
	"Banking" : {
		"cost": "300F 200G",
		"time": "1:10",
		"civb": {
			"Chinese": "Cost 255F 170G in Castle, 240F 160G in Imperial Age"
		}
	},
	"Town Patrol" : {
		"cost": "300F 100G",
		"civb": {
			"Chinese": "Cost 255F 85G in Castle, 240F 80G in Imperial"
		}
	},
	"Heavy Camel": {
		"time": "1:45",
		"civb": {
			"Huns allies": "BT 1:27.5 - Stables work 20% faster"
		}
	},
	"Pikeman": {
		"civb": {
			"Ethiopians": "Free"
		}
	},
	"Halberdier": {
		"civb": {
			"Ethiopians": "Free"
		}
	},
	"Squires": {
		"cost": "100F",
		"civb": {
			"Chinese": "90F in Feudal, 85F in Castle, 80F in Imperial Age"
		}
	},
	"Tracking": {
		"cost": "50F",
		"civb": {
			"Chinese": "45F in Feudal, 43F in Castle, 40F in Imperial Age",
			"Slavs": "free"
		}
	},
	"Fervor": {
		"for": "+15% bonus for monks (fixed from old AoC, where only monks carrying relics were affected)",
		"civb": {
			"Burmese": "Cost *0.5 = 70G"
		}
	},
	"Murder Holes": {
		"cost": "200F 100S",
		"civb": {
			"Chinese": "Cost 170F 85S in Castle, 160F 80S in Imperial Age",
			"Malians and allies": "0:33.3 BT (80% faster)"
		}
	},
	"Chemistry": {
		"extra": {
			"town centers, castles": "+1 pierce damage",
			"mangonel line": "+1 pierce damage. In DLCs projectile speed is the same - 3.5 MR"
		},
		"civb": {
			"Malians and allies": "0:55.5 BT (80% faster)"
		}
	},
	"Yeomen": {
		"age": "2"
	},
	"Furor Celtica": {
		"for": "Celts, Siege Workshop Units HP*1.4 (40% extra HP)"
	},
	"Elite Throwing Axeman": {
		"cost": "1000F 750G"
	},
	"Feudal Age": {
		"civb": {
			"Italians": "Cost 425F  (15% cheaper)",
      		"Ethiopians": "Receive 100F 100G when finished",
			"Khmer": "No buildings required to advance",
			"Malay": "1:05 BT (2x faster)"
		}
	},
	"Castle Age": {
		"civb": {
			"Italians": "Cost 680F 170G (15% cheaper)",
      		"Ethiopians": "Receive 100F 100G when finished",
			"Khmer": "No buildings required to advance",
			"Malay": "1:20 BT (2x faster)"
		}
	},
	"Imperial Age": {
		"civb": {
			"Italians": "Cost 850F 720G  (15% cheaper)",
      		"Ethiopians": "Receive 100F 100G when finished",
			"Khmer": "No buildings required to advance",
			"Malay": "1:35 BT (2x faster)"
		}
	},
	"War Galley": {
		"civb": {
			"Italians": "Cost 115F 50G"
		}	
	},
	"Galleon": {
		"civb": {
			"Italians": "Cost 200F 158G"
		}
	},
	"Cannon Galleon": {
		"civb": {
			"Italians": "Cost 200F 250W"
		}
	},
	"Fast Fire Ship": {
		"civb": {
			"Italians": "Cost 140F 125G"
		}
	},
	"Careening": {
		"civb": {
			"Italians": "Cost 125F 75G"
		}
	},
	"Dry Dock": {
		"civb": {
			"Italians": "Cost 300F 200G"
		}
	},
	"Elite Cannon Galleon": {
		"civb": {
			"Italians": "Cost 263F 250G"
		}
	},
	"Shipwright": {
		"civb": {
			"Italians": "Cost 500F 150G"
		}
	},
	"Forging": {
		"civb": {
			"Magyars": "Cost free (requires blacksmith)"
		}
	},
	"Iron Casting": {
		"civb": {
			"Magyars": "Cost free (requires blacksmith)"
		}
	},
	"Blast Furnace": {
		"civb": {
			"Magyars": "Cost free (requires blacksmith)"
		}
	},
	"Elite Plumed Archer": {
		"cost": "1000W 700F"
	},
	"Bloodlines": {
		"for": "Cavalry, Cavalry Archers, Conquistador, Missionaries +20 hit points"
	},
	"Berserkergang": {
		"cost": "850F 400G"
	},
	"Ballistics": {
		"civb": {
			"Malians and allies": "0:33.3 BT (80% faster)"
		}
	},
	"Guard Tower": {
		"civb": {
			"Malians and allies": "0:16.7 BT (80% faster)"
		}
	},
	"Keep": {
		"civb": {
			"Malians and allies": "0:41.7 BT (80% faster)"
		}
	},
	"Siege Engineers": {
		"civb": {
			"Malian allies": "0:25 BT (80% faster)"
		}
	},
	"Heated Shot": {
		"civb": {
			"Malians and allies": "0:16.7 BT (80% faster)"
		},
		"for": "Towers do 2.25 * attack bonus vs ships<br />Castles do +4 damage against ships"
	},
	"Parthian Tactics": {
		"for": "(Heavy) Cavalry archers, Elephant archers and Mangudai +1/+2 AR<br />(Heavy) Cavalry Archer +4 attack against spearman line <br /> Mangudai and Elephant Archer +2 against spearman line"
	},
	"Treadmill Crane": {
		"civb": {
			"Malians and allies": "0:22.2 BT (80% faster)"
		}
	},
	"Masonry": {
		"civb": {
			"Malians and allies": "0:27.8 BT (80% faster)"
		}
	},
	"Architecture": {
		"civb": {
			"Malians and allies": "0:38.9 BT (80% faster)"
		}
	},
	"Fortified Wall": {
		"civb": {
			"Malians and allies": "0:27.8 BT (80% faster)"
		}
	},
	"Bombard Tower": {
		"civb": {
			"Malian allies": "0:33.3 BT (80% faster)"
		}
	},
	"Gold Mining": {
		"civb": {
			"Malians": "Free"
		}
	},
	"Gold Shaft Mining": {
		"civb": {
			"Malians": "Free"
		}
	},
	"Double-Bit Axe": {
		"civb": {
			"Burmese": "Free"
		}
	},
	"Bow Saw": {
		"civb": {
			"Burmese": "Free"
		}
	},
	"Two-Man Saw": {
		"civb": {
			"Burmese": "Free"
		}
	},
	"Redemption": {
		"civb": {
			"Burmese": "Cost *0.5 = 237.5G"
		}
	},
	"Atonement": {
		"civb": {
			"Burmese": "Cost *0.5 = 162.5G"
		}
	},
	"Herbal Medicine": {
		"civb": {
			"Burmese": "Cost *0.5 = 175G"
		}
	},
	"Sanctity": {
		"civb": {
			"Burmese": "Cost *0.5 = 60G"
		}
	},
	"Faith": {
		"civb": {
			"Burmese": "Cost *0.5 = 375F 500G"
		}
	},
	"Illumination": {
		"civb": {
			"Burmese": "Cost *0.5 = 60G"
		}
	},
	"Block Printing": {
		"civb": {
			"Burmese": "Cost *0.5 = 100G"
		}
	},
	"Theocracy": {
		"civb": {
			"Burmese": "Cost *0.5 = 100G"
		}
	},
	"Conscription": {
		"civb": {
			"Vietnamese": "Free"
		}
	},
	"Elite Skirmisher": {
		"cost": "200W 100G",
		"civb": {
			"Chinese": "170W 85G in Castle, 160W 80G in Imperial Age"
		}
	},
	"Husbandry": {
		"cost": "150F",
		"time": "0:40",
		"civb": {
			"Chinese": "128F in Castle, 120F in Imperial Age",
			"Huns and allies": "BT 0:33.3 - Stables work 20% faster"
		}
	}
}
JSON;

$changes = json_decode($changes_json, true);


$new_technologies_json = <<<JSON
[
	{
		"type": "Unique technologies",
		"name": "Atlatl",
		"ver": "f", 
		"age": "2",
		"cost": "400F 350G",
		"for": "Aztecs skirmisher line +1 pierce attack +1 range +1 search readius",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Warwolf",
		"ver": "f", 
		"age": "3",
		"cost": "500W 250G",
		"for": "Britons trebuchet accuracy 100% and 0.5 blast radius",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Greek Fire",
		"ver": "f", 
		"age": "2",
		"cost": "250F 300G",
		"for": "Byzantines Fire ships +1 range",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Stronghold",
		"ver": "f", 
		"age": "2",
		"cost": "250F 200G",
		"for": "Celts 20% faster reload time. <br />Reload time castles 1.5->1.2; towers 2.0->1.6",
		"time": "0:30", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Great Wall",
		"ver": "f", 
		"age": "2",
		"cost": "400W 200S",
		"for": "Chinese walls, gates, towers HP*1.3",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Chivalry",
		"ver": "f", 
		"age": "2",
		"cost": "400W 400G",
		"for": "Franks stables work rate*1.4",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Marauders",
		"ver": "f", 
		"age": "2",
		"cost": "300W 200G",
		"for": "Huns can make tarkans in stables",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Couriers",
		"ver": "f", 
		"age": "3",
		"cost": "400F 200G",
		"for": "Incan eagles, kamayuks and slingers +1/+2 armor (melee/pierce)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Andean Sling",
		"ver": "f", 
		"age": "2",
		"cost": "200F 300G",
		"for": "Incan skirmishers and slingers no minimum range",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Kamayuk",
		"ver": "f", 
		"age": "3",
		"cost": "900F 500G",
		"for": "Kamayuk",
		"time": "0:45", 
		"t": ""
	},
	{
		"type": "Stable",
		"name": "Imperial Camel",
		"ver": "f", 
		"age": "3",
		"cost": "1200F 600G",
		"for": "Indian Heavy Camel",
		"time": "2:05",
		"civb": {
			"Huns ally": "BT 1:44.2 - Stables work 20% faster"
		},
		"t": ""
	},
	{
		"type": "Barracks",
		"name": "Eagle Warrior",
		"ver": "x", 
		"age": "2",
		"cost": "200F 200G",
		"for": "Eagle Scout",
		"time": "0:50",
		"civb": {
			"Goths allies": "BT 0:41.7 - Barracks work 20% faster"
		},
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Shatagni",
		"ver": "f", 
		"age": "3",
		"cost": "500F 300G",
		"for": "Indian hand cannoneers have +1 range",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Sultans",
		"ver": "f", 
		"age": "2",
		"cost": "400F 400W",
		"for": "Indian gold miners work rate*1.1, trade units generate 10% more G, relics +5G/minute",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Elephant Archer",
		"ver": "f", 
		"age": "3",
		"cost": "1000F 800G",
		"for": "Elephant Archer",
		"time": "1:00", 
		"t": ""
	},
	{
		"type": "Dock",
		"name": "Gillnets",
		"ver": "f", 
		"age": "2",
		"cost": "150F 200W",
		"for": "Fishing ships work 25% faster",
		"time": "0:45",
		"civb": {
			"Chinese": "128F 170W, 120F 160W in Imperial Age",
			"Italians": "Cost 75F 100W",
			"Persians": "Time required 0:39.1 in Castle Age (15% faster docks) and 0:37.5 in Imperial Age (20% faster docks)"
		}, 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Genoese Crossbowman",
		"ver": "f", 
		"age": "3",
		"cost": "900F 750G",
		"for": "Italian Genoese Crossbowman",
		"time": "1:00", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Pavise",
		"ver": "f", 
		"age": "2",
		"cost": "300F 150G",
		"for": "Italian foot archers +1/+1 armor",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Silk Road",
		"ver": "f", 
		"age": "3",
		"cost": "500F 250G",
		"for": "Italian Trade units cost *0.5",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Yasama",
		"ver": "f", 
		"age": "2",
		"cost": "300W 300F",
		"for": "Japan towers shoot more arrows +2 (3 by default, at most 7 if at least 4 units garrisoned)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Panokseon",
		"ver": "f", 
		"age": "2",
		"cost": "300W 300F",
		"for": "Korean turtle ships move 15% faster (MR*1.15 = 0.9 -> 1.035)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Recurve Bow",
		"ver": "f", 
		"age": "3",
		"cost": "600F 400G",
		"for": "Magyar cavalry archers +1 range +1 LOS +1 search radius",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Mercenaries",
		"ver": "f", 
		"age": "2",
		"cost": "300G 200F",
		"for": "Magyar Huszar costs no gold",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Magyar Huszar",
		"ver": "f", 
		"age": "3",
		"cost": "800F 600G",
		"for": "Magyar Huszar",
		"time": "1:00", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Obsidian Arrow",
		"ver": "f", 
		"age": "2",
		"cost": "300F 300G",
		"for": "Mayan archer, crossbowman, arbalest has extra attack +6 standard buildings, +6 stone defense",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Nomads",
		"ver": "f", 
		"age": "2",
		"cost": "300W 150G",
		"for": "Mongols - destroyed houses don't lose their population room",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Boiling Oil",
		"ver": "f", 
		"age": "2",
		"cost": "200W 100S",
		"for": "Persian Castles +9 attack vs rams <br />(effectively +9 against battering, +8 vs capped, +7 vs siege ram)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Madrasah",
		"ver": "f", 
		"age": "2",
		"cost": "200F 100G",
		"for": "Saracen monks return 33% of their cost",
		"time": "0:30", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Orthodoxy",
		"ver": "f", 
		"age": "2",
		"cost": "200F 300G",
		"for": "Slav monks have +3/+3 armor",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Druzhina",
		"ver": "f", 
		"age": "3",
		"cost": "1200F 500G",
		"for": "Slav infantry damage adjecent units. blast radius +0.5, 5 damage (same as cataphracts wih logistica)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Boyar",
		"ver": "f", 
		"age": "3",
		"cost": "1000F 600G",
		"for": "Slavic Boyar",
		"time": "1:00", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Inquisition",
		"ver": "f", 
		"age": "2",
		"cost": "300G 100F",
		"for": "Spanish monks convert faster. <br />(convert time? min/max -1/-1, convert building time? min/max -5/-5, <br />convert building chance +5 (25 -> 30)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Ironclad",
		"ver": "f", 
		"age": "2",
		"cost": "400W 350G",
		"for": "Teutons siege weapons (including packed treb) +4 melee armor",
		"time": "1:00", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Sipahi",
		"ver": "f", 
		"age": "2",
		"cost": "350F 150G",
		"for": "Turkish cavalry archers +20HP",
		"time": "1:00", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Chieftains",
		"ver": "f", 
		"age": "2",
		"cost": "400F 300G",
		"for": "Viking berserks get +5 attack against cavalry and +2 against camels",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Carrack",
		"ver": "a", 
		"age": "2",
		"cost": "200W 300G",
		"for": "Portuguese ships receive +1/+1 armor",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Arquebus",
		"ver": "a", 
		"age": "3",
		"cost": "700F 400G",
		"for": "Portuguese gunpowder units affected by Ballistics<br />Gunpowder projectiles move +0.5 tiles faster <br />(bombard cannons 4 -> 4.5, bombard towers 3 -> 3.5,<br /> hand cannoneer/organ gun 5.5 -> 6.0, (elite) cannon galleon 1.95 -> 2.45)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Dock",
		"name": "Elite Caravel",
		"ver": "a", 
		"age": "3",
		"cost": "750F 475G",
		"for": "Caravel",
		"time": "1:00", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Organ Gun",
		"ver": "a", 
		"age": "3",
		"cost": "1200F 500G",
		"for": "Organ Gun",
		"time": "0:45", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Royal Heirs",
		"ver": "a", 
		"age": "2",
		"cost": "300F 300G",
		"for": "Ethiopian Shotel warriors creation speed halved<br />(0.5*BT means 8*0.5 -> 4 seconds).",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Torsion Engines",
		"ver": "a", 
		"age": "3",
		"cost": "1000F 600G",
		"for": "Ethiopian siege workshop units blast radius increased.<br />(+0.45 blast radius)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Shotel Warrior",
		"ver": "a", 
		"age": "3",
		"cost": "1200F 550G",
		"for": "Shotel warrior",
		"time": "0:45", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Tigui",
		"ver": "a", 
		"age": "2",
		"cost": "300W 200F",
		"for": "Malian Town Centers fire arrows <br /> (+5 arrows without the need to garrison a unit)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Farimba",
		"ver": "a", 
		"age": "3",
		"cost": "650F 400G",
		"for": "Malian cavalry, camels +5 attack.",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Gbeto",
		"ver": "a", 
		"age": "3",
		"cost": "900F 600G",
		"for": "Gbeto",
		"time": "0:45", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Kasbah",
		"ver": "a", 
		"age": "2",
		"cost": "250F 250G",
		"for": "Berber team castles work 25% faster<br />Castles work rate 1.25 -> research and build times -20%",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Maghrabi Camels",
		"ver": "a", 
		"age": "3",
		"cost": "700F 300G",
		"for": "Berber camel troops regenerate.<br /> 1HP every 4 seconds (0.25 HP/s)",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Camel Archer",
		"ver": "a", 
		"age": "3",
		"cost": "1000W 500G",
		"for": "Camel Archer",
		"time": "0:45", 
		"t": ""
	},
	{
		"type": "Archery Range",
		"name": "Elite Genitour",
		"ver": "a", 
		"age": "3",
		"cost": "500F 450W",
		"for": "Genitours for Berbers and allies",
		"time": "1:00",
		"civb": {
			"Chinese with Berber ally": "400F 360W in Imperial Age",
			"Britons and allies with Berber ally": "BT 0:50 - Archery Ranges work 20% faster"
		}, 
		"t": ""
	},
	{
		"type": "Barracks",
		"name": "Arson",
		"ver": "f", 
		"age": "2",
		"cost": "150F 50G",
		"for": "Infantry +2 attack vs standard buildings",
		"time": "0:25",
		"civb": {
			"Chinese": "135F 45G in Feudal, 128F 43G in Castle, 120F 40G in Imperial Age",
			"Goths and allies": "BT 0:20.8 - Barracks work 20% faster"
		}, 
		"t": ""
	},
	{
		"type": "University",
		"name": "Arrowslits",
		"ver": "f", 
		"age": "2",
		"cost": "250W 250F",
		"for": "Watch tower +2 pierce attack,<br />Guard Tower +4 pierce attack,<br />Keep +6 pierce damage",
		"time": "0:25",
		"civb": {
			"Chinese": "Cost 213W 213F in Castle, 200W 200F in Imperial Age"
		}, 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Howdah",
		"ver": "r", 
		"age": "2",
		"cost": "300W 200F",
		"for": "Battle Elephants +1/+2 armor",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Manipur Cavalry",
		"ver": "r", 
		"age": "3",
		"cost": "650F 400G",
		"for": "Cavalry and Arambai deal +6 bonus attack vs buildings",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Arambai",
		"ver": "r", 
		"age": "3",
		"cost": "1100F 675G",
		"for": "Arambai",
		"time": "1:05", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Tusk Swords",
		"ver": "r", 
		"age": "2",
		"cost": "200W 300G",
		"for": "Battle Elephants +3 attack",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Double Crossbow",
		"ver": "r", 
		"age": "3",
		"cost": "700F 400G",
		"for": "Ballista Elephants and Scorpions fire two projectiles.",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Ballista Elephant",
		"ver": "r", 
		"age": "3",
		"cost": "1000F 500G",
		"for": "Ballista Elephant",
		"time": "1:10", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Thalassocracy",
		"ver": "r", 
		"age": "2",
		"cost": "300F 300G",
		"for": "Upgrades your Docks to Harbors, which fire arrows.",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Forced Levy",
		"ver": "r", 
		"age": "3",
		"cost": "1000F 600G",
		"for": "Militia-line units no longer cost Gold",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Karambit Warrior",
		"ver": "r", 
		"age": "3",
		"cost": "900F 600G",
		"for": "Karambit Warrior",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Chatras",
		"ver": "r", 
		"age": "2",
		"cost": "250F 250G",
		"for": "Battle Elephants receive +30 HP",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique technologies",
		"name": "Paper Money",
		"ver": "r", 
		"age": "3",
		"cost": "800F 200G",
		"for": "You and all your allies receive +500 Gold",
		"time": "0:40", 
		"t": ""
	},
	{
		"type": "Unique units",
		"name": "Elite Rattan Archer",
		"ver": "r", 
		"age": "3",
		"cost": "1000F 750G",
		"for": "Rattan Archer",
		"time": "0:45", 
		"t": ""
	}, 
	{
		"type": "Archery Range",
		"name": "Imperial Skirmisher",
		"ver": "r", 
		"age": "3",
		"cost": "300F 450G",
		"for": "Elite Skirmisher",
		"time": "0:50",
		"civb": {
			"Chinese with Vietnamese ally": "240F 360G",
			"Britons and allies with Vietnamese ally": "BT 0:41.7 - Archery Ranges work 20% faster"
		}, 
		"t": ""
	}, 
	{
		"type": "Stable",
		"name": "Elite Battle Elephant",
		"ver": "r", 
		"age": "3",
		"cost": "800F 500G",
		"for": "Battle Elephant",
		"time": "1:20",
		"civb": {
			"Huns allies": "BT 1:06.7 - Stables work 20% faster"
		},
		"t": ""
	}
]
JSON;

include_once "lib.php";

$new_technologies = json_decode($new_technologies_json, true);

$file_string = file_get_contents("aoc_technologies.json");
$json_a = json_decode($file_string, true);
$availability = csv_to_availability("dlc_matrix.csv");

foreach($json_a['data'] as &$technology) {
	if(array_key_exists($technology['name'], $changes)) {
		$technology = array_replace_recursive($technology, $changes[$technology['name']]);
	} 
}

$json_a['data'] = array_merge($json_a['data'], $new_technologies);


foreach($json_a['data'] as &$tech) {
  if(array_key_exists($tech['name'], $availability)) {
    $tech = array_replace($tech, $availability[$tech['name']]);
    $tech['t'] .= " ".join(" ", $tech['avail']);
  }
}

echo json_encode($json_a);
?>