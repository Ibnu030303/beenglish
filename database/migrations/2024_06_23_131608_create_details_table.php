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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->decimal('registration_fee', 10, 2)->notNullable();
            $table->decimal('monthly_fee', 10, 2)->notNullable();
            $table->decimal('student_ebook_fee', 10, 2)->notNullable();
            $table->decimal('tshirt_fee', 10, 2)->notNullable();
            $table->string('meeting_frequency')->notNullable();
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
