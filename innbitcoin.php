<?php

$url = "https://api.coingecko.com/api/v3/simple/price?ids=innova&vs_currencies=btc&include_market_cap=false&include_24hr_vol=false&include_24hr_change=false&include_last_updated_at=false";

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$lastbtcprice = $dataparsed[0]["btc"];

$innbtc = $lastbtcprice;

?>

<?php print($innbtc) ?>
