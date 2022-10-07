<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('mikrowisp')->unsigned()->default(16);
            $table->string('name');
            $table->string('birthday', 20);
            $table->text('address');
            $table->string('latitude', 50);
            $table->string('longitude', 50);
            $table->string('phone_principal', 20);
            $table->string('phone_alternative', 20);
            $table->string('email_principal');
            $table->string('email_alternative');
            $table->integer('batch')->unsigned()->default(1);
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('advertising', 2)->default('SI');
            $table->integer('gender_id')->unsigned()->default(1);
            $table->integer('status_id')->unsigned()->default(1);
            $table->timestamps();

            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
