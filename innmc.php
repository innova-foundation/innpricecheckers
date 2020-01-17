<?php

$url = "https://api.coinmarketcap.com/v1/ticker/innova/";

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$mc = $dataparsed[0]["market_cap_usd"];

$innmc = $mc;

?>

<?php print($innmc) ?>
