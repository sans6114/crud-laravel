<?php

use App\Models\Equipo;
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
        Schema::create('jugador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignIdFor(Equipo::class);
            $table->integer('peso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
