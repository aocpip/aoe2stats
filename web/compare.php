<?php
include_once "inc/header.php";


$aocversion = "aoc";
if(isset($_REQUEST['v'])) {
    $aocversion = $_REQUEST['v'];
}

define('ROW_TYPE', 0); 
define('ROW_NAME', 1); 
define('ROW_AGE', 2);
 
define('ROW_SOURCE', 1);

$MAX_COMPARE_COUNT = 4;



function format_default($data) {
    return $data;
}

function format_table($data) {
    $content = "<table class=\"detail-table table table-striped table-hover table-bordered\" width=\"100%\">";

    foreach($data as $key => $value) {
        $content .= "<tr><th>".$key."</th><td>".$value."</td></tr>";
    }

    $content .= "</table>";
    return $content;
}

function format_availability($data, $cssClass) {
    $content = "<div class=\"availability\">";

    foreach($data as $civ) {
        $content .= "<span class=\"".$cssClass."\">".$civ."</span>";
    }

    $content .= "</div>";
    return $content;
}

function format_version($data) {
    $LOGOS = array(
        'x'=> '<span class="version_icon icon_dlc"><span>DLC</span></span>',
        'k'=> '<span class="version_icon icon_kings"><span>AoK</span></span>',
        'c'=> '<span class="version_icon icon_conquerors"><span>AoC</span></span>',
        'f'=> '<span class="version_icon icon_forgotten"><span>AoF</span></span>',
        'a'=> '<span class="version_icon icon_african"><span>AoAK</span></span>',
    );

    return $LOGOS[$data];
}

function format_age($data) {
    $AGES = array('Dark', 'Feudal', 'Castle', 'Imperial');

    return $AGES[$data]." Age";
}

function format_available($data) {
    return format_availability($data, 'civ-avail');
}


function format_not_available($data) {
    return format_availability($data, 'civ-noavail');
}

function format_techtree($data) {
    global $aocversion;
    $content = "";
    if(!empty($data)) {
        $content .= "<a href=\"techtree.php?v={$aocversion}&c={$data}\" class=\"btn btn-default\" role=\"button\"><span class='glyphicon glyphicon-fullscreen'></span> open </a>";
        $content .= "<div style='min-height: 480px;height: 100%; margin-top: 8px'>";
        $content .= "<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"images/techtrees/{$aocversion}/{$data}.html\"></iframe>";
        $content .= "</div>";
    } else {

        $content .= "<a href=\"#\" class=\"btn btn-default disabled\" role=\"button\"><span class='glyphicon glyphicon-fullscreen'></span> open </a>";
    }
    return $content;
}

$COLUMNS_ORDER = array(
    'type' => "Type",
    'ct' => "Civilization type",
    'ver' => "Introduced in ",
    'age' => "Age",
    'cost' => "Cost",
    'hp' => "HP",
    'bt' => "Build time",
    'time' => "Research time",
    'speed' => "Gathering speed",
    'fr' => "Firing rate",
    'ad' => "Attack delay",
    'mr' => "Movement rate",
    'los' => "Line of sight",
    'ra' => "Range",
    'at' => "Attack",
    'ar' => "Armor (melee/pierce)",
    'extra' => "Extra",
    'civb' => "Civilization bonuses",
    'uu' => "Unique unit",
    'ut' => "Unique technology",
    'tb' => "Team bonus",
    'bs' => "Civilization bonuses",
    'tt' => "Techtree",
    'note' => "Note",
    'for' => "Technology for or Upgrades",
    'GA' => "Garrison or extra info",
    'avail' => "Available",
    'noavail' => "Not available"
    );

$COLUMNS_FORMAT = array(
    'type' => 'format_default',
    'ct' => 'format_default',
    'ver' => 'format_version',
    'age' => 'format_age',
    'cost' => 'format_default',
    'hp' => 'format_default',
    'bt' => 'format_default',
    'speed' => 'format_default',
    'time' => 'format_default',
    'fr' => 'format_default',
    'ad' => 'format_default',
    'mr' => 'format_default',
    'los' => 'format_default',
    'ra' => 'format_default',
    'at' => 'format_default',
    'ar' => 'format_default',
    'extra' => 'format_table',
    'uu' => 'format_default',
    'ut' => 'format_default',
    'tb' => 'format_default',
    'bs' => 'format_default',
    'civb' => 'format_table',
    'note' => 'format_default',
    'for' => 'format_default',
    'GA' => 'format_default',
    'avail' => 'format_available',
    'noavail' => 'format_not_available',
    'tt' => 'format_techtree'
    );

$NOT_FOUND = array('name' => 'Not Found');

$units = null;
$structures = null;
$technologies = null;
$civilizations = null;
$gatherings = null;

$rowIDs = array();
if(isset($_REQUEST['c'])) {
    $rows_coded = $_REQUEST['c'];
    $rows_exploded = explode(',', $rows_coded);
    $rowIDs = array_splice($rows_exploded, 0, $MAX_COMPARE_COUNT);
}



function load_unit($name, $age) {

    global $NOT_FOUND;
    global $units, $aocversion;
    
    if($units == null) {
        $string = file_get_contents("stats/build/".$aocversion."_units.json");
        $units = json_decode($string, true);
    }

    foreach($units['data'] as $unit) {
        if($unit['name'] == $name && $unit['age'] == $age) {
            return $unit;
        }
    }

    return $NOT_FOUND;
}

function load_structure($name, $age) {
    global $NOT_FOUND;
    global $structures, $aocversion;
    
    if($structures == null) {
        $string = file_get_contents("stats/build/".$aocversion."_structures.json");
        $structures = json_decode($string, true);
    }

    foreach($structures['data'] as $structure) {
        if($structure['name'] == $name && $structure['age'] == $age) {
            return $structure;
        }
    }

    return $NOT_FOUND;
}

function load_technology($name, $age) {

    global $NOT_FOUND;
    global $technologies, $aocversion;
    
    if($technologies == null) {
        $string = file_get_contents("stats/build/".$aocversion."_technologies.json");
        $technologies = json_decode($string, true);
    }

    foreach($technologies['data'] as $technology) {
        if($technology['name'] == $name && $technology['age'] == $age) {
            return $technology;
        }
    }

    return $NOT_FOUND;
}


function load_gathering($source) {

    global $NOT_FOUND;
    global $gatherings, $aocversion;
    
    if($gatherings == null) {
        $string = file_get_contents("stats/build/".$aocversion."_gathering.json");
        $gatherings = json_decode($string, true);
    }

    foreach($gatherings['data'] as $gathering) {
        if($gathering['source'] == $source) {
            $gathering['name'] = $source;
            return $gathering;
        }
    }

    return $NOT_FOUND;
}


function load_civilization($name) {

    global $NOT_FOUND;
    global $civilizations, $aocversion;
    
    if($civilizations == null) {
        $string = file_get_contents("stats/build/".$aocversion."_civilizations.json");
        $civilizations = json_decode($string, true);
    }

    foreach($civilizations['data'] as $civilization) {
        if($civilization['name'] == $name) {
            return $civilization;
        }
    }

    return $NOT_FOUND;
}


function load_row($rowID) {
    global $NOT_FOUND;
    $explodedID = explode("_", $rowID);

    $data = $NOT_FOUND;
    switch($explodedID[ROW_TYPE]) {
        case 'u':
            $data = load_unit($explodedID[ROW_NAME], $explodedID[ROW_AGE]);
            break;
        case 's':
            $data = load_structure($explodedID[ROW_NAME], $explodedID[ROW_AGE]);
            break;
        case 't':
            $data = load_technology($explodedID[ROW_NAME], $explodedID[ROW_AGE]);
            break;
        case 'g':
            $data = load_gathering($explodedID[ROW_SOURCE]);
            break;
        case 'c':
            $data = load_civilization($explodedID[ROW_NAME]);
            break;
    }

    return $data;
}

$rows = array();

//process the rows
foreach($rowIDs as $rowID) {
    $current_row = load_row($rowID);
    $rows[] = $current_row;
}
//get the available columns
?>
<script src="js/compare.js?<?php echo STATS_VERSION;?>"></script>

<nav class="navbar navbar-inverse" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">AoC Stats</a>
            <p class="navbar-text navbar-left">Comparison</p>
        </div>
    </div>
</nav>

<div class="container">
<table class="table table-striped table-hover stickyHeader text-center">
    <thead>
        <tr>
            <th class="text-center">Name</th>
            <?php
            foreach($rows as $row) {
                echo "<th class=\"text-center\">".$row['name']."</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($COLUMNS_ORDER as $column_code => $column_name) {
            $table_row = "<tr><th class=\"text-center inverse\">".$column_name."</th>";
            $show_row = false;
            foreach($rows as $row) {
                if(isset($row[$column_code])) {
                    $table_row .= "<td>".call_user_func_array($COLUMNS_FORMAT[$column_code], array($row[$column_code]))."</td>";
                    $show_row = true;
                } else {
                    $table_row .= "<td></td>";
                }
            }
            $table_row .= "</tr>";

            if($show_row) {
                echo $table_row;
            }
        }
        ?>
    </tbody>
</table>
</div>

<?php
include_once "inc/footer.php";
?>