<?php

$changes_json = <<<JSON
{
	"Barracks": {
		"civb": {
			"Slavs and allies": "Provides +5 population space",
			"Malians": "Cost 149W (-15% bonus)"
		}
	},
	"Archery Range": {
		"civb": {
			"Slavs and allies": "Provides +5 population space",
			"Malians": "Cost 149W (-15% bonus)"
		}
	},
	"Stable": {
		"civb": {
			"Slavs and allies": "Provides +5 population space",
			"Malians": "Cost 149W (-15% bonus)"
		}
	},
	"Siege Workshop": {
		"civb": {
			"Slavs and allies": "Provides +5 population space",
			"Malians": "Cost 170 (-15% bonus)"
		}
	},
	"Dock": {
		"civb": {
			"Vikings and allies": "Cost 128W (-15% cost)",
			"Malians": "Cost 128W (-15% bonus)"
		}
	},
	"House": {
		"cost": "25W",
		"civb": {
			"Incas": "Support 10 population",
			"Malians": "Cost 21W (-15% bonus)"
		}
	},

	"House0": {
		"hp": "550",
		"civb": {
			"Byzantines": "605 HP"
		}
	},
	"House1": {
		"hp": "750",
		"civb": {
			"Byzantines": "900 HP"
		}
	},
	"Lumber Camp": {
		"civb": {
			"Malians": "Cost 85W (-15% bonus)"
		}
	},
	"Lumber Camp0": {
		"hp": "600",
		"civb": {
			"Byzantines": "660 HP"
		}
	},
	"Lumber Camp1": {
		"hp": "800",
		"civb": {
			"Byzantines": "960 HP"
		}
	},
	"Farm": {
		"civb": {
			"Incas and allies": "bt 0:07.5 (-50% bonus)",
			"Malians": "Cost 51W (-15% bonus)"
		}
	},
	"Mill": {
		"civb": {
			"Malians": "Cost 85W (-15% bonus)"
		}
	},
	"Mill0": {
		"hp": "600",
		"civb": {
			"Byzantines": "660 HP"
		}
	},
	"Mill1": {
		"hp": "800",
		"civb": {
			"Byzantines": "960 HP"
		}
	},
	"Mining Camp": {
		"civb": {
			"Malians": "Cost 85W (-15% bonus)"
		}
	},
	"Mining Camp0": {
		"hp": "600",
		"civb": {
			"Byzantines": "660 HP"
		}
	},
	"Mining Camp1": {
		"hp": "800",
		"civb": {
			"Byzantines": "960 HP"
		}
	},
	"Blacksmith1": {
		"hp": "1800",
		"civb": {
			"Byzantines": "2160 HP in Feudal (HP bonus)",
			"Malians": "Cost 128W (-15% bonus)"
		}
	},
	"Market": {
		"civb": {
			"Saracens": "Cost 100W",
			"Malians": "Cost 149W (-15% bonus)"
		}
	},
	"Market1": {
		"hp": "1800",
		"civb": {
			"Byzantines": "2160 HP in Feudal (HP bonus)"
		}
	},
	"Palisade Wall": {
		"bt": "0:06",
		"civb": {
			"Koreans": "build time 0:03.75 (25% faster)",
			"Malians": "Cost 2W (-15% wood bonus no effect)"
		}
	},
	"Stone Wall1": {
		"bt": "0:10",
		"hp": "900",
		"civb": {
			"Byzantines": "1080 HP in Feudal",
			"Koreans": "build time 0:07.5",
			"Incas": "Cost 4S"
		}
	},
	"Gate1": {
		"hp": "1375",
		"GA": "(sometimes gate parallel to the bottom right edge has 0:30 bt)",
		"civb": {
			"Incas": "Cost 26S"
		}
	},
	"Fortified Wall": {
		"bt": "0:11",
		"civb": {
			"Incas": "Cost 4S",
			"Koreans": "build time 0:08.25 (-25% bonus)"
		}
	},
	"Castle": {
		"los": "11",
		"civb": {
			"Koreans": "build time 2:30 (-25% bonus)",
			"Incas": "Cost 553S"
		},
      "GA": "20 units (support 20 population), max 21 arrows, <br /> 1st arrow +2 against spearmen <br /> From 2nd arrow +11 damage vs ships, +11 vs stone defense, +1 damage to camels"
	},
	"Watch Tower": {
		"civb": {
			"Koreans": "BT 1:00 (-25%), +1 RA in Castle Age, +2 RA in Imperial Age",
			"Incas": "Cost 25W 106S",
			"Ethiopians and allies": "+3 LOS",
			"Malians": "Cost 21W 125S (-15% wood bonus)"
		},
        "GA": "garrison 5 units, +2 vs spearmen line, +7 damage vs ships, +1 vs camels, max 5 arrows"
	},
	"Guard Tower": {
		"at": "7",
		"civb": {
			"Koreans": "BT 1:00 (-25%), +1 RA in Castle Age, +2 RA in Imperial Age",
			"Incas": "Cost 25W 106S",
			"Ethiopians and allies": "+3 LOS",
			"Malians": "Cost 21W 125S (-15% wood bonus)"
		},
    	"GA": "garrison 5 units, +2 vs spearmen line, +9 damage vs ships, +1 vs camels, max 5 arrows"
	},
	"Keep": {
		"at": "8",
		"civb": {
			"Koreans": "BT 1:00 (-25%), +2 RA in Imperial Age",
			"Incas": "Cost 25W 106S",
			"Ethiopians and allies": "+3 LOS",
			"Malians": "Cost 21W 125S (-15% wood bonus)"
		},
    	"GA": "garrison 5 units, +2 vs spearmen line, +10 damage vs ships, +1 vs camels, max 5 arrows"
	},
	"Outpost": {
		"cost": "25W 5S",
		"civb": {
			"Koreans": "build time 0:11.25 (-25% bonus)",
			"Incas": "Cost 25W 4S",
			"Ethiopians and allies": "+3 LOS",
			"Malians": "Cost 21W 5S (-15% bonus)"
		}
	},
	"Bombard Tower": {
		"civb": {
			"Koreans": "build time 1:00 (-25% bonus)",
			"Ethiopians and allies": "+3 LOS"
		},
    	"GA": "garrison 5 units, +40 damage vs ships, +1 vs camels, pierce attack"
	},
	"Town Center": {
		"civb": {
			"Chinese": "12 LOS and search radius (+5); Supports 10 population",
			"Teutons": "garrison +10 units (total 25), total amount of arrows +5 (max 16)",
			"Incas": "Cost 275W 85S",
			"Malians": "Cost 234W 100S (-15% wood bonus)"
		},
	    "GA": "15 units (supports 5 population), max 10 arrows <br /> +5 vs all buildings, +5 vs ships, +1 vs camels"
	},
	"Wonder": {
		"civb": {
			"Incas": "Cost 1000WG 850S",
			"Malians": "Cost 850W 1000G 1000S (-15% bonus)"
		}
	},
	"Monastery": {
		"civb": {
			"Malians": "Cost 149W (-15% bonus)"
		}
	},
	"University": {
		"civb": {
			"Malians": "Cost 170W (-15% bonus)"
		}
	},
	"Fish Trap": {
		"bt": "0:40",
		"civb": {
			"Malians": "Cost 85W (-15% bonus)"
		}
	}
}
JSON;

$changes = json_decode($changes_json, true);

$new_structures_json = <<<JSON
[
    {
      "type": "Defensive",
      "name": "Palisade Gate",
      "ver": "f",
      "age": "0",
      "cost": "20W",
      "bt": "0:30",
      "fr": "-",
      "los": "6",
      "hp": "400",
      "ra": "-",
      "at": "-",
      "ar": "2/2",
      "GA": "",
      "civb": {
        "Mayans and allies": "Cost 10W (50% cheaper)",
		"Malians": "Cost 17W (-15% wood bonus)",
		"Malians with mayan ally": " Cost 9W (50% + 15% bonus)"
      },
      "t" : ""
    },
    {
      "type": "Defensive",
      "name": "Stone Wall",
      "ver": "k",
      "age": "2",
      "cost": "5S",
      "bt": "0:10",
      "fr": "-",
      "los": "2",
      "hp": "1800",
      "ra": "-",
      "at": "-",
      "ar": "8/10",
      "GA": "",
      "civb": {
        "Byzantines": "2340 HP in Castle, 2520 HP in Imperial (HP bonus)",
        "Mayans and allies": "Cost 3S (50% cheaper)",
        "Koreans": "Build time 0:07.5",
        "Incas": "Cost 4s"
      },
      "t" : ""
    },{
      "type": "Defensive",
      "name": "Gate",
      "ver": "k",
      "age": "2",
      "cost": "30S",
      "bt": "0:70",
      "fr": "-",
      "los": "6",
      "hp": "2750",
      "ra": "-",
      "at": "-",
      "ar": "10/10",
      "GA": "+1250 HP with Fortified Wall<br />(sometimes gate parallel to the bottom right edge has 0:30 bt)",
      "civb": {
		"Mayans and allies": "Cost 15S (50% cheaper)",
		"Incas": "Cost 26S"
      },
      "t" : ""
    },
    {
      "type": "Buildings",
      "name": "Feitoria",
      "ver": "a",
      "age": "3",
      "cost": "250W 250G",
      "bt": "2:00",
      "fr": "-",
      "los": "6",
      "hp": "5200",
      "ra": "-",
      "at": "-",
      "ar": "3/10",
      "GA": "Takes 20 population<br />Generates 0.7W 0.7F 0.45G 0.45S per second",
      "civb": {},
      "t" : ""
    }
]
JSON;

include_once "lib.php";

$new_structures = json_decode($new_structures_json, true);

$string = file_get_contents("aoc_structures.json");
$json_a = json_decode($string, true);
$availability = csv_to_availability("dlc_matrix.csv");

foreach($json_a['data'] as &$structure) {
	if(array_key_exists($structure['name'], $changes)) {
		$structure = array_replace_recursive($structure, $changes[$structure['name']]);
	}

	if(array_key_exists($structure['name'].$structure['age'], $changes)) {
		$structure = array_replace_recursive($structure, $changes[$structure['name'].$structure['age']]);
	}
}

$json_a['data'] = array_merge($json_a['data'], $new_structures);


foreach($json_a['data'] as &$structure) {
  if(array_key_exists($structure['name'], $availability)) {
    $structure = array_replace($structure, $availability[$structure['name']]);
    $structure['t'] .= " ".join(" ", $structure['avail']);
  }
}

echo json_encode($json_a);
?>
