<?php

namespace App\Providers;
use App\User;
use App\Menu;
//use Illuminate\Support\ServiceProvider;

class MenuServiceProvider //extends ServiceProvider
{
    
    /**
     * Render the menu
     *
     * @return string?
     */
    public function render($idUser)
    {
        $role = User::find($idUser)->role;
        return $role->menus;
        //echo "aqui vai o menu do id user: " . 
        //        $idUser . " do Role: "; // . $role->name;
        //die;

        //
        //return Menu::all();
    }
}
