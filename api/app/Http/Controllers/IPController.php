<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AccessCountController as AccessCountController;

class IPController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $AccessCountController;

    function __construct(AccessCountController $AccessCountController)
    {
        $this->AccessCountController = $AccessCountController;
    }

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

    private function exitmsg($count){
        if($count == 1){

            $msg = 'Esse IP foi verificado uma vez';

        }
        else{

            $msg = 'Esse ip já foi verificado ' . $count . ' vezes';
        }

        return $msg;
    }

    public function arrayforexit($ip, $hostname, $acceessMsg, $err = ''){

        $saida = array(
                        'ip' => $ip,
                        'ip_reverso' => $hostname,
                        'acessos' => $acceessMsg,
                        'erro' => $err,
                        'agradecimento' => 'Obriagdos por usar o Meu IP XS Informática'
                        );

        return $saida;
    }

    public function index($ip = '', $hostname = ''){

        if($ip == ''){

            $ip = $this->getIP();

        }

        if($hostname == ''){

            $hostname = $this->getHostname($ip);

        }

        $count = $this->AccessCountController->conunt($ip);

        $acceessMsg = $this->exitmsg($count);

        $saida = $this->arrayforexit($ip, $hostname, $acceessMsg);

        return $saida;
    }
}
