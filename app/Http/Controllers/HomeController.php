<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Mail;
use App\User;
use App\Cuti;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function addUser()
    {
        return view('add-user');
    }

    public function getProfile()
    {
        $data['user'] = User::get(); 

        return view('profile', $data);
    }
        /*public function detailUser($id=null)
    {
        if ($id) {
            $data['user'] = User::where('id', $id)->first();
        }else{
            $data['user'] = new User;
        }

        return view('add-user', $data);
    }*/

    public function getPengumuman()
    {
        return view('pengumuman');
    }

    public function tesEmail()
    {
        # code...
        Mail::to('giyazhaycal@gmail.com')->send(new TestEmail());
    }
}
