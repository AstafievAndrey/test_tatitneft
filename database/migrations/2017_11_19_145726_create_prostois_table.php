<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProstoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prostois', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bankomat_id')->comment('идентификатор банкомата');
            $table->dateTime('begin')->comment('начало простоя');
            $table->dateTime('end')->comment('конец простоя');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('bankomat_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prostois');
    }
}
