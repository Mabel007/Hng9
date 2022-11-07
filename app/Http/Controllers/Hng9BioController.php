<?php

namespace App\Http\Controllers;

use App\Models\Hng9bio;
use Illuminate\Http\Request;

class Hng9BioController extends Controller
{
    //
    public function createHngBio()
    {
        Hng9bio::create([
            "slackUsername" => "chrisBarbz",
            "backend" => 1,
            "age" => 26,
            "bio" => "An aspiring Software Engineer from Sierra Leone, looking forward to dive deep into the tech world, identify problems and proffer solutions.",
        ]);
    }
    public function hngBio()
    {
        $bios = Hng9bio::select('slackUsername','backend', 'age', 'bio')->get()->toArray();
        // dd($bios);
        foreach($bios as $bio){
            if($bio['backend']==1){
                $bio['backend']=true;
            }         
            return response()->json($bio);
        }
    }
}
