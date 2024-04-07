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
        Schema::create('activity_tags', function (Blueprint $table) {
            $table->increments('activity_tag_id');
            $table->integer('activity_id')->unsigned();
            $table->string('activity_tag_name');
            $table->timestamps();

            
            $table->foreign('activity_id')->references('activity_id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_tags');
    }
};
