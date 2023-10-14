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
        Schema::create('mirobid_staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name',255);
            $table->string('staff_surname',255);
            $table->string('staff_profission',255);
            $table->string('staff_img',255);
            $table->text('staff_bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mirobid_staff');
    }
};
