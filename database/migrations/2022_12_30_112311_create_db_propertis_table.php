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
        Schema::create('db_propertis', function (Blueprint $table) {
            $table->id();
            $table->string('housing_name')->nullable();
            $table->string('Property_type')->nullable();
            $table->string('price')->nullable();
            $table->string('house_type')->nullable();
            $table->string('sales_rent')->nullable();
            $table->string('city_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('owner_id')->nullable();
            $table->string('images')->nullable();
            //$table->string('status')->nullable();
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
        Schema::dropIfExists('db_propertis');
    }
};
