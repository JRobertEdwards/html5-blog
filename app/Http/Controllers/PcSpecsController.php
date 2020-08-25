<?php

namespace App\Http\Controllers;

use App\PcSpecs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PcSpecsController extends BaseController
{
    public function getPcSpecs()
    {
        $pcSpecs = PcSpecs::all();
        return view("about", ['photoName' => env('PHOTO_NAME_ABOUT')])->with('pcSpecs',$pcSpecs);
    }
}
