<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('roles')->get();
        if ($result->isEmpty()) {
            DB::table('roles')->insert([
                'name' => 'Admin',
                'description' => 'System Administrator',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
            DB::table('roles')->insert([
                'name' => 'Regular',
                'description' => 'Regular User',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
