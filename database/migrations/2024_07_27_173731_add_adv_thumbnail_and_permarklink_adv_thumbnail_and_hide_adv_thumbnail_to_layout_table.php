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
            $table->text('adv_thumbnail')->nullable();
            $table->text('permarklink_adv_thumbnail')->nullable();
            $table->integer('hide_adv_thumbnail')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->dropColumn('adv_thumbnail');
            $table->dropColumn('permarklink_adv_thumbnail');
            $table->dropColumn('hide_adv_thumbnail');
        });
    }
};
