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
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('ringkasan');
        $table->text('konten');
        $table->string('url_gambar')->nullable();
        $table->timestamps();
    });
}
};
