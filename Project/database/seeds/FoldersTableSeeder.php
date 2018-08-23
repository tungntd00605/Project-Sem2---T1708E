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
            ],
            [
                'id'=>2,
                'name'=>'Toan',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>3,
                'name'=>'Van',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>4,
                'name'=>'Anh',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>5,
                'name'=>'Li',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>6,
                'name'=>'Hoa',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>7,
                'name'=>'Sinh',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>8,
                'name'=>'Su',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>9,
                'name'=>'Dia',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>10,
                'name'=>'GDCN',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>11,
                'name'=>'Tin hoc',
                'parentId'=> 1,
                'userId'=>1,
            ],
            [
                'id'=>12,
                'name'=>'Project',
                'parentId'=> 1,
                'userId'=>1,
            ],[
                'id'=>13,
                'name'=>'Toan',
                'parentId'=> 1,
                'userId'=>2,
            ],
            [
                'id'=>14,
                'name'=>'Van',
                'parentId'=> 1,
                'userId'=>2,
            ],
            [
                'id'=>15,
                'name'=>'Anh',
                'parentId'=> 1,
                'userId'=>2,
            ],
        ]);
    }
}
