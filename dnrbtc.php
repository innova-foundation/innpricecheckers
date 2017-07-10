<?php

$url = "https://api.coinmarketcap.com/v1/ticker/denarius-dnr/";

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$lastbtcprice = $dataparsed[0]["price_btc"];

$dnrbtc = $lastbtcprice;

?>

<?php print($dnrbtc) ?>
