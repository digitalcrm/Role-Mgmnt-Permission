<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


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
        /*First phase // one by one uncommented each one and run */
        //Role::create(['name'=>'writer']); //This will create a writer role
        //Permission::create(['name'=>'edit post']); // This will create edit post permission
        //auth()->user()->givePermissionTo('edit post'); //This will give permission to role
        //auth()->user()->assignRole('writer'); //This will give role to permission
        /*second phase*/
        $permission = Permission::create(['name'=>'write post']);
        $role = Role::findById(1);
        $role->givePermissionTo($permission);


        return view('home');
    }
}
