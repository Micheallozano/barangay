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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projectname');
            $table->string('descript')->nullable();
            $table->date('start_date');
            $table->string('start_amount');
            $table->date('end_date')->nullable();
            $table->string('end_amount');
            $table->string('status')->default(1);

            $table->unsignedBigInteger('barangay_id');
            $table->foreign('barangay_id')->references('id')->on('barangays')->onDelete('cascade');
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
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
        Schema::dropIfExists('projects');
    }
};
