<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->date('order_date')->change();
        });
    }
    
    public function down()
    {
        Schema::table('sandbox', function (Blueprint $table) {
            $table->dateTime('order_date')->change();
        });
    }
};
