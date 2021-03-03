<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->string('name');
            $table->string('phone', 9);
            $table->string('webpage');
            $table->timestamps();
        });

        Schema::create('providers_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone', 9);
            $table->string('email');
            $table->unsignedBigInteger('providers_id');
            $table->timestamps();

            $table->foreign('providers_id')->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers_contacts');
        Schema::dropIfExists('providers');
    }
}
