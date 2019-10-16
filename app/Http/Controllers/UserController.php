<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function detailUser($id=null)
    {
        if ($id) {
            $data['user'] = User::where('id', $id)->first();
        }else{
            $data['user'] = new User;
        }

        return view('add-user', $data);
    }

    public function simpanUser(Request $request, $id = null)
    {
        if ($id) {
            $user = User::where('id', $id)->first(); 
        }else{
            $user = new User;
        }

        $user->name = $request->nama;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('user/form');
    }

    public function showUser()
    {
        $data['user'] = User::paginate(2);

        return view('list-users', $data);
    }
}
