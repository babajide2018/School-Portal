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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('prep_one');
            $table->string('prep_two');
            $table->string('nur_one');
            $table->string('nur_two');
            $table->string('basic_one');
            $table->string('basic_two');
            $table->string('basic_three');
            $table->string('basic_four');
            $table->string('basic_five');
            $table->string('jss_one');
            $table->string('jss_two');
            $table->string('jss_three');
            $table->string('sss_one');
            $table->string('sss_two');
            $table->string('sss_three');
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
        Schema::dropIfExists('classes');
    }
};
