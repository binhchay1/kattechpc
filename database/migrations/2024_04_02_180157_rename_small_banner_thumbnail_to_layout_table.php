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
            $table->renameColumn('small_banner_thumbnail_1', 'small_banner_thumbnail_left');
            $table->renameColumn('small_banner_thumbnail_2', 'small_banner_thumbnail_right');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->renameColumn('small_banner_thumbnail_left', 'small_banner_thumbnail_1');
            $table->renameColumn('small_banner_thumbnail_right', 'small_banner_thumbnail_2');
        });
    }
};
