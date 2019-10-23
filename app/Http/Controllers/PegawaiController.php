<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuti;
use App\User;
use App\MohonCuti;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCuti(Request $req)
    {
        $user = $req->user();
        $data['jenis'] = Cuti::where('id_user', $user->id)->where('tahun', date('Y'))->get();
        // dd($data['jenis']);
        return view('mohon-cuti', $data);
    }

    public function historyCuti(Request $req)
    {
        // dd($req->user());
        $user = $req->user();
        $data['cuti'] = MohonCuti::where('id_user', $user->id)->get();
        
        return view('history-cuti', $data);
    }

    public function simpanCuti(Request $request)
    {
        $start = strtotime($request->dari);
        $end = strtotime($request->sampai);

        $user = $request->user();
        $cuti = new MohonCuti();
        $cuti->id_cuti = $request->jenis;
        $cuti->id_user = $user->id;
        $cuti->dari = date('Y-m-d', $start);
        $cuti->sampai = date('Y-m-d', $end);
        $cuti->alasan = $request->alasan;
        $cuti->jml_hari = $request->jumlah;
        $cuti->save();

        return redirect('cuti/history-cuti');

    }
}
