<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class MenuController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Auth::user()->authorizeRoles('Admin');
        //echo \Illuminate\Support\Facades\Auth::user()->id; //authorizeRoles('Admin');
        
        $user = User::find(\Illuminate\Support\Facades\Auth::user()->id);
        //$user->authorizeRoles('Admin');
        
        //return 'teste';
        $menus = Menu::all();
        return view('menu.index')->with('menus', $menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->nome = $request->input('name');
        $menu->descricao = $request->input('description');
        $menu->link = $request->input('link');
        $menu->icone = $request->input('icon');
        $menu->save();
        return redirect('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('menu.edit')->with('menu', $menu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //echo "ID: " . ($request->get('id'));die;
        //print_r($request);die;
        //$menu-
        $menu = Menu::find($id);
        $menu->nome = $request->input('name');
        $menu->descricao = $request->input('description');
        $menu->link = $request->input('link');
        $menu->icone = $request->input('icon');
        $menu->save();
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
    
    public function roles($id)
    {
        $menu = Menu::find($id);
        $roles = Role::all();
        return view('menu.roles')->with('menu', $menu)->with('roles', $roles);
    }
    
    public function roles_update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $roles = $request->input('role_id');
        $menu->roles()->sync($roles);
        return redirect()->back()->with('message', 'Roles for menu #' . $id . ' updated with success!');
        //print_r(implode(',', $roles));die;
        //echo count($roles);die;
        //foreach ($roles as $role) echo $role . "<BR>";
    }
}
