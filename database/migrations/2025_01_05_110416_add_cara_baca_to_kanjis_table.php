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
        Schema::table('kanjis', function (Blueprint $table) {
            $table->string('cara_baca')->nullable()->after('onyomi');
        });
    }
    
    public function down()
    {
        Schema::table('kanjis', function (Blueprint $table) {
            $table->dropColumn('cara_baca');
        });
    }
    
};
