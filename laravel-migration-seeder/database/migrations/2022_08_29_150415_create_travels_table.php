<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 12);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('type', 50);
            $table->text('description')->nullable();
            $table->decimal('price', 7,2);
            // $table->type= $travelHouseType[rand(0,2)];
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
        Schema::dropIfExists('travels');
    }
}
