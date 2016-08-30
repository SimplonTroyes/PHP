<?php
require('class/Class.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wild'n Trekking</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,600' rel='stylesheet' type='text/css' media="screen">
    <link href='http://fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="<?=nomPageActive();?>">

<div id="menu">
    <?php include('menu.php'); ?>
</div>

<div id="contenu1">
    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
        <?=affichageTexteMisEnForme();?>

</div>


</body>
</html>
