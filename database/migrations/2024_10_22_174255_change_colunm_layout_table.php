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
            $table->text('hide_small_thumbnail_1')->nullable()->change();
            $table->text('hide_small_thumbnail_2')->nullable()->change();
            $table->text('hide_small_thumbnail_3')->nullable()->change();
            $table->text('hide_small_thumbnail_4')->nullable()->change();
            $table->text('hide_small_thumbnail_5')->nullable()->change();
            $table->text('hide_small_thumbnail_6')->nullable()->change();
            $table->text('hide_small_banner_thumbnail_left')->nullable()->change();
            $table->text('hide_small_banner_thumbnail_right')->nullable()->change();
            $table->text('hide_banner_promotion_thumbnail')->nullable()->change();
            $table->text('hide_adv_thumbnail')->nullable()->change();
            $table->text('hide_build_pc_thumbnail')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->text('hide_small_thumbnail_1')->change();
            $table->text('hide_small_thumbnail_2')->change();
            $table->text('hide_small_thumbnail_3')->change();
            $table->text('hide_small_thumbnail_4')->change();
            $table->text('hide_small_thumbnail_5')->change();
            $table->text('hide_small_thumbnail_6')->change();
            $table->text('hide_small_banner_thumbnail_left')->change();
            $table->text('hide_small_banner_thumbnail_right')->change();
            $table->text('hide_banner_promotion_thumbnail')->change();
            $table->text('hide_adv_thumbnail')->change();
            $table->text('hide_build_pc_thumbnail')->change();
        });
    }
};
