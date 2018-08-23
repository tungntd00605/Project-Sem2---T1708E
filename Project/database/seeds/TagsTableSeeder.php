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
                'id' => '1',
                'name' => 'CNTT',
                'description' => 'Infomation Technology',
                'image' => 'https://tweakyourbiz.com/wp-content/uploads/2018/05/shutterstock_318368642.jpg',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'id' => '2',
                'name' => 'Toan',
                'description' => 'Mon Toan',
                'image' => 'https://res.cloudinary.com/studyshare/image/upload/c_fit,h_150,w_150/1535028522.png',
                'created_at' => '2018-08-23 12:48:45',
                'updated_at' => '2018-08-23 12:48:45'
            ],
            [
                'id' => '3',
                'name' => 'Van',
                'description' => 'Mon Ngu Van',
                'image' => 'https://res.cloudinary.com/studyshare/image/upload/c_fit,h_150,w_150/1535028538.png',
                'created_at' => '2018-08-23 12:49:00',
                'updated_at' => '2018-08-23 12:49:00'
            ],
            [
                'id' => '4',
                'name' => 'Anh',
                'description' => 'Mon Anh',
                'image' => 'https://res.cloudinary.com/studyshare/image/upload/c_fit,h_150,w_150/1535028549.png',
                'created_at' => '2018-08-23 12:49:10',
                'updated_at' => '2018-08-23 12:49:10'
            ],
            [
                'id' => '5',
                'name' => 'THPTQG',
                'description' => 'Ki thi THPTQG',
                'image' => 'https://res.cloudinary.com/studyshare/image/upload/c_fit,h_150,w_150/1535028574.png',
                'created_at' => '2018-08-23 12:49:39',
                'updated_at' => '2018-08-23 12:49:39'
            ],
        ]);
    }
}
