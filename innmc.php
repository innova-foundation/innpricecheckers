<?php

$url = "https://api.coingecko.com/api/v3/simple/price?ids=innova&vs_currencies=usd%2Ceur%2Cbtc&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true&include_last_updated_at=true";

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$mc = $dataparsed[0]["market_cap_usd"];

$innmc = $mc;

?>

<?php print($innmc) ?>
