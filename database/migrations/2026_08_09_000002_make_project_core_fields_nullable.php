<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * A migration original criava subtitle/excerpt/description/tags como NOT NULL.
     * Projetos com conteúdo pendente (ex: Vaga Fácil, aguardando fonte) precisam
     * poder existir com esses campos vazios até serem completados.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->change();
            $table->text('excerpt')->nullable()->change();
            $table->longText('description')->nullable()->change();
            $table->json('tags')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('subtitle')->nullable(false)->change();
            $table->text('excerpt')->nullable(false)->change();
            $table->longText('description')->nullable(false)->change();
            $table->json('tags')->nullable(false)->change();
        });
    }
};
