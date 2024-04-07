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
        Schema::create('gather_tags', function (Blueprint $table) {
            $table->increments('gather_tag_id');
            $table->integer('gather_id')->unsigned();
            $table->string('gather_tag_name');
            $table->timestamps();

           
            $table->foreign('gather_id')->references('gather_id')->on('gathers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gather_tags');
    }
};
