<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constained()->cascadeOnDelete();
            $table->foreignId('post_id')->constained()->cascadeOnDelete(); // declare the foreignId and then make a constraint
            $table->text('body');
            $table->timestamps();

            //if we delete the post, we also need to cascade and delete all associated comments for the posts.
            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')->reference('id')->on('posts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
