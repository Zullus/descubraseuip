<?php

namespace App\Http\Controllers;

class AccessCountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function conunt($ip)
    {
        $access = \App\AccessCount::where('ip', $ip)->exists();

        if(!$access){

            $this->store($ip, 1);

            return 1;

        }

        $numberofaccess = \App\AccessCount::where('ip', $ip)->get();

        foreach ($numberofaccess as $n) {

            $count = $n->numberofaccess;
            $id    = $n->id;

        }

        $count = $count + 1;

       $this->update($id, $count);

        return $count;

    }

    private function store($ip, $numberofaccess){

        $access = new \App\AccessCount;

        $access->ip          = $ip;
        $access->numberofaccess = $numberofaccess;
        $access->save();

        return true;
    }

    private function update($id, $numberofaccess){

        $access = \App\AccessCount::find($id);

        $access->numberofaccess = $numberofaccess;
        $access->save();

        return true;
    }

}
