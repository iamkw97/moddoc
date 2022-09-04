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
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('doc_id');

            $table->string('doc_description');
            $table->string('doc_name');
            $table->string('doc_nic');
            $table->string('doc_sex');
            $table->string('doc_email');
            $table->string('doc_phone');
            $table->date('doc_birthday');

            $table->string('doc_field');
            $table->string('doc_status');
            $table->string('doc_working_branch');

            $table->string('doc_office_address');
            $table->string('doc_personal_address');
            $table->string('doc_about');

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
        Schema::dropIfExists('doctors');
    }
};
