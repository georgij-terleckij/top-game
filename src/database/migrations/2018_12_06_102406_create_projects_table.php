<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('game_id');
            $table->string('site_url')->nullable();
            $table->string('vk_url')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('twit_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('img')->nullable();
            $table->boolean('published')->nullable();
            $table->integer('votes')->nullable();
            $table->integer('viewed')->nullable();
            $table->integer('link_out')->nullable();
            $table->string('vote_pass')->nullable();
            $table->string('vote_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
