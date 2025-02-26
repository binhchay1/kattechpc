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
            $table->text('permarklink_small_thumbnail_1')->nullable();
            $table->text('permarklink_small_thumbnail_2')->nullable();
            $table->text('permarklink_small_thumbnail_3')->nullable();
            $table->text('permarklink_small_thumbnail_4')->nullable();
            $table->text('permarklink_small_thumbnail_5')->nullable();
            $table->text('permarklink_small_thumbnail_6')->nullable();
            $table->text('permarklink_hot_sale_big_thumbnail')->nullable();
            $table->text('permarklink_small_banner_thumbnail_left')->nullable();
            $table->text('permarklink_small_banner_thumbnail_right')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->dropColumn('permarklink_small_thumbnail_1');
            $table->dropColumn('permarklink_small_thumbnail_2');
            $table->dropColumn('permarklink_small_thumbnail_3');
            $table->dropColumn('permarklink_small_thumbnail_4');
            $table->dropColumn('permarklink_small_thumbnail_5');
            $table->dropColumn('permarklink_small_thumbnail_6');
            $table->dropColumn('permarklink_small_thumbnail_1');
            $table->dropColumn('permarklink_hot_sale_big_thumbnail');
            $table->dropColumn('permarklink_small_banner_thumbnail_left');
            $table->dropColumn('permarklink_small_banner_thumbnail_right');
        });
    }
};
