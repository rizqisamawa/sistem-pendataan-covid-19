<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\odpExport;
use App\Exports\pdpExport;
use App\Exports\positifExport;
use Maatwebsite\Excel\Facades\Excel;
use App\odp;
use App\pdp;
use App\positif;

class AdminController extends Controller
{
    public function todp()
    {
        $odp = DB::table('odp')->get();
        return view ('admin.todp',['odp'=>$odp]);
    }
    public function odp(Request $request)
    {
        DB::table('odp')->insert
        ([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'kelamin' => $request->kelamin,
            'alamat' => $request->alamat,
            'tgl_konfirmasi' => $request->tgl_konfirmasi,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/todp');
    }
    public function hodp($idodp)
    {
        DB::table('odp')->where('id',$idodp)->delete();
        return redirect('/todp');
    }

    public function tpdp()
    {
        $pdp = DB::table('pdp')->get();
        return view ('admin.tpdp',['pdp'=>$pdp]);
    }
    public function pdp(Request $request)
    {
        DB::table('pdp')->insert
        ([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'kelamin' => $request->kelamin,
            'alamat' => $request->alamat,
            'tgl_konfirmasi' => $request->tgl_konfirmasi,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/tpdp');
    }
    public function hpdp($idpdp)
    {
        DB::table('pdp')->where('id',$idpdp)->delete();
        return redirect('/tpdp');
    }

    public function tpositif()
    {
        $positif = DB::table('positif')->get();
        return view ('admin.tpositif',['positif'=>$positif]);
    }
    public function positif(Request $request)
    {
        DB::table('positif')->insert
        ([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'kelamin' => $request->kelamin,
            'alamat' => $request->alamat,
            'tgl_konfirmasi' => $request->tgl_konfirmasi,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/tpositif');
    }
    public function hpositif($idpositif)
    {
        DB::table('positif')->where('id',$idpositif)->delete();
        return redirect('/tpositif');
    }

    public function trujukan()
    {
        $rs = DB::table('rs')->get();
        return view ('admin.trujukan',['rs'=>$rs]);
    }
    public function prujukan(Request $request)
    {
        DB::table('rs')->insert
        ([
            'nama_rs' => $request->nama_rs,
            'alamat' => $request->alamat,
            'nomor' => $request->nomor,
        ]);
        return redirect('/trujukan');
    }
    public function hrs($idrs)
    {
        DB::table('rs')->where('id',$idrs)->delete();
        return redirect('/trujukan');
    }

    public function exodp()
    {
	    return Excel::download(new odpExport, 'Data_ODP.xlsx');
    }
    public function expdp()
    {
	    return Excel::download(new pdpExport, 'Data_PDP.xlsx');
    }
    public function expositif()
    {
	    return Excel::download(new positifExport, 'Data_Positif.xlsx');
    }
}
