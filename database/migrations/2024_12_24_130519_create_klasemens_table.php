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
        Schema::create('klasemens', function (Blueprint $table) {
            $table->id();
            $table->string('club');
            $table->text('gclub');
            $table->string('tanding');
            $table->string('menang');
            $table->string('seri');
            $table->string('kalah');
            $table->string('poin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klasemens');
    }
};
