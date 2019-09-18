<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermisosController extends Controller
{
    public function index(){
        $permisos = DB::table('permissions')->get();
        return view('admin.permisos',compact('permisos'));
    }

    public function store(Request $request){
        Permission::create(['name'=>$request->nombre]);
        return redirect()->route('permisos.index');
    }
}
