<?php

$changes_json = <<<JSON
{
  "Wild Boar": {
    "note": "Wild boar. In forgotten does extra damage to scouts and eagles.",
    "extra": {
      "attack bonus": "+4 against eagles, +3 against cavalry"
    }
  },
	"Fire Ship" : {
		"hp": "120",
    "ar": "0/7",
    "extra": {
      "attack bonus": "+2 buildings, +3 ships, +2 turtle ships, +1 melee",
      "armor bonus": "+6 ships"
    },
    "civb": {
      "Portuguese": "Cost 75W 38G (-15% gold cost) <br /> 132 HP (+10% bonus)",
      "Berbers": "1.485 movement rate (10% faster)"
    }
	},
	"Fast Fire Ship" : {
		"hp": "140",
    "ar": "0/9",
    "extra": {
      "attack bonus": "+3 buildings, +4 ships, +3 turtle ships, +1 melee",
      "armor bonus": "+9 ships"
    },
    "civb": {
      "Berbers": "1.573 movement rate (10% faster)"
    }
	},
	"Demolition Ship" : {
		"hp": "60",
		"civb": {
			"Chinese": "90 HP (+50% HP)",
			"Vikings": "Cost 60W 43G (-15% bonus) in Castle, 56W 40G (-20% bonus) in Imperial Age",
      "Portuguese": "Cost 70W 43G (-15% gold cost) <br /> 66 HP (+10% bonus)",
      "Berbers": "1.76 movement rate (10% faster)"
		},
    "extra": {
      "armor bonus": "+3 ships"
    }
	},
	"Heavy Demolition Ship" : {
		"hp": "70",
		"civb": {
			"Chinese": "105 HP (+50% HP)",
      "Portuguese": "66 HP (+10% bonus)<br />Cost 70W 43G (-15% gold cost)",
      "Berbers": "1.76 movement rate (10% faster)"
		},
    "extra": {
      "armor bonus": "+5 ships"
    }
	},
	"Turtle Ship": {
		"cost": "180W 180G",
      "civb": {
        "with Turkish ally": "0:40 BT (-20% team bonus)"
      }
	},
	"Elite Turtle Ship": {
		"cost": "180W 180G",
      "civb": {
        "with Turkish ally": "0:40 BT (-20% team bonus)"
      }
	},
	"Spearman": {
		"extra": {
			"attack bonus": "+1 eagles, +1 buildings, +15 war elephants, +15 cavalry, +9 camels, +9 vs ships"
		},
    "civb": {
      "Malians": "+1 PA/age -> (1 in Feudal, 2 in Castle and 3 in Imperial Age)",
      "Burmese": "+1 AT/Age"
    }
	},
	"Pikeman": {
		"extra": {
			"attack bonus": "+1 eagles, +1 buildings, +25 war elephants, +22 cavalry, +16 camels, +16 ships"
		},
    "civb": {
      "Malians": "+1 PA/age -> (1 in Feudal, 2 in Castle and 3 in Imperial Age)",
      "Burmese": "+1 AT/Age"
    }
	},
	"Halberdier": {
		"extra": {
			"attack bonus": "+1 eagles, +1 buildings, +28 war elephants, +32 cavalry, +17 camels, +17 vs ships"
		},
    "civb": {
      "Malians": "+1 PA/age -> (1 in Feudal, 2 in Castle and 3 in Imperial Age)",
      "Burmese": "+1 AT/Age"
    }
	},
  "Militia": {
    "civb": {
      "Portuguese": "Cost 60F 17G (-15% gold cost)",
      "Malians": "+1 PA/age -> (2 in Feudal, 3 in Castle and 4 in Imperial Age)",
      "Burmese": "+1 AT/Age"
    }
  },
	"Man-at-arms": {
		"extra": {
			"attack bonus": "+2 eagles, +2 buildings"
		},
    "civb": {
      "Portuguese": "Cost 60F 17G (-15% gold cost)",
      "Malians": "+1 PA/age -> (2 in Feudal, 3 in Castle and 4 in Imperial Age)",
      "Burmese": "+1 AT/Age"
    }
	},
	"Long Swordsman": {
		"hp": "60",
		"civb": {
			"Vikings": "69 HP in Castle, 72 HP in Imperial Age",
      "Portuguese": "Cost 60F 17G (-15% gold cost)",
      "Malians": "+1 PA/age -> (3 in Castle and 4 in Imperial Age)",
      "Burmese": "+1 AT/Age"
		},
		"extra": {
			"attack bonus": "+6 eagles, +3 buildings"
		}
	},
	"Two-handed Swordsman": {
		"at": "12",
		"extra": {
			"attack bonus": "+8 eagles, +4 buildings"
		},
    "civb": {
      "Portuguese": "Cost 60F 17G (-15% gold cost)",
      "Malians": "+1 PA/age -> (4 in Imperial Age)",
      "Burmese": "+1 AT/Age"
    }
	},
	"Champion": {
		"extra": {
			"attack bonus": "+8 eagles, +4 buildings"
		},
    "civb": {
      "Portuguese": "Cost 60F 17G (-15% gold cost)",
      "Malians": "+1 PA/age -> (4 in Imperial Age)",
      "Burmese": "+1 AT/Age"
    }
	},
  "Archer": {
    "civb": {
      "Magyars and allies": "+2 LOS",
      "Portuguese": "Cost 25W 38G (-15% gold cost)",
      "Ethiopians": "1.7 RT (15% faster)",
      "Vietnamese": "33 HP in Feudal (10%), 35 HP in Castle (15%) and 36 HP in Imperial Age (20%)"  
    }
  },
  "Crossbowman": {
    "civb": {
      "Magyars and allies": "+2 LOS",
      "Portuguese": "Cost 25W 38G (-15% gold cost)",
      "Ethiopians": "1.7 RT (15% faster)",
      "Vietnamese": "40 HP in Castle (15%) and 42 HP in Imperial Age (20%)"
    }
  },
  "Arbalest": {
    "civb": {
      "Magyars and allies": "+2 LOS",
      "Portuguese": "Cost 25W 38G (-15% gold cost)",
      "Ethiopians": "1.7 RT (15% faster)",
      "Vietnamese": "48 HP in Imperial Age (20%)"
    }
  },
	"Cavalry Archer": {
		"cost": "40W 60G",
		"civb": {
			"Huns": "Costs 36W 54G in Castle age (-10% bonus), 32W 48G in Imperial(-20% bonus)",
      "Portuguese": "Cost 40W 48G (-15% gold cost)",
      "Franks": "60 HP (+20%)",
      "Vietnamese": "58 HP in Castle (15%) and 60 HP in Imperial Age (20%)"
		}
	},
	"Heavy Cavalry Archer": {
		"cost": "40W 60G",
		"civb": {
			"Huns": "32W 48G in Imperial(-20% bonus)",
      "Franks": "72 HP (+20%)",
      "Vietnamese": "72 HP in Imperial Age (20%)"
		}
	},
  "Knight": {
    "civb": {
      "Portuguese": "Cost 60F 64G (-15% gold cost)",
      "Berbers": "Costs 51F 64G in Castle age (-15% cost), 48F 60G (-20% cost) in Imperial Age"
    }
  },
  "Cavalier": {
    "civb": {
      "Portuguese": "Cost 60F 64G (-15% gold cost)",
      "Berbers": "Costs 51F 64G in Castle age (-15% cost), 48F 60G (-20% cost) in Imperial Age"
    }
  },
	"Camel": {
		"at": "6",
		"civb": {
      "Indians": "AR +1/+1",
      "Indians and allies": "+6 attack vs buildings",
      "Berbers": "Costs 47F 51G in Castle age (-15% cost), 44F 48G (-20% cost) in Imperial Age"
		},
    "extra": {
      "attack bonus": "+9 against cavalry, +5 ships, +5 camels"
    }
	},
	"Heavy Camel": {
		"civb": {
      "Indians": "AR +1/+1",
      "Indians and allies": "+6 attack vs buildings",
      "Berbers": "Costs 47F 51G in Castle age (-15% cost), 44F 48G (-20% cost) in Imperial Age"
		},
    "extra": {
      "attack bonus": "+18 against cavalry, +9 ships, +9 camels"
    }
	},
	"Mameluke": {
		"at": "8",
    "civb": {
      "Indian ally": "+5 attack vs buildings"
    }
	},
  "Elite Mameluke": {
    "civb": {
      "Indian ally": "+5 attack vs buildings"
    },
    "ad": "0.35"
  },
	"Battering Ram": {
		"civb": {
			"Slavs": "Cost 136W 64G (-15% bonus)",
      "Portuguese": "Cost 160W 64G (-15% gold cost)"
		}
	},
	"Capped Ram": {
		"note": "Stronger than battering ram. Can garrison 5 units. The movement rate is affected by the number of infantry units garrisoned, max speed at 0.75.",
		"civb": {
			"Slavs": "Cost 136W 64G (-15% bonus)",
      "Portuguese": "Cost 160W 64G (-15% gold cost)"
		},
    "extra": {
        "attack bonus": "+150 (+200 full) buildings, +50 siege, +180 (+230 full) with siege engineers buildings"
      }
	},
	"Siege Ram": {
		"civb": {
			"Slavs": "Cost 136W 64G (-15% bonus)"
		}
	},
	"Mangonel": {
		"civb": {
			"Slavs": "Cost 136W 115G (-15% bonus)",
      "Portuguese": "Cost 160W 115G (-15% gold cost)"
		}
	},
	"Onager": {
		"note": "Stronger than mangonel. Can kill trees",
		"civb": {
			"Slavs": "Cost 136W 115G (-15% bonus)",
      "Portuguese": "Cost 160W 115G (-15% gold cost)"
		}
	},
	"Siege Onager": {
		"civb": {
			"Slavs": "Cost 136W 115G (-15% bonus)"
		}
	},
	"Scorpion": {
      "ar": "0/7",
		"civb": {
			"Slavs": "Cost 64W 64G (-15% bonus)",
      "Portuguese": "Cost 75W 64G (-15% gold cost)",
      "Khmer ally": "+1 range = 2-9 RA" 
		}
	},
	"Heavy Scorpion": {
		"civb": {
			"Slavs": "Cost 64W 64G (-15% bonus)",
      "Khmer ally": "+1 range = 2-9 RA"
		}
	},
	"Petard": {
		"cost": "65F 20G",
    "civb": {
      "Portuguese": "Cost 65F 17G (-15% gold cost)"
    }
	},
  "Trebuchet (packed)": {
    "civb": {
      "Portuguese": "Cost 200W 170G (-15% gold cost)"
    },
    "extra": {
      "attack bonus": "+250 all buildings"
    }
  },
	"Jaguar Warrior": {
		"ar": "1/1"
	},
	"Elite Jaguar Warrior": {
		"ar": "2/1",
    "note": "Aztec elite unique unit. Attack bonus vs. other infantry. (bonus attacks stack so +13 bonus against eagles)",
		"extra": {
			"attack bonus": "+2 eagles, +2 buildings, +11 infantry"
		}
	},
	"Longbowman": {
		"bt": "0:18",
		"civb": {
			"Magyar ally": "+2 LOS"
		}
	},
	"Elite Longbowman": {
		"bt": "0:18",
		"civb": {
			"Magyar ally": "+2 LOS"
		}
	},
	"Chu Ko Nu": {
		"bt": "0:16",
		"civb": {
			"Magyar ally": "+2 LOS"
		}
	},
	"Elite Chu Ko Nu": {
		"civb": {
			"Magyar ally": "+2 LOS"
		}
	},
	"Throwing Axeman": {
    "hp": "60",
		"ad": "0.7",
    "mr": "1.0"
	},
  "Elite Throwing Axeman": {
    "hp": "70",
    "mr": "1.0"
  },
	"Tarkan": {
		"hp": "100",
		"at": "8",
    "ar": "1/3"
	},
  "Elite Tarkan": {
    "ar": "1/4"
  },
	"War Wagon": {
		"bt": "0:21",
		"cost": "110W 60G"
	},
	"Elite War Wagon": {
		"bt": "0:21",
		"cost": "110W 60G"
	},
	"Plumed Archer": {
		"cost": "40W 40G",
		"civb": {
			"Mayans": "Base cost 50W 50G -> 40W 40G in Castle, 35W 35G in Imperial age",
			"Magyar ally": "+2 LOS"
		}
	},
	"Elite Plumed Archer": {
		"cost": "35W 35G",
		"civb": {
			"Mayans": "Base cost 50W 50G -> 35W 35G in Imperial age",
			"Magyar ally": "+2 LOS"
		}
	},
	"Mangudai": {
      "ad": "0.35"
	},
	"Elite Mangudai": {
    "ad": "0.35"
	},
  "Monk": {
    "civb": {
      "Portuguese": "Cost 85G (-15% gold cost)",
      "Aztecs": "-15% military creation bonus doesn't apply in DLCs"
    }
  },
	"Missionary": {
      "note": "mounted monk, affected by bloodlines"
	},
	"Teutonic Knight": {
		"hp": "80",
    "mr": "0.7"
	},
	"Elite Teutonic Knight": {
    "mr": "0.7"
	},
	"Transport Ship": {
		"age": "0",
		"civb": {
			"Vikings": "Cost 113W (-10% bonus) in Feudal, 106W (-15% bonus) in Castle, 100W (-20% bonus) in Imperial age",
      "Berbers": "1.595 movement rate (10% faster)",
      "Portuguese": "110 HP (10% bonus)"
		},
    "note": "Garrison inside 5 (10 with careening, 20 with dry dock). Can carry herdable animals."
	},
	"Galley": {
		"civb": {
			"Vikings": "Cost 81W 27G (-10% bonus) in Feudal, 76W 25G (-15% bonus) in Castle, 72W 24G (-20% bonus) in Imperial age",
      "Portuguese": "Cost 90W 26G (-15% gold cost)<br />132 HP (10% bonus)",
      "Berbers": "1.573 movement rate (10% faster)"
		},
    "extra": {
      "attack bonus": "+6 buildings, +8 ships, +3 rams"
    }
	},
	"War Galley": {
		"civb": {
			"Vikings": "Cost 76W 25G (-15% bonus) in Castle, 72W 24G (-20% bonus) in Imperial age",
      "Berbers": "1.573 movement rate (10% faster)",
      "Portuguese": "Cost 90W 26G (-15% gold cost)<br />149 HP (10% bonus)"
		},
    "extra": {
      "attack bonus": "+7 buildings, +9 ships, +4 rams"
    }
	},
	"Galleon": {
		"civb": {
			"Vikings": "Cost 72W 24G (-20% bonus) in Imperial age",
      "Portuguese": "Cost 90W 26G (-15% gold cost)<br />182 HP (10% bonus)",
      "Berbers": "1.573 movement rate (10% faster)"
		},
    "extra": {
      "attack bonus": "+8 buildings, +11 ships, +4 rams"
    }
	},
	"Longboat": {
		"cost": "85W 43G",
		"civb": {
        	"Vikings": "Base cost 100W 50G, but -15% cost bonus in Castle -> 85W 43G and -20% bonus in Imperial -> 80W 40G"
        },
      "note": "Viking unique unit. Fires multiple arrows. volley of 4 arrows (7-1-1-1). Because of the multiple arrows, the delay between starts of attacks is roughly 3.34."
	},
	"Elite Longboat": {
		"cost": "80W 40G",
		"civb": {
        	"Vikings": "Base cost 100W 50G, but -20% bonus in Imperial -> 80W 40G"
        }
	},
	"Berserk": {
		"hp": "61",
		"bt": "0:14",
		"civb": {
			"Vikings": "base HP 54, but thanks to viking bonus HP in castle age: 61 in Imperial: 64"
		}
	},
	"Elite Berserk": {
		"hp": "75",
		"bt": "0:14",
		"civb": {
			"Vikings": "base HP 62, but thanks to viking bonus HP in Imperial: 75"
		}
	},
	"Eagle Warrior0": {
		"name": "Eagle Scout",
    "ver": "f"
	},
	"Eagle Warrior2": {
		"bt": "0:32",
		"hp": "55",
    "mr": "1.2",
		"ar": "0/3",
      "extra": {
        "attack bonus": "+8 monks, +3 siege, +3 cavalry, +1 ships, +1 camels"
      },
		"t": "eagle eg2 infantry melee"
	},
  "Elite Eagle Warrior": {
    "extra": {
      "attack bonus": "+10 monks, +5 siege, +4 cavalry, +2 ships, +2 camels"
    }
  },
	"Villager": {
		"civb": {
			"Incas": "Villagers affected by blacksmith upgrades (melee attack, infantry armor).",
			"Indians": "Cost 45F in Dark, 43F in Feudal, 40F in Castle, 38F in Imperial Age; <br />fishermen work 15% faster carry +15",
			"Magyars": "Kill wolves in one strike",
			"Slavs": "Farmers work 15% faster",
      "Berbers": "0.88 base movement rate (MR), 0.97 MR with wheelbarrow, 1.07 MR with handcart",
      "Khmer": "Can be garrisoned in Houses",
      "Franks": "Foragers work 25% faster (work rate *1.25)",
      "Turks": "gold miners work 20% faster"
		}
	},
	"Fishing Ship": {
		"civb": {
			"Italians": "Cost 50W (-25W)",
      "Berbers": "1.386 movement rate (10% faster)",
      "Portuguese": "66 HP (10% bonus)",
      "Malay": "Cost 50W (-33% cheaper)"
		}
	},
	"Hand Cannoneer": {
		"civb": {
			"Italians": "Cost 36F 40G (-20% bonus)",
      "Portuguese": "Cost 45F 43G (-15% gold cost)"
		}
	},
	"Bombard Cannon": {
		"civb": {
			"Italians": "Cost 180W 180G (-20% bonus)",
      "Portuguese": "Cost 225W 191G (-15% gold cost)"
		},
    "extra": {
      "attack bonus": "+200 buildings, +40 siege, +20 siege, +40 stone defense"
    }
	},
	"Cannon Galleon": {
		"civb": {
			"Italians": "Cost 160W 120G (-20% bonus)",
      "Portuguese": "132 HP (+10% bonus)<br />Cost 200W 128G (-15% gold cost)",
      "Berbers": "1.21 movement rate (10% faster)"
		}
	},
	"Elite Cannon Galleon": {
		"civb": {
			"Italians": "Cost 160W 120G (-20% bonus)",
      "Portuguese": "165 HP (+10% bonus) <br /> Cost 200W 128G (-15% gold cost)",
      "Berbers": "1.21 movement rate (10% faster)"
		}
	},
	"Scout Cavalry1": {
		"civb": {
			"Magyars": "Cost 72F",
      "Berbers": "Cost 68F in Castle Age and 64F in Imperial Age (-15/20% respectively",
      "Franks": "54 HP (+20%)"
		}
	},
	"Light Cavalry": {
		"civb": {
			"Magyars": "Cost 72F",
      "Berbers": "Cost 68F in Castle Age and 64F in Imperial Age (-15/20% respectively",
      "Franks": "72 HP (+20%)"
		}
	},
	"Hussar": {
		"civb": {
			"Magyars": "Cost 72F",
      "Berbers": "Cost 68F in Castle Age and 64F in Imperial Age (-15/20% respectively"
		}
	},
  "Trade Cog": {
    "civb": {
      "Portuguese": "Cost 100W 43G (-15% gold cost) <br /> 88 HP (10% bonus)",
      "Berbers": "1.386 movement rate (10% faster)",
        "Spanish": "+25% gold"
    },
      "note": "Movement rate 2.00 with caravan. Carry 30% more gold/distance compared to trade cart."
  },
  "Trade Cart": {
    "extra": {
      "DLCs" : "Trade Carts in DLCs have a smaller collision radius (less blockages on trade routes).",
        "Spanish": "+25% gold"
    },
    "civb": {
      "Portuguese": "Cost 100W 43G (-15% gold cost)"
    }
  },
  "War Elephant": {
    "extra": {
      "blast radius": "0.5"
    }
  }
}
JSON;

$changes = json_decode($changes_json, true);

$new_units_json = <<<JSON
[
{
    "type": "Gaia",
    "name": "Llama",
    "ver": "f",
    "age": "0",
    "cost": "-",
    "bt": "-",
    "fr": "-",
    "ad": "-",
    "mr": "0.7",
    "los": "3",
    "hp": "7",
    "ra": "-",
    "at": "-",
    "ar": "0/0",
    "note": "Can be picked up by player and used to scout.",
    "extra": {
      "Food": "100F",
      "Resource decay": "0.25 F/s"},
    "civb": {},
    "t": "livestock5 llama gaia"
  },
  {
    "type": "Gaia",
    "name": "Cow",
    "ver": "f",
    "age": "0",
    "cost": "-",
    "bt": "-",
    "fr": "-",
    "ad": "-",
    "mr": "0.65",
    "los": "3",
    "hp": "14",
    "ra": "-",
    "at": "-",
    "ar": "0/0",
    "note": "Can be picked up by player and used to scout. Moves slower than sheep, but gives +50 food.",
    "extra": {
      "Food": "150F",
      "Resource decay": "0.25 F/s"},
    "civb": {},
    "t": "livestock4 cow gaia"
  },
  {
    "type": "Gaia",
    "name": "Goat",
    "ver": "f",
    "age": "0",
    "cost": "-",
    "bt": "-",
    "fr": "-",
    "ad": "-",
    "mr": "0.7",
    "los": "3",
    "hp": "7",
    "ra": "-",
    "at": "-",
    "ar": "0/0",
    "note": "Can be picked up by player and used to scout.",
    "extra": {
      "Food": "100F",
      "Resource decay": "0.25 F/s"},
    "civb": {},
    "t": "livestock5 goat gaia"
  },
   {
      "type": "Gaia",
      "name": "Elephant",
      "ver": "a",
      "age": "0",
      "cost": "-",
      "bt": "-",
      "fr": "2",
      "ad": "0",
      "mr": "0.8",
      "los": "4",
      "hp": "75",
      "ra": "-",
      "at": "7",
      "ar": "0/0",
      "note": "Elephant (similar to wild boar but gives +60 food). Does extra damage against eagles and scouts.",
      "extra": {
        "Food": "400F",
        "Resource decay": "0.4",
        "attack bonus": "+4 against eagles, +3 against cavalry"},
      "civb": {},
      "t": "animal0 boar gaia melee"
    },
  {
      "type": "Gaia",
      "name": "Zebra",
      "ver": "a",
      "age": "0",
      "cost": "-",
      "bt": "-",
      "fr": "-",
      "ad": "-",
      "mr": "0.737",
      "los": "2",
      "hp": "5",
      "ra": "-",
      "at": "-",
      "ar": "0/0",
      "note": "Wild zebras running around",
      "extra": {
        "Food": "140F",
        "Resource decay": "0.25"},
      "civb": {},
      "t": "animal4 zebra gaia"
    },
  {
      "type": "Gaia",
      "name": "Ostrich",
      "ver": "a",
      "age": "0",
      "cost": "-",
      "bt": "-",
      "fr": "-",
      "ad": "-",
      "mr": "0.737",
      "los": "2",
      "hp": "5",
      "ra": "-",
      "at": "-",
      "ar": "0/0",
      "note": "Wild ostriches running around",
      "extra": {
        "Food": "140F",
        "Resource decay": "0.25"},
      "civb": {},
      "t": "animal5 ostrich gaia"
    },
   {
      "type": "Gaia",
      "name": "Camel",
      "ver": "a",
      "age": "0",
      "cost": "-",
      "bt": "-",
      "fr": "-",
      "ad": "-",
      "mr": "1.2",
      "los": "2",
      "hp": "50",
      "ra": "-",
      "at": "-",
      "ar": "0/0",
      "note": "Can be used as scout.",
      "extra": {},
      "civb": {},
      "t": "camel gaia"
    },
	{
      "type": "Unique",
      "name": "Kamayuk",
      "ver": "f",
      "age": "2",
      "cost": "60F 30G",
      "bt": "0:10",
      "fr": "2",
      "ad": "0",
      "mr": "1.0",
      "los": "4",
      "hp": "60",
      "ra": "1",
      "at": "7",
      "ar": "0/0",
      "extra": {
        "attack bonus": "+8 cavalry, +4 camels, +20 elephants"
      },
      "civb": {
        },
      "note": "Inca unique infantry unit with ranged attack and no projectile.",
      "t": "kama0 infantry melee"
    },
    {
      "type": "Unique",
      "name": "Elite Kamayuk",
      "ver": "f",
      "age": "3",
      "cost": "60F 30G",
      "bt": "0:10",
      "fr": "2",
      "ad": "0",
      "mr": "1.0",
      "los": "5",
      "hp": "80",
      "ra": "1",
      "at": "8",
      "ar": "1/0",
      "extra": {
        "attack bonus": "+12 cavalry, +6 camels, +20 elephants",
        "search radius": "4"
      },
      "civb": {
        },
      "note": "Inca elite unique infantry unit with ranged attack and no projectile.",
      "t": "kama1 infantry melee"
    },
 	{
      "type": "Archery Range",
      "name": "Slinger",
      "ver": "f",
      "age": "2",
      "cost": "30F 40G",
      "bt": "0:25",
      "fr": "2",
      "ad": "0.35",
      "mr": "0.96",
      "los": "7",
      "hp": "40",
      "ra": "1-5",
      "at": "5",
      "ar": "0/0",
      "extra": {
        "attack bonus": "+1 spearmen, +1 rams, +10 infantry",
        "accuracy": "90%"
      },
      "civb": {
        "Briton ally": "0:20.83 BT (1.2* archery range work rate -> 25/1.2)",
        "Saracen ally": "+2 attack against buildings",
        "Magyar ally": "+2 LOS"
      },
      "note": "Only available to Incas. Anti-infantry ranged unit",
      "t": "slinger archery pierce"
    },
	{
      "type": "Unique",
      "name": "Elephant Archer",
      "ver": "f",
      "age": "2",
      "cost": "100F 80G",
      "bt": "0:25",
      "fr": "2.5",
      "ad": "0.7",
      "mr": "0.8",
      "los": "7",
      "hp": "280",
      "ra": "4",
      "at": "6",
      "ar": "0/3",
      "extra": {
        "attack bonus": "+3 standard buildings, +3 stone defense",
        "armor bonus": "-2 archer armor",
        "accuracy": "100",
        "search radius": "6"
      },
      "civb": {},
      "note": "Indian unique unit, Classified as cavalry archer and all bonuses applied against war elephants apply against them as well.",
      "t": "elea0 elephantarcher war elephant cavarcher cavalry archer pierce"
    },
	{
      "type": "Unique",
      "name": "Elite Elephant Archer",
      "ver": "f",
      "age": "3",
      "cost": "100F 80G",
      "bt": "0:25",
      "fr": "2.5",
      "ad": "0.7",
      "mr": "0.8",
      "los": "7",
      "hp": "330",
      "ra": "4",
      "at": "7",
      "ar": "0/3",
      "extra": {
        "attack bonus": "+4 standard buildings, +4 stone defense",
        "armor bonus": "-2 archer armor",
        "accuracy": "100",
        "search radius": "6"
      },
      "civb": {},
      "note": "Indian elite unique unit, Classified as cavalry archer and all bonuses applied against war elephants apply against them as well.",
      "t": "elea1 elephantarcher war elephant cavarcher cavalry archer pierce"
    },
    {
      "type": "Stable",
      "name": "Imperial Camel",
      "ver": "f",
      "age": "3",
      "cost": "55F 60G",
      "bt": "0:20",
      "fr": "2",
      "ad": "0",
      "mr": "1.45",
      "los": "5",
      "hp": "140",
      "ra": "-",
      "at": "9",
      "ar": "0/0",
      "extra": {
        "attack bonus": "+18 against cavalry, +9 ships, +9 camels",
        "search radius": "4"
      },
      "civb": {
        "Hun ally": "0:16.66 BT (20% faster stable)",
        "Indians": "AR +1/+1",
        "Indians and allies": "+6 attack vs buildings"
      },
      "note": "Inly available to Indians. Stronger than Heavy Camel. Attack bonus vs. cavalry. (not classified as cavalry)",
      "t": "camel cm2 cavalry melee"
    },
    {
      "type": "Unique",
      "name": "Genoese Crossbowman",
      "ver": "f",
      "age": "2",
      "cost": "45W 45G",
      "bt": "0:22",
      "fr": "3",
      "ad": "0.35",
      "mr": "0.96",
      "los": "8",
      "hp": "45",
      "ra": "4",
      "at": "6",
      "ar": "1/0",
      "extra": {
        "attack bonus": "+5 cavalry, +4 ships, +4 camels, +5 war elephants",
        "accuracy": "100",
        "search radius": "7"
      },
      "civb": {
        	"Saracen ally": "+2 attack against buildings",
			"Magyar ally": "+2 LOS"
		},
      "note": "Italian slow shooting ranged unique unit with attack bonus against cavalry",
      "t": "geno0 archer pierce"
    },
    {
      "type": "Unique",
      "name": "Elite Genoese Crossbowman",
      "age": "2",
      "ver": "f",
      "cost": "45F 45G",
      "bt": "0:19",
      "fr": "2",
      "ad": "0.35",
      "mr": "0.96",
      "los": "8",
      "hp": "50",
      "ra": "4",
      "at": "6",
      "ar": "1/0",
      "extra": {
        "attack bonus": "+7 cavalry, +5 ships, +5 camels, +7 war elephants",
        "accuracy": "100",
        "search radius": "7"
      },
      "civb": {
        	"Saracen ally": "+2 attack against buildings",
			"Magyar ally": "+2 LOS"
		},
      "note": "Italian ranged elite unique unit with attack bonus against cavalry. Shoots faster than non-elite.",
      "t": "geno1 archer pierce"
    },
 	{
      "type": "Barracks",
      "name": "Condottiero",
      "ver": "f",
      "age": "3",
      "cost": "50F 35G",
      "bt": "0:18",
      "fr": "1.9",
      "ad": "0",
      "mr": "1.2",
      "los": "6",
      "hp": "80",
      "ra": "-",
      "at": "10",
      "ar": "1/1",
      "extra": {
        "attack bonus": "+2 standard buildings, +10 gunpowder",
        "armor bonus": "+10 infantry armor"
      },
      "civb": {
        "Aztec": "0:15.3 BT (15% bonus 0.85*BT)",
        "Aztec with goths ally": "0:12.75 BT (BT*0.85/1.2)",
        "Celts": "1.15 MR (0.9*1.15)",
        "Goths": "Cost starting feudal 33F 23G, +1 attack against buildings",
        "Goths and allies": "0:9.17 BT (20% faster barracks 1.2 work rate)",
        "Japanese": "RT 1.425 (-25% reload time)",
        "Vikings": "96 HP (get +20% HP bonus in Imperial Age) ",
        "Malians": "+1 PA/age -> (2 in Feudal, 3 in Castle and 4 in Imperial Age)",
        "Portuguese": "Cost 50F 30G (-15% gold bonus)"
        },
      "note": "Anti gunpowder infantry. All Italian allies get this in imperial age.",
      "t": "condo0 archery pierce"
    },
    {
      "type": "Unique",
      "name": "Magyar Huszar",
      "ver": "f",
      "age": "2",
      "cost": "80F 10G",
      "bt": "0:16",
      "fr": "1.8",
      "ad": "0",
      "mr": "1.5",
      "los": "5",
      "hp": "70",
      "ra": "-",
      "at": "9",
      "ar": "0/2",
      "extra": {
        "attack bonus": "+1 rams, +5 siege weapons",
        "search radius": "4"
      },
      "civb": {
        },
      "note": "Magyar unique unit. Similar to hussar with faster build time, attack bonus against siege.",
      "t": "mahusz0 cavalry melee"
    },
    {
      "type": "Unique",
      "name": "Elite Magyar Huszar",
      "ver": "f",
      "age": "3",
      "cost": "80F 10G",
      "bt": "0:16",
      "fr": "1.8",
      "ad": "0",
      "mr": "1.5",
      "los": "6",
      "hp": "85",
      "ra": "-",
      "at": "10",
      "ar": "0/2",
      "extra": {
        "attack bonus": "+2 rams, +8 siege weapons",
        "search radius": "5"
      },
      "civb": {
        },
      "note": "Magyar elite unique unit. Similar to hussar with attack bonus against siege.",
      "t": "mahusz1 cavalry melee"
    },
    {
      "type": "Unique",
      "name": "Boyar",
      "ver": "f",
      "age": "2",
      "cost": "50F 80G",
      "bt": "0:23",
      "fr": "1.9",
      "ad": "0",
      "mr": "1.4",
      "los": "5",
      "hp": "100",
      "ra": "-",
      "at": "12",
      "ar": "4/1",
      "extra": {
        "search radius": "4"
      },
      "civb": {
        },
      "note": "Slav Unique unit with strong melee armor and attack.",
      "t": "boyar0 cavalry melee"
    },
    {
      "type": "Unique",
      "name": "Elite Boyar",
      "ver": "f",
      "age": "3",
      "cost": "50F 80G",
      "bt": "0:20",
      "fr": "1.9",
      "ad": "0",
      "mr": "1.4",
      "los": "5",
      "hp": "130",
      "ra": "-",
      "at": "14",
      "ar": "6/2",
      "extra": {
        "search radius": "4"
      },
      "civb": {
        },
      "note": "Slav elite Unique unit with strong melee armor and attack.",
      "t": "boyar1 cavalry melee"
    },
    {
      "type": "Unique",
      "name": "Organ Gun",
      "ver": "a",
      "age": "2",
      "cost": "80W 60G",
      "bt": "0:21",
      "fr": "3.45",
      "ad": "0.42",
      "mr": "0.85",
      "los": "9",
      "hp": "60",
      "ra": "1-7",
      "at": "16",
      "ar": "2/4",
      "extra": {
        "attack bonus": "+1 rams",
        "accuracy": "50%"
      },
      "civb": {
        "Portuguese": " Base price 80F 70G, but thanks to portuguese bonus -> 80F 60G"
      },
      "note": "Portuguese unique siege unit. Releases 5 projectiles at once affecting a small area.",
      "t": "organgun0 siege pierce"
    },
    {
      "type": "Unique",
      "name": "Elite Organ Gun",
      "ver": "a",
      "age": "3",
      "cost": "80W 60G",
      "bt": "0:21",
      "fr": "3.45",
      "ad": "0.42",
      "mr": "0.85",
      "los": "9",
      "hp": "70",
      "ra": "1-7",
      "at": "20",
      "ar": "2/6",
      "extra": {
        "attack bonus": "+1 rams",
        "accuracy": "50%"
      },
      "civb": {
        "Portuguese": " Base price 80F 70G, but thanks to portuguese bonus -> 80F 60G"
      },
      "note": "Portuguese elite unique siege unit. Releases 5 projectiles at once affecting a small area.",
      "t": "organgun1 siege pierce"
    },
    {
      "type": "Barracks",
      "name": "Eagle Scout",
      "ver": "f",
      "age": "1",
      "cost": "20F 50G",
      "bt": "1:00",
      "fr": "2",
      "ad": "0",
      "mr": "1.1",
      "los": "6",
      "hp": "50",
      "ra": "-",
      "at": "4",
      "ar": "0/2",
      "extra": {
        "attack bonus": "+8 monks, +3 siege"
      },
      "civb": {
        "Aztec": "0:51 BT (15% bonus)",
        "Aztec with goths ally": "0:42.5 BT (0.85*BT/1.2)",
        "Goths allies": "0:50 BT (20% faster barracks 1.2 work rate)"
        },
      "note": "Fast infantry with extensive sight; resists conversion; attack bonus vs. Monks",
      "t": "eagle eg1 infantry melee"
    },
    {
      "type": "Barracks",
      "name": "Eagle Scout",
      "ver": "f",
      "age": "2",
      "cost": "20F 50G",
      "bt": "0:32",
      "fr": "2",
      "ad": "0",
      "mr": "1.1",
      "los": "8",
      "hp": "50",
      "ra": "-",
      "at": "7",
      "ar": "0/2",
      "extra": {
        "attack bonus": "+8 monks, +3 siege, +2 cavalry, +1 ship, +1 camels"
      },
      "civb": {
        "Aztec": "0:29.75 BT (15% bonus)",
        "Aztec with goths ally": "0:24.79 BT (0.85*BT/1.2)",
        "Goths allies": "0:29.167 BT (20% faster barracks 1.2 work rate)"
        },
      "note": "Fast infantry with extensive sight; resists conversion; attack bonus vs. Monks",
      "t": "eagle eg1.2 infantry melee"
    },
    {
      "type": "Dock",
      "name": "Caravel",
      "ver": "a",
      "age": "2",
      "cost": "90W 40G",
      "bt": "0:36",
      "fr": "3",
      "ad": "0",
      "mr": "1.43",
      "los": "9",
      "hp": "143",
      "ra": "6",
      "at": "6",
      "ar": "0/8",
      "extra": {
        "attack bonus": "+8 vs all buildings, +6 vs ships, +4 vs rams",
        "accuracy": "100%"
      },
      "civb": {
        "Portuguese": "Base price 90W 40G, but thanks to portuguese bonus -> 90F 34G<br />Base HP 130, but thanks to portuguese bonus -> 143 HP"
      },
      "note": "Portuguese unique unit. Effective vs large fleets, because each shot damages multiple units in a straight line.",
      "t": "caravel0 pierce ship unique"
    },
    {
      "type": "Dock",
      "name": "Elite Caravel",
      "ver": "a",
      "age": "3",
      "cost": "90W 40G",
      "bt": "0:36",
      "fr": "3",
      "ad": "0",
      "mr": "1.43",
      "los": "9",
      "hp": "165",
      "ra": "7",
      "at": "8",
      "ar": "0/8",
      "extra": {
        "attack bonus": "+9 vs all buildings, +7 vs ships, +4 vs rams",
        "accuracy": "100%"
      },
      "civb": {
        "Portuguese": " Base price 90W 40G, but thanks to portuguese bonus -> 90F 34G<br />Base HP 150, but thanks to portuguese bonus -> 165 HP"
      },
      "note": "Portuguese elite unique unit. Effective vs large fleets, because each shot damages multiple units in a straight line.",
      "t": "caravel0 pierce ship unique"
    },
    {
      "type": "Unique",
      "name": "Shotel Warrior",
      "ver": "a",
      "age": "2",
      "cost": "50F 35G",
      "bt": "0:08",
      "fr": "2",
      "ad": "0",
      "mr": "1.2",
      "los": "3",
      "hp": "40",
      "ra": "-",
      "at": "16",
      "ar": "0/0",
      "extra": {
        "attack bonus": "+2 eagles"
      },
      "civb": {},
      "note": "Ethiopian Unique unit. Cheap Infantry unit with high creation speed.",
      "t": "shotelw0 infantry melee"
    },
    {
      "type": "Unique",
      "name": "Elite Shotel Warrior",
      "ver": "a",
      "age": "3",
      "cost": "50F 35G",
      "bt": "0:08",
      "fr": "2",
      "ad": "0",
      "mr": "1.2",
      "los": "3",
      "hp": "50",
      "ra": "-",
      "at": "18",
      "ar": "0/1",
      "extra": {
        "attack bonus": "+2 eagles, +1 vs standard buildings"
      },
      "civb": {},
      "note": "Ethiopian elite Unique unit. Cheap Infantry unit with high creation speed.",
      "t": "shotelw1 infantry melee"
    },
    {
      "type": "Unique",
      "name": "Gbeto",
      "ver": "a",
      "age": "2",
      "cost": "50F 40G",
      "bt": "0:17",
      "fr": "2",
      "ad": "0.7",
      "mr": "1.25",
      "los": "6",
      "hp": "30",
      "ra": "5",
      "at": "10",
      "ar": "0/0",
      "extra": {
        "attack bonus": "+1 eagles"
      },
      "civb": {},
      "note": "Malian unique unit. Quick infantry unit with a high ranged attack.",
      "t": "gbeto0 infantry melee"
    },
    {
      "type": "Unique",
      "name": "Elite Gbeto",
      "ver": "a",
      "age": "3",
      "cost": "50F 40G",
      "bt": "0:17",
      "fr": "2",
      "ad": "0.7",
      "mr": "1.25",
      "los": "6",
      "hp": "45",
      "ra": "6",
      "at": "13",
      "ar": "0/0",
      "extra": {
        "attack bonus": "+1 eagles"
      },
      "civb": {},
      "note": "Malian elite unique unit. Quick infantry unit with a high ranged attack.",
      "t": "gbeto1 infantry melee"
    },
    {
      "type": "Unique",
      "name": "Camel Archer",
      "ver": "a",
      "age": "2",
      "cost": "50W 60G",
      "bt": "0:21",
      "fr": "2",
      "ad": "0.35",
      "mr": "1.4",
      "los": "5",
      "hp": "60",
      "ra": "4",
      "at": "7",
      "ar": "0/1",
      "extra": {
        "attack bonus": "+4 cavalry archers, +2 rams, +1 infantry",
        "armor bonus": "+1 camel armor",
        "accuracy": "95"
      },
      "civb": {
        "Indian ally": "+5 bonus attack vs buildings"
      },
      "note": "Berber unique unit. Cavalry archer with an attack bonus vs cavalry archers.",
      "t": "camelarcher0 cavarcher cavalry archer camel pierce"
    },
    {
      "type": "Unique",
      "name": "Elite Camel Archer",
      "ver": "a",
      "age": "3",
      "cost": "50W 60G",
      "bt": "0:21",
      "fr": "2",
      "ad": "0.35",
      "mr": "1.4",
      "los": "5",
      "hp": "65",
      "ra": "4",
      "at": "8",
      "ar": "1/1",
      "extra": {
        "attack bonus": "+6 cavalry archers, +2 rams, +1 infantry",
        "armor bonus": "+2 camel armor, +2 cavalry archer armor",
        "accuracy": "95"
      },
      "civb": {
        "Indian ally": "+5 bonus attack vs buildings"
      },
      "note": "Berber elite unique unit. Cavalry archer with an attack bonus vs cavalry archers.",
      "t": "camelarcher1 cavarcher cavalry archer camel pierce"
    },
    {
      "type": "Siege Workshop",
      "name": "Siege Tower",
      "ver": "x",
      "age": "2",
      "cost": "200W 160G",
      "bt": "0:36",
      "fr": "-",
      "ad": "-",
      "mr": "0.8 (+0.05/unit)",
      "los": "8",
      "hp": "220",
      "ra": "-",
      "at": "-",
      "ar": "-2/100",
      "extra": {
        "armor bonus": "0 ram armor"
      },
      "civb": {
        "Aztec": "0:30.6 BT (15% bonus)",
        "Celts and allies": "0:30 BT (1.2 work rate)",
        "Portuguese": "Cost 200W 136G (-15% gold bonus)"
      },
      "note": "Siege weapon used to scale enemy walls; resistant to archer attack. Infantry, villagers and foot archer can garrison inside for transportation (max 10 units).",
      "t": "ram siegetower0 siege weapon"
    },
    {
      "type": "Dock",
      "name": "Fire Galley",
      "ver": "x",
      "age": "1",
      "cost": "75W 45G",
      "bt": "1:00",
      "fr": "0.25",
      "ad": "0",
      "mr": "1.3",
      "los": "5",
      "hp": "100",
      "ra": "2.49",
      "at": "1",
      "ar": "0/4",
      "extra": {
        "attack bonus": "+1 buildings, +3 ships, +1 turtle ships",
        "armor bonus": "+6 ships"
      },
      "civb": {
        "Aztec": "0:51 BT (15% bonus)",
        "Byzantines": "0.2 RT (0.25*0.8 20% bonus)",
        "Persians": "0:54.55 BT in Feudal, 0:52.17 BT in Castle, 0:50 BT in Imperial",
        "Portuguese": "Cost 75W 38G (-15% gold cost)<br />110 HP (+10% bonus)",
        "Berbers": "MR 1.43 (+10% faster)"
      },
      "note": "Spews fire at other ships. Good at sinking galleys. Attack shows pierce attack.",
      "t": "fire* pierce ship"
    },
    {
      "type": "Dock",
      "name": "Demolition Raft",
      "ver": "x",
      "age": "1",
      "cost": "70W 50G",
      "bt": "0:45",
      "fr": "-",
      "ad": "0",
      "mr": "1.5",
      "los": "6",
      "hp": "45",
      "ra": "-",
      "at": "90",
      "ar": "0/2",
      "extra": {
        "attack bonus": "+180 buildings",
        "armor bonus": "+1 ships",
        "blast radius": "2.5"
      },
      "civb": {
        "Aztecs": "0:38.25 BT (-15% bonus)",
        "Chinese": "68 HP (+50% HP)",
        "Persians": "0:40.9 BT in Feudal, 0:39.1 BT in Castle, 0:37.5 BT in Imperial",
        "Vikings": "Cost 56W 40G (-20% cost bonus)",
        "Portuguese": "Cost 70W 43G (-15% gold cost)<br />55 HP (+10% bonus)",
        "Berbers": "MR 1.65 (+10% faster)"
      },
      "note": "Filled with explosives. Self-destructs when used. Pilot near enemy ships and detonate to wrest control of the sea from an entrenched opponent. Doesn't do full damage to its complete blast radius (damage increases based on proximity).",
      "t": "demo* melee ship"
    },
    {
      "type": "Archery Range",
      "name": "Genitour",
      "ver": "a",
      "age": "2",
      "cost": "35W 50F",
      "bt": "0:25",
      "fr": "3",
      "ad": "0.21",
      "mr": "1.35",
      "los": "5",
      "hp": "50",
      "ra": "1-4",
      "at": "3",
      "ar": "0/3",
      "extra": {
        "attack bonus": "+4 archers/hand cannon/skirms",
        "armor bonus": "+1 cavalry archer armor",
        "accuracy": "90%"
      },
      "civb": {
        "Aztec with Berber ally": "0:21.25 BT (15% bonus)",
        "Britons and berber allies": "0:20.83 BT (1.2* archery range work rate -> 25/1.2)",
        "Aztec with Briton and Berber ally": "0:17.1 BT (25*0.85/1.2)",
        "Byzantine with Berber ally": "Genitour classified as cavalry archer, not as skirm, so no bonus",
        "Mongols with Berber ally": "RT 2.4 (-20% reload time)",
        "Huns with Berber ally": "Costs 32W 45F in Castle age (-10% bonus), 28W 40F in Imperial(-20% bonus)"
      },
      "note": "Berber unique unit. Mounted skirmisher. Effective against archers.",
      "t": "genitour genitour0 cavarcher cavalry archer pierce"
    },
    {
      "type": "Archery Range",
      "name": "Elite Genitour",
      "ver": "a",
      "age": "3",
      "cost": "35W 50F",
      "bt": "0:23",
      "fr": "3",
      "ad": "0.21",
      "mr": "1.35",
      "los": "6",
      "hp": "55",
      "ra": "1-4",
      "at": "4",
      "ar": "0/4",
      "extra": {
        "attack bonus": "+5 archers/hand cannon/skirms, +2 vs cavalry archers",
        "armor bonus": "+1 cavalry archer armor",
        "accuracy": "90%"
      },
      "civb": {
        "Aztec with Berber ally": "0:19.55 BT (15% bonus)",
        "Britons and Berber allies": "0:19.17 BT (1.2* archery range work rate -> 23/1.2)",
        "Aztec with Briton and Berber ally": "0:16.3 BT (23*0.85/1.2)",
        "Byzantine with Berber ally": "Genitour classified as cavalry archer, not as skirm, so no bonus",
        "Mongols with Berber ally": "RT 2.4 (-20% reload time)",
        "Huns with Berber ally": "Costs 28W 40F in Imperial(-20% bonus)"
      },
      "note": "Berber elite unique unit.Stronger than Genitour.",
      "t": "genitour genitour1 cavarcher cavalry archer pierce"
    },
    {
      "type": "Stable",
      "name": "Tarkan",
      "ver": "f",
      "age": "2",
      "cost": "60F 60G",
      "bt": "0:21.7",
      "fr": "2.1",
      "ad": "0",
      "mr": "1.35",
      "los": "5",
      "hp": "100",
      "ra": "-",
      "at": "8",
      "ar": "1/3",
      "extra": {
        "attack bonus": "+10 castle, +8 buildings, +12 stone defense, +8 walls and gates"
      },
      "civb": {
        "Huns and allies": "Base build time 0:26 BT, but 20% faster stable"
        },
      "note": "Available to huns after researching Marauders unique tech.",
      "t": "tarkan tarkan0 cavalry melee"
    },
    {
      "type": "Stable",
      "name": "Elite Tarkan",
      "ver": "f",
      "age": "2",
      "cost": "60F 60G",
      "bt": "0:20",
      "fr": "2.1",
      "ad": "0",
      "mr": "1.35",
      "los": "7",
      "hp": "150",
      "ra": "-",
      "at": "11",
      "ar": "1/4",
      "extra": {
        "attack bonus": "+10 castle, +10 buildings, +12 stone defense, +10 walls and gates"
      },
      "civb": {
        "Huns and allies": "Base build time 0:24 BT, but 20% faster stable (24/1.2)"
        },
      "note": "Available to huns after researching Marauders unique tech.",
      "t": "tarkan tarkan1 cavalry melee"
    },
    {
      "type": "Archery Range",
      "name": "Imperial Skirmisher",
      "ver": "r",
      "age": "3",
      "cost": "35W 25F",
      "bt": "0:22",
      "fr": "3",
      "ad": "0.1",
      "mr": "0.96",
      "los": "7",
      "hp": "35",
      "ra": "1-5",
      "at": "3",
      "ar": "0/4",
      "extra": {
        "attack bonus": "+4 archers/hand cannon/skirms, +2 vs cavalry archers, +3 vs spearman",
        "accuracy": "90%"
      },
      "civb": {
        "Aztec with Vietnamese ally": "0:18.7 BT (15% bonus)",
        "Britons and Vietnamese allies": "0:18.34 BT (1.2* archery range work rate -> 22/1.2)",
        "Aztec with Briton and Vietnamese ally": "0:15.6 BT (22*0.85/1.2)",
        "Byzantine with Vietnamese ally": "Cost -25% = 26W 19F",
        "Saracens and Vietnamese allies": "+2 attack against buildings",
        "Vietnamese": "42 HP (+20% bonus)"
      },
      "note": "Vietnamese team bonus unique unit. Stronger than Elite Skirmisher.",
      "t": "skirm sk2 archery pierce"
    },
    {
      "type": "Stable",
      "name": "Battle Elephant",
      "ver": "r",
      "age": "2",
      "cost": "120F 70G",
      "bt": "0:28",
      "fr": "2",
      "ad": "0",
      "mr": "0.85",
      "los": "4",
      "hp": "250",
      "ra": "-",
      "at": "12",
      "ar": "1/2",
      "extra": {
        "attack bonus": "+7 all buildings, +7 stone defense",
        "blast radius": "0.5"
      },
      "civb": {
        "Khmer": "MR*1.15 = 0.92 (15% faster)",
        "Malay": "Cost * 0.8 = 96F 56G (20% cheaper)"
      },
      "note": "Slow and heavy cavalry. Classified as cavalry and all bonuses applied against war elephants apply against them as well.",
      "t": "baele0 war elephant cavalry melee"
   },
    {
      "type": "Stable",
      "name": "Elite Battle Elephant",
      "ver": "r",
      "age": "2",
      "cost": "120F 70G",
      "bt": "0:28",
      "fr": "2",
      "ad": "0",
      "mr": "0.85",
      "los": "5",
      "hp": "300",
      "ra": "-",
      "at": "16",
      "ar": "1/3",
      "extra": {
        "attack bonus": "+10 all buildings, +10 stone defense",
        "search radius": "4",
        "blast radius": "0.5"
      },
      "civb": {
        "Khmer": "MR*1.15 = 0.92 (15% faster)",
        "Malay": "Cost * 0.8 = 96F 56G (20% cheaper)"
      },
      "note": "Stronger than Battle Elephant. Classified as cavalry and all bonuses applied against war elephants apply against them as well.",
      "t": "baele1 war elephant cavalry melee"
   }
]
JSON;

include_once "lib.php";

$new_units = json_decode($new_units_json, true);

$string = file_get_contents("aoc_units.json");
$json_a = json_decode($string, true);
$availability = csv_to_availability("dlc_matrix.csv");

foreach($json_a['data'] as &$unit) {
	if(array_key_exists($unit['name'], $changes)) {
		$unit = array_replace_recursive($unit, $changes[$unit['name']]);

	}

	if(array_key_exists($unit['name'].$unit['age'], $changes)) {
		$unit = array_replace_recursive($unit, $changes[$unit['name'].$unit['age']]);
	}

  //if(array_key_exists($unit['name'], $availability)) {
   //   $unit = array_replace($unit, $availability[$unit['name']]);
   //   $unit['t'] .= " ".join(" ", $unit['avail']);
   // }

}

$json_a['data'] = array_merge($json_a['data'], $new_units);

foreach($json_a['data'] as &$unit) {
  if(array_key_exists($unit['name'], $availability)) {
    $unit = array_replace($unit, $availability[$unit['name']]);
    $unit['t'] .= " ".join(" ", $unit['avail']);
  }
}

echo json_encode($json_a);
?>
