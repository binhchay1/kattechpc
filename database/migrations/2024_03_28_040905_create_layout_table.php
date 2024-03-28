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
        Schema::create('layout', function (Blueprint $table) {
            $table->id();
            $table->text('big_thumbnail')->nullable();
            $table->text('small_thumbnail_1')->nullable();
            $table->text('small_thumbnail_2')->nullable();
            $table->text('small_thumbnail_3')->nullable();
            $table->text('small_thumbnail_4')->nullable();
            $table->text('small_thumbnail_5')->nullable();
            $table->text('small_thumbnail_6')->nullable();
            $table->text('flash_sale_list_thumbnail')->nullable();
            $table->dateTime('flash_sale_timer')->nullable();
            $table->text('hot_sale_big_thumbnail')->nullable();
            $table->text('hot_sale_list_thumbnail')->nullable();
            $table->text('big_banner_thumbnail')->nullable();
            $table->text('small_banner_thumbnail_1')->nullable();
            $table->text('small_banner_thumbnail_1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layout');
    }
};
