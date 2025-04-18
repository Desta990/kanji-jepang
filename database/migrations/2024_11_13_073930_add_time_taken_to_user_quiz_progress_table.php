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
        Schema::table('user_quiz_progress', function (Blueprint $table) {
            $table->integer('time_taken')->nullable(); // Mengizinkan null jika belum diisi
        });
    }
    
    public function down()
    {
        Schema::table('user_quiz_progress', function (Blueprint $table) {
            $table->dropColumn('time_taken');
        });
    }
    

};
