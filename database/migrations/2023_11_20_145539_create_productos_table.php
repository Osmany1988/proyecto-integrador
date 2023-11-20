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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->binary('foto');
            $table->char('marca');
            $table->decimal('talle');
            $table->char('color');            
            $table->boolean('estado');
            $table->longtext('descrip');
            $table->foreignId('user_id')->constrainded()->cascadeOnDelete;
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
