<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function beranda(Request $request)
    {
        return view ('main.beranda');
    }    
    public function tt()
    {
        return view ('main.tt');
    }
    
    public function rujukan()
    {
        $rs = DB::table('rs')->get();
        return view ('main.rujukan',['rs'=>$rs]);
    }
    
    public function kebijakan()
    {
        return view ('main.kebijakan');
    }

    public function tentang()
    {
        return view ('main.tentang');
    }

}
