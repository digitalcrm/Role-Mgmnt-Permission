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
        /*First phase // one by one uncommented each one and run 
        Role::create(['name'=>'writer']); //This will create a writer role
        Role::create(['name'=>'editor']);
        Role::create(['name'=>'publisher']);
        Role::create(['name'=>'admin']);
        Permission::create(['name'=>'write post']); // This will create edit post permission
        Permission::create(['name'=>'edit post']);
        Permission::create(['name'=>'publish post']);*/

       // auth()->user()->givePermissionTo('write post');//model has permission 
        //auth()->user()->assignRole('write'); //This will give role to permission
        /*second phase*/
        //$permission = Permission::create(['name'=>'write post']);
       /* Role Has //$role = Role::findById(4);
       $role->givePermissionTo('publish post'); Role has permission */
       //auth()->user()->assignRole('admin');//Model_has_permission
        return view('home');
    }
}
