<?php

$changes_json = <<<JSON
{
	 "Fish traps with japanese": {
			"speed": "0.325 - 0.365 F/s",
			"note": "Usually used fish has run out. Gives quite good wood to food ratio. Japanese get faster fishing ship by 5% in each age. Experimental results - 0.325 F/s in Dark, 0.338 F/s in Feudal, 0.351 F/s in Castle and 0.365 F/s in Imperial age. Thanks to Jineapple for the <a href=\"http://aoczone.net/viewtopic.php?f=186&t=116696&p=460336#p460077\">tests</a>. The new \"Gillnets\" technology in Castle Age increases this by 25%."
		},
	 "Fish traps": {
		"speed": "0.311 F/s",
		"note": "Usually used fish has run out. Gives quite good wood to food ratio. In realistic tests 0.311. Thanks to Jineapple for the <a href=\"http://aoczone.net/viewtopic.php?f=186&t=116696&p=460336#p460077\">tests</a>. The new \"Gillnets\" technology in Castle Age increases this by 25%."
		},
	"Sheep/Turkey/Cow": {
			"source": "Livestock",
			"note": "Includes sheep, turkey, cow and goat. Livestock have a interesting attribute: they can be positioned underneath the Town Center, nullifying the walk time. Usually only two livestock are placed in the Town Center per time (yes, this requires some micromanagement and experience). Probably, the only downside is that you have to search for them."
		}, 
	"Sheep/Turkey/Cow with Britons": {
		"source": "Livestock with Britons",
		"note": "Includes sheep, turkey, cow and goat. Livestock are specially important for Britons. Finding about 12-14 livestock on land nomad can be enough for them to very quickly reach the Castle Age."
	},

	"Boars": {
		"source": "Eatable predators",
		"note": "Includes wild boars and elephants. These animals fight back when attacked, althought they rush the villagers who shot at them blindly. This way they can be lured to the Town Center to nullify the walking time, pretty much like livestock, except that you cannot actively control them. Most random maps have 2 of them close to your city, which are very useful. Usually the Loom technology is researched prior to hunting them, to decrease the risk of losing a precious villager that early in the game. (Althought there are some players that to do this without Loom)."
	},
	"Boars with Mongols": {
		"source": "Eatable predators with Mongols",
		"note": "Includes wild boars and elephants. Mongol hunters receive a bonus to gather food faster from these animals."
	},
	"Deer": {
		"source": "Prey animals",
		"note": "Include deer, zebras and ostriches. These animals, unlike predators, flee when attacked, or when a unit comes near them. Because of this attribute, it's quite difficult to lure them closer to the Town Center, althought a Scout can do the trick. But, usually, players build a Mill close to the pocket. There are usually 2 pockets of prey per player in a random game."
	},
	"Deer with Mongols":{
		"source": "Prey animals with Mongols",
		"note": "Include deer, zebras and ostriches. Mongol hunters receive a bonus to gather food faster from these animals."
	},
	"Farming with Mayans" : {
		"speed": "0.281 F/s",
		"note": "This is a more recent test done by Spirit of the Law (<a href='https://www.youtube.com/watch?v=GRutI6IMjkY'>link</a>). The mayan bonus was changed with the dlc extensions. With wheelbarrow this value is 0.315 F/s, which is around the same speed as any other civ without wheelbarrow."
	},
	"Mining with Turks": {
		"speed": "0.455 G/s",
		"note": "Turks get 20 % gold mining bonus (gold mining work rate x 1.2)"
	}
}
JSON;

$changes = json_decode($changes_json, true);

$new_gather_json = <<<JSON
[
	{
		"type": "Food",
		"source": "Foraging with Franks",
		"speed": "0.3875 F/s",
		"note": "Franks get a 25% faster berrie gathering. This bonus makes it faster than gathering food from sheep."
	},
	{
		"type": "Food",
		"source": "Fishing with villagers with Indians",
		"speed": "0.4945 F/s",
		"note": "Indians get a 15% gathering bonus. Their fishermen can also carry +15 food, so a total of 25 food"
	},
	{
		"type": "Food",
		"source": "Farming with slavs",
		"speed": "0.354 F/s",
		"note": "This is not tested properly only based on relative efficiency and bonus of 1.31 farmer work rate. From the data files farm workers work at 0.53F/s. With 31% bonus 0.6943F/s. The effective gathering rate is also affected by walk times. 10 food is gathered theoretically 18.8 seconds. Effectively in 31.3 seconds. That means 12.5 seconds walking time. With slav bonus 10 food is gathered in 14.4 seconds. Effectively that means 14.4+12.5= 26.9s for 10 food = 0.358 F/s. That would mean ~12.5%. In the tech details they show 15% bonus. According to Spirit of the Law's tests (<a href='https://www.youtube.com/watch?v=GRutI6IMjkY'>link</a>) it's 0.354 F/s, so let's use that!"
	},
	{
		"type": "Food",
		"source": "Farming with berbers",
		"speed": "0.315 F/s",
		"note": "This was tested by Spirit of the Law (<a href='https://www.youtube.com/watch?v=GRutI6IMjkY'>link</a>). Berbers get only a slight improvement 1-3% on farming, so their faster walking villagers doesn't affect the farming speed much."
	}
]
JSON;

$new_gather = json_decode($new_gather_json);

$string = file_get_contents("aoc_gathering.json");
$json_a = json_decode($string, true);

foreach($json_a['data'] as &$gathering) {
	if(array_key_exists($gathering['source'], $changes)) {
		$gathering = array_replace_recursive($gathering, $changes[$gathering['source']]);
	}
}

$json_a['data'] = array_merge($json_a['data'], $new_gather);	

echo json_encode($json_a);
?>