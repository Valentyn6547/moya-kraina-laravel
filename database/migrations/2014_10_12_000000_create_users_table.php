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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->boolean('isverified')->default(false);
            $table->string('password');
            $table->date('date_of_birth');
            $table->string('city');
            $table->enum('user_type',['admin', 'guest', 'volunteer']);
            $table->rememberToken();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.php artisan migrate --path=/database/migrations/your_migration_file.php
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
