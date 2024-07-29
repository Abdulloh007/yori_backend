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
            $table->integer('city_id')->nullable();
            $table->integer('rating')->default(0);
            $table->text('bio')->nullable();
            $table->text('video_about')->nullable();
            $table->integer('status')->default(0);
            $table->integer('role');
            $table->decimal('balance',20,2)->nullable();
            $table->decimal('freeze_balance',20,2)->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number');
            $table->string('password')->nullable();
            $table->string('sex')->nullable();
            $table->longText('push_noty')->nullable();
            $table->boolean('identified')->default(false);
            $table->timestamps();
            $table->softDeletes();
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
