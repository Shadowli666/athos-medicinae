<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medics', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name', length: 80);
            $table->string(column: 'last_name', length: 80);
            $table->integer(column: 'ci', autoIncrement: false, unsigned: true)->unique();
            $table->string(column: 'email', length: 80);
            $table->string(column: 'phone', length: 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medics');
    }
};
