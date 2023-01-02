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
        Schema::create('results', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('class');
            $table->string('subject');
            $table->string('admission_no');
            $table->string('name');
            $table->string('gender');
            $table->string('assignment');
            $table->string('test');
            $table->string('exam');
            $table->string('total');
            $table->string('session');
            $table->string('term');
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('results');
    }
};
