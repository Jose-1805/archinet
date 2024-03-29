<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('tipo_identificacion','50');
            $table->string('identificacion','15')->unique();
            $table->string('nombres','150');
            $table->string('apellidos','150');
            $table->string('celular','15');
            $table->string('direccion','15');
            $table->string('email','150')->unique();
            $table->string('password','255');
            $table->rememberToken();
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
            Schema::dropIfExists('users');
        }
}
