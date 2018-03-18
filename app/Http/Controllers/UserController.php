<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Alert;
class UserController extends Controller
{
    //
    public function index()
    {
    	$user = User::all();
    	return view('sistem.user',compact('user'));
    }

    public function store(Request $request)
    {
    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	return redirect()->route('user.index');
    }

    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.index')->with([Alert::success('Berhasil Merubah Data User', 'Data Terubah!')]);
    }

    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect()->route('user.index')->with([Alert::success('Berhasil Menghapus Data User', 'Data Terhapus!')]);;
    }
}
