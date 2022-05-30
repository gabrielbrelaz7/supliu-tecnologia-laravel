<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Albun;

class HomepageController extends Controller
{
    public function index() {

        $albuns = Albun::all();
        return view('albuns', ['albuns' => $albuns]);   
         
    }


}
