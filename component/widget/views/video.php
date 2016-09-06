<?php
use app\assets\AppAsset;
$bundle = AppAsset::register($this);
?>
<div
    style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-image: none; background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;">
    <video autoplay="" loop="" muted=""
           style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; width: 1351px; height: auto;">
        <source src="<?=$bundle->baseUrl?>/video/dhtb.mp4" type="video/mp4">

    </video>
</div>