<?php

$changes_json = <<<JSON
{
	"Aztecs": {
		"ut": "Atlatl(Castle),<br /> Garland Wars(Imperial)",
		"bs": "<ul><li>villagers carry +5</li><li>Military units (except Monks) created 15% faster</li><li>+5 Monk hit points for each Monastery technology</li><li>Start with +50 gold</li></ul>",
		"tt": "aztecs"
	},
	"Britons": {
		"ut": "Yeomen(Castle),<br /> Warwolf(Imperial)",
		"tt": "britons"
	},
	"Byzantines": {
		"ut": "Greek Fire(Castle),<br /> Logistica(Imperial)",
		"tt": "byzantines"
	},
	"Celts": {
		"ut": "Stronghold(Castle),<br /> Furor Celtica(Imperial)",
		"tt": "celts"
	},
	"Chinese": {
		"ut": "Great Wall(Castle),<br /> Rocketry(Imperial)",
		"bs": "<ul><li>Start game with 3 extra villagers but -50 wood and -200 food.</li><li>Technologies cost -10% in Feudal Age, -15% in Castle Age,<br />-20% in Imperial Age.</li><li>Town Centers support 10 population instead of 5.</li><li>Town Center +5 LOS</li><li>Demolition Ships have +50% HP</li></ul>",
		"tt": "chinese"
	},
	"Franks": {
		"ut": "Chivalry(Castle),<br /> Bearded Axe(Imperial)",
		"bs": "<ul><li>Foragers work 25% faster</li><li>Castles are 25% cheaper.</li><li>Cavalry has +20% HP.</li><li>Farm upgrades are free (Mill is required to receive bonus).</li></ul>",
		"tt": "franks"
	},
	"Goths": {
		"tt": "goths"
	},
	"Huns": {
		"ut": "Marauders(Castle),<br /> Atheism(Imperial)",
		"bs": "<ul> <li>Houses are not required to support population, start game with -100 Wood.</li> <li>Cavalry Archers cost -10% in Castle Age, -20% in Imperial Age.</li> <li>Trebuchets are 35% more accurate.</li> </ul>",
		"tt": "huns"
	},
	"Japanese": {
		"ut": "Yasama(Castle),<br /> Kataparuto(Imperial)",
		"tt": "japanese"
	},
	"Koreans": {
		"ut": "Panokseon(Castle), Shinkichon(Imperial)",
		"tb": "Mangonel line minimum range reduced to 1 (from 3)",
		"bs": "<ul><li>Villagers have +3 line of sight.</li> <li>Stone miners work 20% faster.</li> <li>Guard Tower and Keep upgrades are free.</li> <li>Towers (except bombard towers) have +1 range in Castle Age, +2 in Imperial Age.</li><li>Walls, gates, castles are built 25% faster, towers 5% faster</ul>",
		"tt": "koreans"
	},
	"Mayans": {
		"ut": "Obsidian Arrow(Castle),<br /> El Dorado(Imperial)",
		"bs": "<ul><li>Start game with 1 extra villager, -50 food.</li> <li>Natural resources last 15% longer.</li> <li>Archers cost -10% in Feudal Age, -20% in Castle Age, -30% in Imperial Age.</li> </ul>",
		"tt": "mayans"
	},
	"Mongols": {
		"ut": "Nomads(Castle),<br /> Drill(Imperial)",
		"tt": "mongols"
	},
	"Persians": {
		"ut": "Boiling Oil(Castle),<br /> Mahouts(Imperial)",
		"tt": "persians"
	},
	"Saracens": {
		"ut": "Madrasah(Castle),<br /> Zealotry(Imperial)",
		"bs": "<ul> <li>Market costs -75W</li><li>Market trade cost is only 5%</li> <li>Transport Ships have 2x HP and carry capacity.</li> <li>Galleys attack 20% faster.</li> <li>Cavalry Archers have +4 attack bonus against buildings.</li> </ul>",
		"tt": "saracens"
	},
	"Spanish": {
		"ut": "Inquisition(Castle),<br /> Supremacy(Imperial)",
		"tt": "spanish",
		"tb": "Trade units generate +25% Gold"
	},
	"Teutons": {
		"ut": "Ironclad(Castle),<br /> Crenellations(Imperial)",
		"bs": "<ul> <li>Monks have 2x healing range.</li> <li>Towers can garrison 2x units (more arrows).</li> <li>Murder Holes is free.</li> <li>Farms cost 33% less.</li> <li>Town Centers garrison +10 units (total 25), total amount of arrows +5 (max 16).</li> </ul>",
		"tt": "teutons"
	},
	"Turks": {
		"ut": "Sipahi(Castle),<br /> Artillery(Imperial)",
		"tt": "turks",
		"bs": "<ul> <li>Gunpowder Units have +25% HP</li> <li>Gunpowder technologies cost 50% less</li> <li>Chemistry is free</li> <li>Gold miners work 20% faster</li> <li>Light Cavalry and Hussar upgrades are free</li> </ul>"
	},
	"Vikings": {
		"ut": "Chieftains(Castle),<br /> Berserkergang(Imperial)",
		"tb": "Docks are -15% cheaper",
		"bs": "<ul> <li>Warships cost -15% in Feudal/Castle, -20% in Imperial Age</li> <li>Infantry have +10% HP in Feudal Age, +15% in Castle Age, <br /> +20% in Imperial Age</li> <li>Wheelbarrow and Hand Cart are free</li> </ul>",
		"tt": "vikings"
	}
}
JSON;

$changes = json_decode($changes_json, true);

$new_civs_json = <<<JSON
[
	{
		"name": "Incas",
		"ver": "f", 
		"ct": "Infantry",
		"uu": "Kamayuk,<br /> Slinger(Archery Range)",
		"ut": "Andean Sling(Castle),<br /> Couriers(Imperial)",
		"tb": "Farms built 50% faster",
		"bs": "<ul> <li>Start with free llama</li><li>Villagers affected by blacksmith upgrades</li><li>Houses support 10 population</li><li>Buildings cost -15% stone</li> </ul>",
		"tt": "incas"
	},
	{
		"name": "Indians",
		"ver": "f", 
		"ct": "Camel and gunpowder",
		"uu": "Elephant Archer,<br /> Imperial Camel(Stable)",
		"ut": "Sultans(Castle),<br /> Shatagni(Imperial)",
		"tb": "Camels +6 attack vs buildings,<br /> Mamelukes and Camel Archers +5 vs buildings",
		"bs": "<ul> <li>Villagers Cost -10% in Dark, -15% in Feudal, -20% in Castle, -25% in Imperial</li><li>Fishermen(villagers) work 15% faster and carry +15</li><li>Camels +1/+1 armor</li> </ul>",
		"tt": "indians"
	},
	{
		"name": "Italians",
		"ver": "f", 
		"ct": "Archer and naval civilization",
		"uu": "Genoese Crossbowman,<br /> Condottiero(Barracks)",
		"ut": "Pavise(Castle),<br /> Silk Road(Imperial)",
		"tb": "Condottiero available in imperial barracks",
		"bs": "<ul> <li>Advancing to the next age costs -15%</li><li>Dock techs cost -50%</li><li>Fishing ships cost -11W</li><li>Gunpowder units cost -20%</li> </ul>",
		"tt": "italians"
	},
	{
		"name": "Magyars",
		"ver": "f", 
		"ct": "Cavalry civilization",
		"uu": "Magyar Huszar",
		"ut": "Mercenaries(Castle),<br /> Recurve bow(Imperial)",
		"tb": "Foot archers (not skirmishers) +2 LOS",
		"bs": "<ul> <li>Villagers kill wolves in 1 strike</li><li>Melee upgrades (forging, iron casting, blast furnace) in blacksmith free</li><li>Scout line costs -15%</li> </ul>",
		"tt": "magyars"
	},
	{
		"name": "Slavs",
		"ver": "f", 
		"ct": "Infantry and Siege",
		"uu": "Boyar",
		"ut": "Orthodoxy(Castle),<br /> Druzhina(Imperial)",
		"tb": "Military buildings (barracks, archery ranges, siege workshops and stables) provide +5 population",
		"bs": "<ul> <li>Farmers work ~15% faster</li><li>Tracking free</li><li>Siege units from siege workshop 15% cheaper</li> </ul>",
		"tt": "slavs"
	},
	{
		"name": "Portuguese",
		"ver": "a", 
		"ct": "Naval and Gunpowder",
		"uu": "Organ Gun, Caravel (dock)",
		"ut": "Carrack(Castle),<br /> Arquebus(Imperial)",
		"tb": "Free cartography from Dark Age",
		"bs": "<ul> <li>All units cost -15% gold (0.85*cost)</li> <li>All ships 1.1*HP (+10%)</li> <li> Get Feitoria </li> </ul>",
		"tt": "portuguese"
	},
	{
		"name": "Ethiopians",
		"ver": "a", 
		"ct": "Archer",
		"uu": "Shotel Warrior",
		"ut": "Royal Heirs(Castle),<br /> Torsion Engines(Imperial)",
		"tb": "Towers, outposts +3 LOS",
		"bs": "<ul> <li>Receive 100F 100G upon advancing to next age</li> <li>Pikeman upgrade free</li> <li>Foot archers reload time *0.85 (-15%)</li> </ul>",
		"tt": "ethiopians"
	},
	{
		"name": "Malians",
		"ver": "a", 
		"ct": "Infantry",
		"uu": "Gbeto",
		"ut": "Tigui(Castle),<br /> Farimba(Imperial)",
		"tb": "University works 1.8x faster (80% faster)",
		"bs": "<ul> <li>Barracks units get +1 pierce armor per age</li> <li>buildings (except Farms) wood cost *0.85 (15% cheaper)</li> <li>Free Gold Mining</li> </ul>",
		"tt": "malians"
	},
	{
		"name": "Berbers",
		"ver": "a", 
		"ct": "Cavalry and Naval",
		"uu": "Camel Archer, Genitour(archery range)",
		"ut": "Kasbah(Castle),<br /> Maghrabi Camels(Imperial)",
		"tb": "Genitour available in Archery Range",
		"bs": "<ul> <li>Villagers movement speed *1.1 (10% faster)</li> <li>Ships movement speed *1.1 (10% faster)</li> <li>Stable units cost *0.85 (15% cheaper) in Castle Age and *0.8 (20% cheaper) in Imperial Age</li></ul>",
		"tt": "berbers"
	},
	{
		"name": "Burmese",
		"ver": "a", 
		"ct": "Monk and Elephant",
		"uu": "Arambai",
		"ut": "Howdah(Castle),<br /> Manipur Cavalry(Imperial)",
		"tb": "Relics visible on map (3x3 square, all visible)",
		"bs": "<ul> <li>Free Lumbercamp upgrades</li> <li>Infantry +1 attack per Age (starting in Feudal)</li> <li>Monastery techs cost *0.5 (50% cheaper)</li></ul>",
		"tt": "burmese"
	},
	{
		"name": "Khmer",
		"ver": "a", 
		"ct": "Siege and Elephant",
		"uu": "Ballista Elephant",
		"ut": "Tusk Swords(Castle),<br /> Double Crossbow(Imperial)",
		"tb": "Scorpions +1 range",
		"bs": "<ul> <li>No buildings required to advance through Ages or unlock other buildings</li> <li>Battle Elephants speed *1.15 (15% faster)</li> <li>Villagers can garrison in Houses</li></ul>",
		"tt": "khmer"
	},
	{
		"name": "Malay",
		"ver": "a", 
		"ct": "Naval",
		"uu": "Karambit Warrior",
		"ut": "Thalassocracy(Castle),<br /> Forced Levy(Imperial)",
		"tb": "Docks 2x LOS",
		"bs": "<ul> <li>Advancing to ages 80% faster</li> <li>Fish Traps cost -33%</li> <li>Fish Traps provide unlimited food</li> <li>Battle Elephants cost *0.70 (30% cheaper)</li></ul>",
		"tt": "malay"
	},
	{
		"name": "Vietnamese",
		"ver": "a", 
		"ct": "Archer",
		"uu": "Rattan Archer, Imperial Skirmisher(archery range)",
		"ut": "Chatras(Castle),<br /> Paper Money(Imperial)",
		"tb": "Access to Imperial Skirmisher upgrade",
		"bs": "<ul> <li>Reveal enemy positions at game start</li> <li>Archery Range units +20% HP</li> <li>Free Conscription</li></ul>",
		"tt": "vietnamese"
	}
]
JSON;

$new_civs = json_decode($new_civs_json);

$string = file_get_contents("aoc_civilizations.json");
$json_a = json_decode($string, true);

foreach($json_a['data'] as &$civ) {
	if(array_key_exists($civ['name'], $changes)) {
		$civ = array_replace_recursive($civ, $changes[$civ['name']]);
	}
}

$json_a['data'] = array_merge($json_a['data'], $new_civs);	

echo json_encode($json_a);
?>