<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_statuses', function (Blueprint $table) {
            $table->bigIncrements('status_id');

            $table->string('status_description');
            $table->string('status_name');

            $table->unsignedBigInteger('doc_id');

            $table->timestamps();

            $table->foreign('doc_id')->references('doc_id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_statuses');
    }
};
