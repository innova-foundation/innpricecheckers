<?php

$url = "https://api.coinmarketcap.com/v1/ticker/innova/";

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

$lastprice = $dataparsed[0]["price_usd"];
$lastbtcprice = $dataparsed[0]["price_btc"];

$innusd = $lastprice;
$innbtc = $lastbtcprice;

?>

<ul>
<li>INN/USD: $ <?php print($innusd) ?></li>
<li>INN/BTC: <?php print($innbtc) ?> BTC</li>
</ul>
