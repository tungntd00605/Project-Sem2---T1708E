<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('tags')->truncate();
        \Illuminate\Support\Facades\DB::table('tags')->insert([
            [
                'id'=>1,
                'name'=>'CNTT',
                'description'=>'Infomation Technology',
                'image'=>'https://tweakyourbiz.com/wp-content/uploads/2018/05/shutterstock_318368642.jpg'
            ]
        ]);
    }
}
