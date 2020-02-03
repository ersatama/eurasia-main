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
            $table->bigInteger('user');
            $table->string('name');
            $table->string('iin');
            $table->smallInteger('type');
            $table->date('start');
            $table->smallInteger('year');
            $table->date('birth');
            $table->string('sum');
            $table->string('prize');
            $table->smallInteger('residence');
            $table->char('country',2);
            $table->smallInteger('ipdl');
            $table->string('passport');
            $table->string('address');
            $table->string('addressFact');
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
