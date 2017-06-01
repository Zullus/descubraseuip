<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://meuip.php7/api/ip');
curl_setopt($ch, CURLOPT_GET, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$s = json_decode($result);

$ip = $s->ip;

$hostname = $s->ip_reverso;

?>