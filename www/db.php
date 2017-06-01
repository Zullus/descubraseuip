<?php

//Navegador
$browser 	= $_SERVER['HTTP_USER_AGENT'];

//Sessão
$id_sessao 	= session_id();

//Data
$data 		= date('d-m-Y H:i:s');

$connection = new Mongo();
$db = $connection->acessomeuip;

$collection = $db->logaacesso;

$logaacesso = array(
					'ip' => $ip,
					'ipreverso'	 => $hostname,
					'id_sessao'  => $id_sessao,
					'browser'	 => $browser,
					'data'		 => $data
					);

$collection->insert($logaacesso);
?>