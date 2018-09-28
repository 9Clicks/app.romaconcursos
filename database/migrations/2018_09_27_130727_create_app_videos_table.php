<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppVideosTable extends Migration
{

    public function up()
    {
        Schema::create('app_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tbl_title', 255);
            $table->string('tbl_video_id', 11);
            $table->longText('tbl_desc');
            $table->string('tbl_categoria', 155);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_videos');
    }
}
