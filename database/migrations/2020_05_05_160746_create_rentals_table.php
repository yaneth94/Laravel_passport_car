<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->bigInteger('vehicle_id')->unsigned();
            $table->foreign( 'vehicle_id')->references('id')->on('vehicles');
            $table->bigInteger('rental_status_id')->unsigned();
            $table->foreign( 'rental_status_id')->references('id')->on('rental_statuses');
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign( 'customer_id')->references('id')->on('customers');
            $table->dateTime('from');
            $table->dateTime('to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
