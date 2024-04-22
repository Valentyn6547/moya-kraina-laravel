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
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('activity_id');
            $table->integer('user_id')->unsigned(); // unsigned INT
            $table->string('title');
            $table->string('description');
            $table->string('registration_link');
            $table->string('report_info');
            $table->date('publish_date');
            $table->timestamps();

            
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};