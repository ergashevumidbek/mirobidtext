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
        Schema::create('mirobid_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',255);
            $table->string('pro_short_content',255);
            $table->text('product_type',255);
            $table->string('pro_banner_img',255);
            $table->string('pro_content_img_1', 255);
            $table->string('pro_content_img_2', 255);
            $table->string('pro_content_img_3', 255);
            $table->string('pro_content_img_4', 255);
            $table->text('pro_label');
            $table->text('spetsification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mirobid_products');
    }
};
