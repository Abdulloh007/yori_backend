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
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->text('avatar')->nullable();
            $table->integer('age')->nullable();
            $table->string('city')->nullable();
            $table->integer('rating')->default(0);
            $table->text('bio')->nullable();
            $table->text('video_about')->nullable();
            $table->string('status')->default(0);
            $table->string('role', 20)->default(1);
            $table->decimal('balance',20,2)->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number');
            $table->string('password')->nullable();
            $table->integer('tarif')->nullable();
            $table->date('tarif_expire')->nullable();
            $table->string('sex')->nullable();
            $table->longText('bearer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
