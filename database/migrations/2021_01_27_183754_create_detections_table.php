<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detections', function (Blueprint $table) {
            $table->id();
            $table->float('SPH_R');
            $table->float('CYL_R');
            $table->float('AX_R');
            $table->float('SPH_L');
            $table->float('CYL_L');
            $table->float('AX_L');
            $table->float('IPD');
            $table->float('addition');
            $table->date('date');
            $table->string('doctor');
            $table->integer('client_id')->unsigned();

            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('detections');
    }
}
