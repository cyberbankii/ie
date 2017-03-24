<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionSituationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_situation', function (Blueprint $table) {
            $table->integer('situation_id')->index()->unsigned();
            $table->foreign('situation_id')->references('id')->on('situations')->onDelete('cascade');

            $table->integer('option_id')->index()->unsigned();
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');

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
        Schema::dropIfExists('option_situation');
    }
}
