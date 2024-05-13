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
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();             
            $table->unsignedBigInteger('ticket_id');             
            $table->foreign('ticket_id')->references('id')->on('tickets');             
            $table->string('action_realise');             
            $table->string('resultat_obtenu');             
            $table->text('commentaire_supplementaire');             
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapports');
    }
};
