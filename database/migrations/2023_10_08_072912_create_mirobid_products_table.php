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
            $table->string('product_name');
            $table->string('pro_short_content');
            $table->string('product_type');
            $table->string('pro_banner_img');
            $table->string('pro_content_img');
            $table->string('pro_label');
            $table->string('pro_spesificate');
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
