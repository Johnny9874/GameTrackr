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
        Schema::create('jeux', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('temps_estime')->nullable();
            $table->decimal('prix_achat', 8, 2)->nullable();
            $table->date('date_achat')->nullable();
            $table->unsignedBigInteger('utilisateur_id');
            $table->timestamps();
        
            $table->foreign('utilisateur_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeus');
    }
};
