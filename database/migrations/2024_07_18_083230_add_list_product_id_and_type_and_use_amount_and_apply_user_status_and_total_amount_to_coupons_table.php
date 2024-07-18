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
        Schema::table('coupons', function (Blueprint $table) {
            $table->text('list_product_id')->nullable();
            $table->string('type');
            $table->integer('use_amount');
            $table->integer('total_amount');
            $table->string('apply_user_status')->default(0);
            $table->date('time_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->dropColumn('list_product_id');
            $table->dropColumn('type');
            $table->dropColumn('use_amount');
            $table->dropColumn('total_amount');
            $table->dropColumn('apply_user_status');
        });
    }
};
