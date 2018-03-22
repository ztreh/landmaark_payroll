<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name',255)->default('');
            $table->string('name_with_ini',255)->default('');
            $table->string('address',255)->default('');
            $table->string('nic',15)->default('');
            $table->date('dob')->nullable();
            $table->string('tp_home',10)->default('');
            $table->string('tp_mobile',10)->default('');
            $table->string('emergency_name',255)->default('');
            $table->string('emergency_tp_mobile',10)->default('');
            $table->string('emergency_relationship',30)->default('');
            $table->string('emergency_tp_home',10)->default('');
            $table->tinyInteger('status')->default(0)->comment('1 unnada 0 malada');
            $table->tinyInteger('gender')->default(0)->comment('1 male 0 female');

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
        Schema::dropIfExists('humans');
    }
}
