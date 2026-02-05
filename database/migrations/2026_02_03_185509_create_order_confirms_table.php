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
        Schema::create('order_confirms', function (Blueprint $table) {
            $table->id();
            $table->string('oderid')->unique();
            $table->string('productId')->nullable();
            $table->decimal('total_price' , 10 , 2);

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->text('address');

            $table->enum('payment_method', ['cod' , 'card' , 'paypal']);
            $table->enum('payment_status', ['pending' , 'processing' , 'completed' , 'cancelled'])->default('pending');

            $table->enum('order_status', ['pending' , 'processing' , 'shipped' , 'delivered' , 'cancelled'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_confirms');
    }
};
