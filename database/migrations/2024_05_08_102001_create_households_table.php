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
        Schema::create('households', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('street');
            $table->string('brgy');
            $table->string('city');
            $table->string('NameE');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('suffix1')->nullable();
            $table->date('birth_date1');
            $table->string('gender1');
            $table->string('age1');
            $table->string('marital_status1');
            $table->string('contact_number')->nullable();
            $table->string('hp1')->nullable();
            $table->string('hp2')->nullable();
            $table->string('hp3')->nullable();
            $table->string('hp4')->nullable();
            $table->string('hp5');
            $table->string('hp6');
            $table->string('hp7');
            $table->string('hp8');
            //Educ and lit
            $table->string('hp10');
            $table->string('hp11');
            $table->string('hp12');
            $table->string('hp13');
            $table->string('hp14');
            //POLITICAL PARTICIPATION
            $table->string('hp15');
            $table->string('hp16');
            $table->string('hp17')->nullable();
            //SOCIO-ECONOMIC ACTIVITY 
            $table->string('hp18');
            $table->string('hp19');
            $table->string('hp20');
            $table->string('hp21')->nullable();
            $table->string('hp22')->nullable();
            $table->string('hp23');
            $table->string('hp24');
            $table->string('hp25');
            $table->string('hp26');
            $table->string('hp27');
            // HEALTH AND NUTRITION
            $table->string('hp43');
            $table->string('hp28');
            $table->string('hp29');
            $table->string('hp30');
            $table->string('hp31');
            $table->string('hp32');
            //CRIME
            $table->string('hp33');
            $table->string('hp34');
            //WATER AND SANITATION
            $table->string('hp35');
            $table->string('hp36');
            $table->string('hp37')->nullable();
            //Housing
            $table->string('hp38');
            $table->string('hp39')->nullable();
            $table->string('hp41');
            $table->string('hp42');
            //Other household question
            $table->string('hp44');
            $table->string('hp45');
            $table->string('hp46');
            $table->string('hp47');
            $table->string('hp48');
            $table->string('hp49');
            $table->string('hp50');
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
        Schema::dropIfExists('households');
    }
};
