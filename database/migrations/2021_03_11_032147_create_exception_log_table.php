<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExceptionLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exception_log', function (Blueprint $table) {
            $table->id();
            $table->string('user_ip');
            $table->string('code', 100);
            $table->text('message');
            $table->string('file');
            $table->integer('line');
            $table->text('trace');
            $table->string('request_url')->comment('Request url');
            $table->text('request_data')->comment('Request data');
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
        Schema::dropIfExists('exception_log');
    }
}
