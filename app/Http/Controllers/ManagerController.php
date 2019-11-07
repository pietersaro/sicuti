<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AcceptEmail;
use App\Mail\DenyEmail;
use App\Mail\TestEmail;
use Mail;
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
		$id = $request->id_mohon_cuti;
		$cuti = MohonCuti::where('id_mohon_cuti', $id)->first();
	
		if ($cuti) {
			$cuti->persetujuan = 1;
			// $cuti->save();
			$messege = 'Berhasil Disetujui';
		}else{
			$messege = 'Data tidak ditemukan;';
		}

		$data['user'] = $cuti->user;
		$data['cuti'] = $cuti;

		// kirim Email
		Mail::to($cuti->user->email)->send(new AcceptEmail($data));

		return redirect('cuti/daftar-cuti')->with('success', $messege);
    }

    public function doDeny(Request $request)
    {
    	// Proses penerimaan cuti
		$id = $request->id_mohon_cuti;
		// dd($id);
		$cuti = MohonCuti::where('id_mohon_cuti', $id)->first();

		if ($cuti) {
			$cuti->persetujuan = 2;
			// $cuti->save();
			$messege = 'Cuti Telah di tolak';
		}else{
			$messege = 'Data tidak ditemukan;';
		}

		// kirim Email
		$data['user'] = $cuti->user;
		$data['cuti'] = $cuti;

		Mail::to($cuti->user->email)->send(new DenyEmail($data));

		return redirect('cuti/daftar-cuti')->with('success', $messege);
    }
}