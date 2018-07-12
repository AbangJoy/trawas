<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');

            $table->text('menu')->nullable(); //nama menu
            $table->text('menu1')->nullable();
            $table->text('menu2')->nullable();
            $table->text('menu3')->nullable();
            $table->text('menu4')->nullable();
            $table->text('menu5')->nullable();
            $table->text('menu6')->nullable();
            $table->text('menu7')->nullable();
            $table->text('menu8')->nullable();
            $table->text('menu9')->nullable();
            $table->text('menu10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
