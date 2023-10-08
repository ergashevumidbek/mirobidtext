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
            $table->string('staff_name');
            $table->string('staff_surname');
            $table->string('staff_profission');
            $table->string('staff_img');
            $table->string('staff_bio');
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
