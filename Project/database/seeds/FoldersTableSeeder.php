<?php

use Illuminate\Database\Seeder;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('folders')->truncate();
        \Illuminate\Support\Facades\DB::table('folders')->insert([
            [
                'id'=>1,
                'name'=>'root',
                'parentId'=> 1,
                'userId'=>1,
            ]
        ]);
    }
}
