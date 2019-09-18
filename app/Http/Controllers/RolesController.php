<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index(){
        $roles = DB::table('roles')->get();
        return view('admin.roles',compact('roles'));
    }

    public function store(Request $request){
        Role::create(['name'=>$request->nombre]);
        return redirect()->route('roles.index');
    }

    public function edit($id){
       $role = Role::find($id);
       $permisos = Permission::all();

       return view('admin.roles.edit',compact('role','permisos'));
    }

    public function update(Request $request, $id){
        $role = Role::find($id);
        $role->syncPermissions($request->permisos);

        // $user = Auth::user();
        // $user->assignRole($role);
    }
}
