<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urls', function (Blueprint $table) {
          $table->increments('id');
          $table->string('link')->unique;
          $table->string('destination');
          $table->string('enabled');
          $table->string('expires');
          $table->string('expires-group')->nullable();
          $table->string('expires-date')->nullable();
          $table->string('expires-click')->nullable();
          $table->string('total_hit')->nullable();
          $table->timestamps();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('urls');
    }
}
