<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('joint_ventures', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar')->nullable(); 
            $table->string('title_en')->nullable(); 
            $table->text('description_ar')->nullable(); 
            $table->text('description_en')->nullable(); 
            $table->unsignedBigInteger('image_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joint_ventures');
    }
};
