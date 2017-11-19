<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankomatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankomats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->comment('номер банкомата');
            $table->string('address')->comment('адрес');
            $table->integer('filial_id')->comment('ид филиала');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('filial_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankomats');
    }
}
