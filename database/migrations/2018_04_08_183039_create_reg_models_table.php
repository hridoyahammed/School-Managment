<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('sid');
            $table->text('fname');
            $table->text('mname');
            $table->text('class');
            $table->text('section');
            $table->text('session');
            $table->text('roll', 10);
            $table->text('reg', 12);
            $table->text('shift');
            $table->text('phone', 15);
            $table->text('dob');
            $table->text('gnid', 17);
            $table->text('blood');
            $table->text('age',10);
            $table->text('address');
            $table->text('gender');
            $table->text('image');
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
        Schema::dropIfExists('reg');
    }
}
