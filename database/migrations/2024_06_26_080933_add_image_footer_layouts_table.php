<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->text('footer_slide_thumbnail')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('layout', function (Blueprint $table) {
            $table->dropColumn('footer_slide_thumbnail');
        });
    }
};
