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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

// insert INTO categories (title) VALUES
//       ("Hành Động"),
//       ("Cổ Trang"),
//       ("Chiến Tranh"),
//       ("Viễn Tưởng"),
//       ("Kinh Dị"),
//       ("Tài Liệu"),
//       ("Bí Ẩn"),
//       ("Phim 18+"),
//       ("Tình Cảm"),
//       ("Tâm Lý"),
//       ("Thể Thao"),
//       ("Phiêu Lưu"),
//       ("Âm Nhạc"),
//       ("Gia Đình"),
//       ("Học Đường"),
//       ("Hài Hước"),
//       ("Hình Sự"),
//       ("Võ Thuật"),
//       ("Khoa Học"),
//       ("Thần Thoại"),
//       ("Chính Kịch"),
//       ("Kinh Điển")    
    
  
