<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->integer('user_id');
            $table->timestamp('post_date');
            $table->text('post_content');
            $table->text('post_title');
            $table->string('post_status',20);
            $table->string ('post_name',200);
            $table->string('post_type',20);
            $table->text('post_category');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
