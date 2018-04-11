<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('class');
            $table->text('year');
            $table->text('fname');
            $table->text('mname');
            $table->text('psn');
            $table->text('phone');
            $table->text('dob');
            $table->text('fo');
            $table->text('mo');
            $table->text('ai');
            $table->text('gnid',17);
            $table->text('blood');
            $table->text('rel');
            $table->text('sta');
            $table->text('prad');
            $table->text('pead');
            $table->text('gender');
            $table->text('image');
            $table->text('qut');
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
        Schema::dropIfExists('admission_models');
    }
}
