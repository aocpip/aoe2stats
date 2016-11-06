<?php
include_once "inc/header.php";

$civ = "not found";
if(isset($_REQUEST['c'])) {
    $civ = $_REQUEST['c'];
}

$aocversion = "dlc";
if(isset($_REQUEST['v'])) {
    $aocversion = htmlspecialchars($_REQUEST['v']);
}

$filename = 'images/techtrees/'.$aocversion.'/'.$civ.'.html';
$civ_exists = file_exists($filename);


?>

<nav class="navbar navbar-inverse" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">AoC Stats</a>
            <p class="navbar-text navbar-left">Techtree - <?php echo htmlspecialchars($civ); ?></p>
        </div>
    </div>
</nav>
<?php
if($civ_exists) { 
?>
<div style="min-height: 320px">
    <div style="position:absolute; top: 58px; bottom: 132px; right: 16px; left: 16px; min-height: 320px">
        <iframe width="100%" height="100%" frameborder="0" 
                scrolling="no" marginheight="0" marginwidth="0" 
                src="<?php echo $filename; ?>">
        </iframe>
    </div>
</div>
<?php
} else {
    ?>
    <h2>Techtree not found.</h2>
<?php
}
include_once "inc/footer.php";
?>