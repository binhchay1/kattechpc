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
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->change();
            $table->dropColumn('total_amount');
            $table->string('name');
            $table->string('province');
            $table->string('district');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('user_id')->nullable(false)->change();
            $table->dropColumn('name');
            $table->dropColumn('province');
            $table->dropColumn('district');
            $table->integer('total_amount');
        });
    }
};
