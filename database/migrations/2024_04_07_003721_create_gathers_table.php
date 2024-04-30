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
        Schema::create('gathers', function (Blueprint $table) {
            $table->increments('gather_id');
            $table->integer('user_id')->unsigned(); // unsigned INT
            $table->string('title');
            $table->string('description');
            $table->string('donation_link');
            $table->date('publish_date');
            $table->string('image_path')->nullable(); 
            $table->decimal('goal_amount', 10, 2); 
            $table->enum('status', ['active', 'inactive']); 
            $table->timestamps();

            
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gathers');
    }
};
