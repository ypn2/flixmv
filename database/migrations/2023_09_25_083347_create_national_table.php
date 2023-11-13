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
        Schema::create('national', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('national');
    }
};

// insert into national (name) values
// ("Trung Quốc"),
// ("Thái Lan"),
// ("Hồng Kông"),
// ("Pháp"),
// ("Đức"),
// ("Hà Lan"),
// ("Mexico"),
// ("Thụy Điển"),
// ("Philippines"),
// ("Đan Mạch"),
// ("Thụy Sĩ"),
// ("Ukraina"),
// ("Hàn Quốc"),
// ("Âu Mỹ"),
// ("Ấn Độ"),
// ("Canada"),
// ("Tây Ban Nha"),
// ("Indonesia"),
// ("Balan"),
// ("Malaysia"),
// ("Bồ Đào Nha"),
// ("UAE"),
// ("Châu Phi"),
// ("Ả Rập Xê Út"),
// ("Nhật Bản"),
// ("Đài Loan"),
// ("Anh"),
// ("Quốc gia khác"),
// ("Thổ Nhĩ Kỳ"),
// ("Nga"),
// ("Úc"),
// ("Brazil"),
// ("Ý"),
// ("Na Uy"),
// ("Nam Phi)")