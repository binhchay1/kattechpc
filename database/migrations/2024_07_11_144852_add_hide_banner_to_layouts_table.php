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
            $table->integer('hide_banner_promotion_thumbnail')->default(0);
            $table->text('permarklink_banner_promotion_thumbnail')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->dropColumn('hide_banner_promotion_thumbnail');
            $table->dropColumn('permarklink_banner_promotion_thumbnail');

        });
    }
};
