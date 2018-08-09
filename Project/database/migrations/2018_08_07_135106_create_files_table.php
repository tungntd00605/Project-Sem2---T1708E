<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fileType');
            $table->unsignedInteger('tagId');
            $table->unsignedInteger('folderId');
            $table->unsignedInteger('userId');
            $table->unsignedInteger('size');
            $table->string('link');
            $table->string('path');
            $table->unsignedInteger('viewCount')->default(0);
            $table->unsignedInteger('downloadCount')->default(0);
            $table->timestamps();
            $table->integer('status')->default(1);
            $table->foreign('tagId')->references('id')->on('tags');
            $table->foreign('folderId')->references('id')->on('folders');
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
