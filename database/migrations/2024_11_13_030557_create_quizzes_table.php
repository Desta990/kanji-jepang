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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('level'); // N5, N4, N3, etc.
            $table->integer('required_score')->default(10); // Nilai minimum untuk lulus
            $table->integer('duration')->default(600); // Default 600 detik (10 menit)
            $table->timestamps();
        });
    }
    public function questions()
{
    return $this->hasMany(Question::class);
}

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
