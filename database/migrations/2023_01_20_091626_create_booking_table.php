<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('car_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->integer('number');
            $table->string('pickup');
            $table->string('drop');
            $table->string('ptime');
            $table->string('dtime');
            $table->string('adult');
            $table->string('child');
            $table->string('request',300);
            $table->string('payment_type');
            $table->string('razorpay_id');
            $table->string('payment_id');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
