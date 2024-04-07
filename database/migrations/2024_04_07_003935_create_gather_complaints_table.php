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
        Schema::create('gather_complaints', function (Blueprint $table) {
            $table->increments('gather_complaint_id');
            $table->integer('user_id')->unsigned(); // unsigned INT
            $table->integer('gather_id')->unsigned();
            $table->integer('complaint_type_id')->unsigned();
            $table->string('detailed_complaint');
            $table->timestamps();

            
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('gather_id')->references('gather_id')->on('gathers');
            $table->foreign('complaint_type_id')->references('complaint_type_id')->on('complaint_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gather_complaints');
    }
};
