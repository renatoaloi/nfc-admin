<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('menu')->get();
        if ($result->isEmpty()) {
            DB::table('menu')->insert([
                // Home Home page / icon-home4
                'nome' => 'Home',
                'descricao' => 'Home page',
                'link' => '/',
                'icone' => 'icon-home4',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]); 
            DB::table('menu')->insert([
                // Menu System Menus /menu icon-menu2
                'nome' => 'Menu',
                'descricao' => 'System Menus',
                'link' => '/menu',
                'icone' => 'icon-menu2',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
            DB::table('menu')->insert([
                // User Users /user icon-user
                'nome' => 'User',
                'descricao' => 'Users',
                'link' => '/user',
                'icone' => 'icon-user',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
