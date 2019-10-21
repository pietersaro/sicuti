<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuti;
use App\User;

class CutiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCuti()
    {
        $data['user'] = User::get(); 

        return view('list-cuti', $data);
    }

    public function detailCuti($id_user = null)
    {
    	if ($id_user) {
    		$user = User::where('id', $id_user)->first();
    	}else{
    		$user = new User();
    	}

    	$data['user'] = $user; 
    	return view('add-cuti', $data);
    }

    public function simpanCuti(Request $request, $id_cuti = null)
    {
        if ($id_cuti) {
            $cuti = Cuti::where('id_cuti', $id_cuti)->first(); 
        }else{
            $cuti = new Cuti();
        }

        $cuti->id_user = $request->id_user;
        $cuti->tahun = $request->tahun;
        $cuti->jenis = $request->jenis;
        $cuti->jumlah_cuti = $request->jumlah_cuti;
        $cuti->save();

        return redirect('cuti/form/'.$request->id_user);
    }

    public function getCuti()
    {
        return view('mohon-cuti');
    }

    public function historyCuti()
    {
        $data['user'] = User::get(); 

        return view('history-cuti', $data);
    }

    public function approvalCuti()
    {
        return view('approval-cuti');
    }
}
