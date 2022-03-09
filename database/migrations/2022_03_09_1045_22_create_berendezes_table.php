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
        Schema::create('berendezes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uzem_id')->references('id')->on('uzem');
            $table->string('tipus');
            $table->string('allapot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berendezes');
    }
};
