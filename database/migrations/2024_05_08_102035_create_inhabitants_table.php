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
        Schema::create('inhabitants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('resident_id');
            $table->foreign('resident_id')->references('id')->on('residents')->onDelete('cascade');
            $table->integer('household_id');	
            $table->foreign('household_id')->references('id')->on('households')->onDelete('cascade');
            $table->boolean('isActive')->default(1);
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
        Schema::dropIfExists('inhabitants');
    }
};
