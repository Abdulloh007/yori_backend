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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('payment_date');
            $table->dateTime('enrollment_date');
            $table->decimal('payment_amount', 5, 2);
            $table->decimal('credit_amount', 5, 2);
            // $table->emun('withdrawal_status', array('accepted', 'declined', 'cancel')); // Статус списания
            // $table->emun('enrollment_status', array('accepted', 'declined', 'cancel')); // Статус зачисления
            $table->string('withdrawal_status', 15); // Статус списания
            $table->string('enrollment_status', 15); // Статус зачисления
            $table->string('location', 50);
            $table->string('card_holder', 50);
            $table->string('credit_account');
            $table->decimal('commission', 5, 2);
            $table->string('brand', 50);
            $table->string('bank', 50);
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
