<?php

$url = "https://api.coinmarketcap.com/v1/ticker/innova/";

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$lastprice = $dataparsed[0]["price_usd"];

$innusd = $lastprice;

?>

<?php print($innusd) ?>
