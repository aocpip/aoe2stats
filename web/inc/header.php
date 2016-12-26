<?php
define("STATS_VERSION", "0.9.2");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/vendor.min.css?<?php echo STATS_VERSION;?>">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo STATS_VERSION;?>">
    <script src="js/vendor.js?<?php echo STATS_VERSION;?>"></script>
    <title>AoCStats: Age of Empires 2 Statistics</title>
    <link rel="icon" type="image/png" href="favicon.png">

    <script>    
    if(typeof Cookies.get("version") === "undefined" || Cookies.get("version") != '<?php echo STATS_VERSION;?>') {
        Cookies.set("version", '<?php echo STATS_VERSION;?>');
        document.location.reload(true);
    }
    </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66185262-1', 'auto');
  ga('send', 'pageview');

var resizeId = null;
</script>

</head>
<body>

<div class="wrapper clearfix">
