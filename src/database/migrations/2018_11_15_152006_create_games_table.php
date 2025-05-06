<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique(); // ✅ вместо to_url
            $table->string('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('text')->nullable();
            $table->tinyInteger('in_rating')->nullable();
            $table->string('img')->nullable();
            $table->integer('developer_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->timestamp('date_create')->useCurrent();
            $table->string('to_site')->nullable();
            $table->integer('created_user_id')->nullable();
            $table->timestamps();
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique();
            $table->timestamps();
        });

        Schema::create('genre_game', function (Blueprint $table) {
            $table->integer('genre_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genre_game');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('games');
    }
};
