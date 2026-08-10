<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Expande a tabela `projects` para suportar cases profissionais completos.
     * Todos os campos novos são nullable — cada projeto usa apenas o que fizer
     * sentido para o seu conteúdo (não é obrigatório preencher tudo).
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Metadados do case
            $table->string('role')->nullable()->after('subtitle'); // papel do Kleiton no projeto
            $table->string('year')->nullable()->after('role'); // ex: "2025 — 2026"
            $table->string('status')->nullable()->after('year'); // ex: "Entregue e em produção"
            $table->string('client')->nullable()->after('status'); // ex: "Prefeitura de Caraguatatuba"

            // Estrutura narrativa do case (todos opcionais, ordem sugerida de exibição)
            $table->longText('context')->nullable()->after('description'); // Contexto
            $table->longText('problem')->nullable()->after('context'); // Problema / desafio
            $table->longText('objective')->nullable()->after('problem'); // Objetivo
            $table->longText('solution')->nullable()->after('objective'); // Solução
            $table->longText('process')->nullable()->after('solution'); // Processo
            $table->longText('decisions')->nullable()->after('process'); // Decisões relevantes
            $table->longText('result')->nullable()->after('decisions'); // Resultado
            $table->longText('learnings')->nullable()->after('result'); // Aprendizados

            // Mídia
            $table->json('gallery')->nullable()->after('image'); // [{path, caption, type: cover|screenshot|gallery|before_after|detail}]
            $table->string('video')->nullable()->after('gallery'); // caminho de vídeo demonstrativo

            // Links externos
            $table->string('external_url')->nullable()->after('video'); // site em produção
            $table->string('linkedin_url')->nullable()->after('external_url'); // publicação no LinkedIn
            $table->string('repo_url')->nullable()->after('linkedin_url'); // repositório (se público)

            // Reconhecimento
            $table->boolean('is_award')->default(false)->after('is_featured');
            $table->string('award_label')->nullable()->after('is_award'); // ex: "Prêmio InovaCidade · Iniciativas 2026"
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'role', 'year', 'status', 'client',
                'context', 'problem', 'objective', 'solution', 'process', 'decisions', 'result', 'learnings',
                'gallery', 'video',
                'external_url', 'linkedin_url', 'repo_url',
                'is_award', 'award_label',
            ]);
        });
    }
};
