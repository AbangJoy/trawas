<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wisata', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('desa', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('berita', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('produk', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('staf', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('galeri', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('informasi', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('profil', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('artikel', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('beranda', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wisata', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('desa', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('berita', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('staf', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('galeri', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('informasi', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('profil', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('artikel', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::table('beranda', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
    }
}
