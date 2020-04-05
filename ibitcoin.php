<?php

$url = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd";

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$lastprice = $dataparsed["bitcoin"]["usd"];

$bitcoin = $lastprice;

?>

<?php print($bitcoin) ?>
