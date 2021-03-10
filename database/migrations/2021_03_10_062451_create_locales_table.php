<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->id();
            $table->string('continent');
            $table->string('country');
            $table->boolean('direction_type')->default(0);
            $table->string('language')->default('en');
            $table->string('fallback_language')->default('en');
            $table->tinyInteger('accessibility')->default(0);
            $table->boolean('active_in_au')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locales');
    }
}
