<?php
//IP
$ip = $_SERVER['REMOTE_ADDR'];

//Ip Reverso
$hostname = gethostbyaddr($ip);

//Navegador
$browser    = $_SERVER['HTTP_USER_AGENT'];

$data_post = array('ip' => $ip, 'hostname' => $hostname, 'useragent' => $browser, 'accessform' => 'siteteste');
//$data_post = array('useragent' => '', 'accessform' => '');
//$data_post = array();

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, HOSTAPI);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$s = json_decode($result);

$ip = $s->ip;

$hostname = $s->ip_reverso;

?>
