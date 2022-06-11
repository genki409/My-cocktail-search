<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('base')->nullable();
            $table->string('taste')->nullable();
            $table->string('feature')->nullable();
            $table->string('comment', 500)->nullable();
            $table->string('image')->nullable();
            $table->string('ingredient')->nullable();
            // $table->string('image3')->nullable();
            // $table->string('image4')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('memos');
    }
}