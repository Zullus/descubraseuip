<?php

namespace App\Http\Controllers;

class IPController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private function getIP()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        return $ip;


    }

    private function getHostname($ip){

    	if($ip == ''){

    		$ip = $this->getIP();
    	}

    	$hostname = gethostbyaddr($ip);

    	return $hostname;
    }

    public function index(){

    	$ip = $this->getIP();

    	$hostname = $this->getHostname($ip);

    	$saida = array('ip' => $ip, 'ip_reverso' => $hostname);

    	$saida = json_encode($saida);

    	echo $saida;
    }
}