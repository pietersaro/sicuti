<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuti;
use App\User;
use App\MohonCuti;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function daftarCuti()
    {
    	$data['title'] = 'Daftar Cuti';
    	$data['cuti'] = MohonCuti::get();

        return view('daftar-cuti', $data);
    }

	public function getProsesCuti($id)
	{
		$data['cuti'] = MohonCuti::where('id_mohon_cuti', $id)->first();

		return view('proses-cuti', $data);
	}

    public function doApprove(Request $request)
    {
		// Proses penerimaan cuti
		$id = $request->id_pegawai;
		$cuti = MohonCuti::where('id_mohon_cuti', $id)->first();

		if ($cuti) {
			$cuti->persetujuan = 1;
			$cuti->save();
			$messege = 'Berhasil Disetujui';
		}else{
			$messege = 'Data tidak ditemukan;';
		}

		return redirect('cuti/daftar-cuti')->with('success', $messege);
    }

    public function doDeny(Request $request)
    {
    	// Proses penerimaan cuti
		$id = $request->id_pegawai;
		// dd($id);
		$cuti = MohonCuti::where('id_mohon_cuti', $id)->first();

		if ($cuti) {
			$cuti->persetujuan = 2;
			$cuti->save();
			$messege = 'Cuti Telah di tolak';
		}else{
			$messege = 'Data tidak ditemukan;';
		}

		return redirect('cuti/daftar-cuti')->with('success', $messege);
    }
}