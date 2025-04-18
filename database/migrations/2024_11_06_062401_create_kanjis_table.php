<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanjisTable extends Migration
{
    public function up()
    {
        Schema::create('kanjis', function (Blueprint $table) {
            $table->id();
            $table->string('kanji')->unique();
            $table->string('kunyomi')->nullable(); // bacaan kunyomi
            $table->string('onyomi')->nullable();  // bacaan onyomi
            $table->text('arti');                  // arti kanji
            $table->enum('level', ['N5', 'N4', 'N3', 'N2', 'N1']); // level kanji
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kanjis');
    }
}
