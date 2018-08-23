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
            ],
            [
                'id'=>2,
                'email'=>'2doudou.klaip@tyeo.ga',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>3,
                'email'=>'yassir_koyokol@tert353ayre6tw.ml',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>4,
                'email'=>'3master@drovi.cf',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>5,
                'email'=>'0billawalmushtaq4@dlpt7ksggv.tk',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>6,
                'email'=>'3hous1@jokenaka.press',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>7,
                'email'=>'sdody_carlosw@8pukcddnthjql.ga',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>8,
                'email'=>'imeust.ozil.908v@a02sjv3e4e8jk4liat.tk',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>9,
                'email'=>'jsam@jembut142.cf',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
            [
                'id'=>10,
                'email'=>'cyanus.gituui@rockkes.us',
                'password'=>\Illuminate\Support\Facades\Hash::make('root')
            ],
        ]);
    }
}
