<?php

$url = "https://api.coingecko.com/api/v3/simple/price?ids=innova&vs_currencies=eur";

$json = file_get_contents($url);
$dataparsed = json_decode($json, TRUE);

$lastprice = $dataparsed[0]["eur"];

$inneur = $lastprice;

?>

<?php print($inneur) ?>
