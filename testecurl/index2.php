<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ajuda.locaweb.com.br/wiki/curl/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
?>
