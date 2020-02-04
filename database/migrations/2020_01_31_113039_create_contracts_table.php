<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('type');
            $table->bigInteger('user');
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('lastname')->nullable();
            $table->char('sex',1);
            $table->string('iin');
            $table->char('doctype',1);
            $table->string('number');
            $table->text('givenBy');
            $table->date('givenDate');
            $table->date('expirationDate');
            $table->smallInteger('residence');
            $table->date('start');
            $table->smallInteger('year');
            $table->date('birth');
            $table->string('sum');
            $table->string('prize');
            $table->char('country',2);
            $table->smallInteger('ipdl');
            $table->text('address');
            $table->text('addressFact');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->smallInteger('aim');
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
        Schema::dropIfExists('contracts');
    }
}
