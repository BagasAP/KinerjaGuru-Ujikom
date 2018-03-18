<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Alert;
class RoleController extends Controller
{
    //
	public function index()
    {
    	$role = Role::all();
    	return view('sistem.role',compact('role'));
    }

    public function store(Request $request)
    {
            $role = new Role();
            $role->name = $request->name;			
            $role->display_name = $request->display_name;
            $role->save();

            return redirect()->route('role.index')->with([Alert::success('Berhasil Menyimpan Data Role', 'Di Simpan!')]);
    }
}
