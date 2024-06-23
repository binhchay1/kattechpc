<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->integer('hide_big_banner_thumbnail')->default(0);
            $table->integer('hide_small_thumbnail_1')->default(0);
            $table->integer('hide_small_thumbnail_2')->default(0);
            $table->integer('hide_small_thumbnail_3')->default(0);
            $table->integer('hide_small_thumbnail_4')->default(0);
            $table->integer('hide_small_thumbnail_5')->default(0);
            $table->integer('hide_small_thumbnail_6')->default(0);
            $table->integer('hide_small_banner_thumbnail_left')->default(0);
            $table->integer('hide_small_banner_thumbnail_right')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->dropColumn('hide_big_banner_thumbnail');
            $table->dropColumn('hide_small_thumbnail_1');
            $table->dropColumn('hide_small_thumbnail_2');
            $table->dropColumn('hide_small_thumbnail_3');
            $table->dropColumn('hide_small_thumbnail_4');
            $table->dropColumn('hide_small_thumbnail_5');
            $table->dropColumn('hide_small_thumbnail_6');
            $table->dropColumn('hide_small_banner_thumbnail_left');
            $table->dropColumn('hide_small_banner_thumbnail_right');
        });
    }
};
