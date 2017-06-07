<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\IPController as IPController;

class AccessLogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $IPController;

    function __construct(IPController $IPController)
    {
        $this->IPController = $IPController;
    }


    public function index(Request $request)
    {
        $input = $request->all();

        if(isset($input['ip']) && isset($input['hostname']) && isset($input['useragent']) && isset($input['accessform'])){

            if($input['useragent'] == '' || $input['accessform'] == ''){

                $s = $this->IPController->arrayforexit('', '', '', 'Os campos devem ser todos preencidos!');

                echo json_encode($s);

           }

           else{

                $ip = $this->IPController->index($input['ip'], $input['hostname']);

                $access = new \App\AccessLog;

                //$access->fill($request);
                $access->ip         = $ip['ip'];
                $access->reverseip  = $ip['ip_reverso'];
                $access->accessform = $input['accessform'];
                $access->useragent  = $input['useragent'];

                $access->save();

                echo json_encode($ip);

            }
        }
        else{

             $s = $this->IPController->arrayforexit('', '', '', 'Os campos devem ser enviados!');

            echo json_encode($s);
        }
    }
}
