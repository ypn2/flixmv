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
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->text('vi_title')->fullText();
            $table->text('en_title')->fullText();
            $table->longText('description');
            $table->longText('thumb');
            $table->longText('embed_url');
            $table->string('alias');
            $table->string('trang_thai');
            $table->string('publish_year');
            $table->string('the_loai');
            $table->string('quoc_gia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
