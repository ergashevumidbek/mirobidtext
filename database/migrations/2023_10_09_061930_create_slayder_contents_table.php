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
        Schema::create('slayder_contents', function (Blueprint $table) {
            $table->id();
            $table->text('slayder_main_text');
            $table->text('slayder_short_text');
            $table->string('slayder_img', 255);
            $table->text('slayder_label');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slayder_contents');
    }
};
