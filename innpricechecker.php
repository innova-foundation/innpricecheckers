<?php

$url = "https://api.coingecko.com/api/v3/simple/price?ids=innova&vs_currencies=usd%2Ceur%2Cbtc&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true&include_last_updated_at=true";

/* gets the data from a URL */
function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$lastprice = $dataparsed[0]["usd"];
$lastbtcprice = $dataparsed[0]["btc"];

$innusd = $lastprice;
$innbtc = $lastbtcprice;

?>

<ul>
<li>INN/USD: $ <?php print($innusd) ?></li>
<li>INN/BTC: <?php print($innbtc) ?> BTC</li>
</ul>
