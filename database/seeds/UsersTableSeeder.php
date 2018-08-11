<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'id'=>1,
                'email'=>'root',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ]
        ]);
    }
}
