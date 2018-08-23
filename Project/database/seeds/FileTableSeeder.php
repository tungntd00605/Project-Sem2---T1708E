<?php

use Illuminate\Database\Seeder;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('files')->truncate();
        \Illuminate\Support\Facades\DB::table('files')->insert([
            [
                'id' => '1',
                'name' => 'de-thi-vao-10_1-1530435899-width1080height716.jpg',
                'fileType' => 'jpg',
                'tagId' => '1',
                'folderId' => '1',
                'userId' => '1',
                'size' => '489099',
                'link' => 'google.com.vn',
                'path' => 'public/upload/de-thi-vao-10_1-1530435899-width1080height716.jpg',
                'viewCount' => '0',
                'downloadCount' => '0',
                'created_at' => '2018-08-23 12:47:50',
                'updated_at' => '2018-08-23 12:47:50',
                'status' => '1'
            ],
            [
                'id' => '2',
                'name' => 'pexels-photo.jpg',
                'fileType' => 'jpg',
                'tagId' => '1',
                'folderId' => '1',
                'userId' => '2',
                'size' => '39947',
                'link' => '1',
                'path' => 'public/upload/pexels-photo.jpg',
                'viewCount' => '0',
                'downloadCount' => '0',
                'created_at' => '2018-08-23 12:48:12',
                'updated_at' => '2018-08-23 12:48:12',
                'status' => '1'
            ],
            [
                'id' => '3',
                'name' => '1.txt',
                'fileType' => 'txt',
                'tagId' => '1',
                'folderId' => '1',
                'userId' => '1',
                'size' => '0',
                'link' => 'google.com.vn',
                'path' => 'public/upload/1.txt',
                'viewCount' => '0',
                'downloadCount' => '0',
                'created_at' => '2018-08-23 13:11:36',
                'updated_at' => '2018-08-23 13:11:36',
                'status' => '1'
            ],
            [
                'id' => '4',
                'name' => '2.txt',
                'fileType' => 'txt',
                'tagId' => '1',
                'folderId' => '1',
                'userId' => '10',
                'size' => '0',
                'link' => 'google.com.vn',
                'path' => 'public/upload/2.txt',
                'viewCount' => '0',
                'downloadCount' => '0',
                'created_at' => '2018-08-23 13:11:50',
                'updated_at' => '2018-08-23 13:11:50',
                'status' => '1'
            ],
            [  'id' => '5',
                'name' => '3.txt',
                'fileType' => 'txt',
                'tagId' => '1',
                'folderId' => '1',
                'userId' => '1',
                'size' => '0',
                'link' => 'google.com.vn',
                'path' => 'public/upload/3.txt',
                'viewCount' => '0',
                'downloadCount' => '0',
                'created_at' => '2018-08-23 13:11:58',
                'updated_at' => '2018-08-23 13:11:58',
                'status' => '1'
            ],
            [
                'id' => '6',
                'name' => '4.txt',
                'fileType' => 'txt',
                'tagId' => '1',
                'folderId' => '1',
                'userId' => '1',
                'size' => '0',
                'link' => 'google.com.vn',
                'path' => 'public/upload/4.txt',
                'viewCount' => '0',
                'downloadCount' => '0',
                'created_at' => '2018-08-23 13:12:06',
                'updated_at' => '2018-08-23 13:12:06',
                'status' => '1',
            ],
            [
                'id' => '7','name' => '5.txt','fileType' => 'txt','tagId' => '1','folderId' => '1','userId' => '1','size' => '0','link' => 'google.com.vn','path' => 'public/upload/5.txt','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:12:15','updated_at' => '2018-08-23 13:12:15','status' => '1'
            ],
            [
                'id' => '8','name' => '6.txt','fileType' => 'txt','tagId' => '1','folderId' => '1','userId' => '2','size' => '0','link' => 'google.com.vn','path' => 'public/upload/6.txt','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:13:27','updated_at' => '2018-08-23 13:13:27','status' => '1'
            ],
            [
                'id' => '9','name' => '7.txt','fileType' => 'txt','tagId' => '1','folderId' => '1','userId' => '8','size' => '0','link' => 'google.com.vn','path' => 'public/upload/7.txt','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:13:33','updated_at' => '2018-08-23 13:13:33','status' => '1'
            ],
            [
                'id' => '10','name' => '8.txt','fileType' => 'txt','tagId' => '1','folderId' => '1','userId' => '3','size' => '0','link' => 'google.com.vn','path' => 'public/upload/8.txt','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:13:40','updated_at' => '2018-08-23 13:13:40','status' => '1'
            ],
            [
                'id' => '11','name' => '9.txt','fileType' => 'txt','tagId' => '1','folderId' => '1','userId' => '10','size' => '0','link' => 'google.com.vn','path' => 'public/upload/9.txt','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:13:48','updated_at' => '2018-08-23 13:13:48','status' => '1'
            ],
            [
                'id' => '12','name' => '10.txt','fileType' => 'txt','tagId' => '1','folderId' => '1','userId' => '5','size' => '0','link' => 'google.com.vn','path' => 'public/upload/10.txt','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:13:55','updated_at' => '2018-08-23 13:13:55','status' => '1'
            ],
            [
                'id' => '13','name' => 'bai 1.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '1','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 1.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:14:56','updated_at' => '2018-08-23 13:14:56','status' => '1'
            ],
            [  'id' => '14','name' => 'bai 2.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '6','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 2.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:15:06','updated_at' => '2018-08-23 13:15:06','status' => '1'
            ],
            [  'id' => '15','name' => 'bai 3.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '1','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 3.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:15:14','updated_at' => '2018-08-23 13:15:14','status' => '1'
            ],
            [  'id' => '16','name' => 'bai 3.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '4','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 3.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:15:23','updated_at' => '2018-08-23 13:15:23','status' => '1'
            ],
            [  'id' => '17','name' => 'bai 5.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '1','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 5.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:15:34','updated_at' => '2018-08-23 13:15:34','status' => '1'
            ],
            [  'id' => '18','name' => 'bai 6.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '5','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 6.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:15:41','updated_at' => '2018-08-23 13:15:41','status' => '1'
            ],
            [  'id' => '19','name' => 'bai 7.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '1','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 7.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:15:50','updated_at' => '2018-08-23 13:15:50','status' => '1'
            ],
            [  'id' => '20','name' => 'bai 8.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '8','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 8.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:15:57','updated_at' => '2018-08-23 13:15:57','status' => '1'
            ],
            [  'id' => '21','name' => 'bai 9.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '3','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 9.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:16:04','updated_at' => '2018-08-23 13:16:04','status' => '1'
            ],
            [  'id' => '22','name' => 'bai 10.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '1','size' => '0','link' => 'google.com.vn','path' => 'public/upload/bai 10.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:16:11','updated_at' => '2018-08-23 13:16:11','status' => '1'
            ],
            [  'id' => '23','name' => 'toan.docx','fileType' => 'docx','tagId' => '3','folderId' => '3','userId' => '4','size' => '0','link' => 'google.com.vn','path' => 'public/upload/toan.docx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:16:26','updated_at' => '2018-08-23 13:16:26','status' => '1'
            ],
            [  'id' => '24','name' => 'van.docx','fileType' => 'docx','tagId' => '3','folderId' => '3','userId' => '10','size' => '0','link' => 'google.com.vn','path' => 'public/upload/van.docx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:16:34','updated_at' => '2018-08-23 13:16:34','status' => '1'
            ],
            [  'id' => '25','name' => 'anh.docx','fileType' => 'docx','tagId' => '3','folderId' => '3','userId' => '2','size' => '0','link' => 'google.com.vn','path' => 'public/upload/anh.docx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:16:41','updated_at' => '2018-08-23 13:16:41','status' => '1'
            ],
            [  'id' => '26','name' => 'bang diem.xlsx','fileType' => 'xlsx','tagId' => '4','folderId' => '4','userId' => '1','size' => '6162','link' => 'google.com.vn','path' => 'public/upload/bang diem.xlsx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:16:51','updated_at' => '2018-08-23 13:16:51','status' => '1'
            ],
            [  'id' => '27','name' => 'thptqg.pptx','fileType' => 'pptx','tagId' => '2','folderId' => '2','userId' => '1','size' => '0','link' => 'google.com.vn','path' => 'public/upload/thptqg.pptx','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:17:01','updated_at' => '2018-08-23 13:17:01','status' => '1'
            ],
            [  'id' => '28','name' => 'soan-ngu-van-lop-7-tap-1-giai-bai-tap-mon-ngu-van-lop-7-tap-1.jpg','fileType' => 'jpg','tagId' => '1','folderId' => '1','userId' => '1','size' => '89081','link' => 'google.com.vn','path' => 'public/upload/soan-ngu-van-lop-7-tap-1-giai-bai-tap-mon-ngu-van-lop-7-tap-1.jpg','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:17:15','updated_at' => '2018-08-23 13:17:15','status' => '1'
            ],
            [  'id' => '29','name' => 'tabe-math-practice-study-guide_191699_large.jpg','fileType' => 'jpg','tagId' => '1','folderId' => '1','userId' => '1','size' => '162600','link' => 'google.com.vn','path' => 'public/upload/tabe-math-practice-study-guide_191699_large.jpg','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:17:23','updated_at' => '2018-08-23 13:17:23','status' => '1'
            ],
            [  'id' => '30','name' => 'tải xuống.jpg','fileType' => 'jpg','tagId' => '1','folderId' => '1','userId' => '1','size' => '10790','link' => 'google.com.vn','path' => 'public/upload/tải xuống.jpg','viewCount' => '0','downloadCount' => '0','created_at' => '2018-08-23 13:17:30','updated_at' => '2018-08-23 13:17:30','status' => '1'
            ],
        ]);
    }
}
