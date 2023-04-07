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
        Schema::create('task', function (Blueprint $table) {
            
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->date('date_of_start')->nullable();
            $table->date('deadline')->nullable();
            $table->decimal('budget',30,2)->default(0);
            $table->integer('payment_type')->nullable();
            $table->decimal('price',40,2)->nullable();
            $table->integer('views')->default(0);
            $table->integer('status')->nullable();
            $table->integer('category');
            $table->integer('subcategory');
            $table->text('private_description')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};