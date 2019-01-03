<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('menu_role')->get();
        if ($result->isEmpty()) {
            DB::table('menu_role')->insert([
                // Home Home page / icon-home4
                'menu_id' => DB::table('menu')->where('nome', 'Home')->value('id'),
                'role_id' => DB::table('roles')->where('name', 'Admin')->value('id'),
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
            DB::table('menu_role')->insert([
                // Menu System Menus /menu icon-menu2
                'menu_id' => DB::table('menu')->where('nome', 'Menu')->value('id'),
                'role_id' => DB::table('roles')->where('name', 'Admin')->value('id'),
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
            DB::table('menu_role')->insert([
                // User Users /user icon-user
                'menu_id' => DB::table('menu')->where('nome', 'User')->value('id'),
                'role_id' => DB::table('roles')->where('name', 'Admin')->value('id'),
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
