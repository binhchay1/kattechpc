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
            $table->dropColumn('flash_sale_list_thumbnail');
            $table->dropColumn('hot_sale_list_thumbnail');
            $table->dropColumn('big_thumbnail');
            $table->dropColumn('small_banner_thumbnail_1');
            $table->dropColumn('small_banner_thumbnail_2');

            $table->text('flash_sale_list_product_id')->nullable();
            $table->text('hot_sale_list_product_id')->nullable();
            $table->text('slide_thumbnail')->nullable();
            $table->text('small_banner_thumbnail_left')->nullable();
            $table->text('small_banner_thumbnail_right')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->dropColumn('flash_sale_list_product_id');
            $table->dropColumn('hot_sale_list_product_id');
            $table->dropColumn('slide_thumbnail');
            $table->dropColumn('small_banner_thumbnail_left');
            $table->dropColumn('small_banner_thumbnail_right');

            $table->text('flash_sale_list_thumbnail')->nullable();
            $table->text('hot_sale_list_thumbnail')->nullable();
            $table->text('big_thumbnail')->nullable();
            $table->text('small_banner_thumbnail_1')->nullable();
            $table->text('small_banner_thumbnail_2')->nullable();
        });
    }
};
