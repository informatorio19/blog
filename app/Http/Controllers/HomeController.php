<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'admin']);

        // $role = Role::findByName('admin');
        // $permission = Permission::create(['name' => 'crear post']);

        // $role->givePermissionTo($permission);

        // $user = Auth::user();
        // $user->assignRole($role);

        return view('home');
    }
}
