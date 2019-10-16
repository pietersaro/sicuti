<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuti;

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

    public function detailCuti($id_cuti = null)
    {
    	if ($id_cuti) {
    		$cuti = Cuti::where('id_cuti', $id_cuti)->first();
    	}else{
    		$cuti = new Cuti();
    	}

    	$data['cuti'] = $cuti; 
    	return view('add-cuti', $data);
    }

        /*public function simpanCuti(Request $request, $id_cuti = null)
    {
        if ($id_cuti) {
            $cuti = Cuti::where('id_cuti', $id_cuti)->first(); 
        }else{
            $cuti = new Cuti;
        }

        $cuti->id_cuti = $request->id_cuti;
        $cuti->id = $request->id;
        $cuti->sisa_cuti = $request->sisa;
        $cuti->dari = $request->dari;
        $cuti->sampai = $request->sampai;
        $cuti->save();

        return redirect('cuti/form');
    }*/
}
