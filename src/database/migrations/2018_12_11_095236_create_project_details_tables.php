<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id(); // автоматически bigIncrements
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
