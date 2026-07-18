<section id="experiencias" class="py-24 px-6 md:px-12">
    <div class="max-w-5xl mx-auto">

        <div class="reveal mb-16 text-center">
            <span class="eyebrow">Experiências de destaque</span>
            <h2 class="section-title mt-4">Onde o trabalho<br/>virou resultado</h2>
        </div>

        {{-- ── STII — Help Desk ── --}}
        <div class="exp-card reveal mb-10">
            <div class="exp-card-header" style="background:linear-gradient(135deg,#FFBE0015,#00D4E80D)">
                <span class="exp-badge">STII — Secretaria de Tecnologia da Informação &amp; Inovação</span>
                <h3 class="font-display font-extrabold text-2xl mt-3 text-ink">Help Desk &amp; Suporte Técnico</h3>
                <p class="text-muted text-sm mt-1">Prefeitura Municipal de Caraguatatuba &middot; 2022 – 2024</p>
            </div>
            <div class="exp-card-body">
                <p class="text-muted leading-relaxed mb-7">
                    Em uma equipe de 15+ técnicos, liderou o ranking interno de chamados solucionados por três meses consecutivos.
                    Os números abaixo são reais — extraídos diretamente dos dashboards VisionTech da STII.
                </p>

                <div class="grid grid-cols-3 gap-4 mb-7">
                    @foreach([['162','Junho · 1º lugar','#FFBE00'], ['203','Julho · 1º lugar','#00D4E8'], ['167','Agosto · 1º lugar','#FF6B9D']] as [$n,$l,$c])
                        <div class="stat-mini" style="--c:{{ $c }}">
                            <div class="stat-mini-num">{{ $n }}</div>
                            <div class="stat-mini-label">{{ $l }}</div>
                        </div>
                    @endforeach
                </div>

                <ul class="exp-list">
                    <li>✦ Primeiro colocado no ranking de chamados solucionados em junho, julho e agosto</li>
                    <li>✦ Atuação em múltiplos grupos: Sistemas, Helpdesk, Segurança de Rede, Embras-Atendimentos</li>
                    <li>✦ Reconhecimento contínuo por excelência e consistência no atendimento</li>
                    <li>✦ Contribuição direta na redução do backlog de chamados em aberto da secretaria</li>
                    <li>✦ Transição natural para desenvolvimento full stack dentro da mesma secretaria</li>
                </ul>
            </div>
        </div>

        {{-- ── LGPD360 — Premiado ── --}}
        <div class="exp-card reveal">
            <div class="exp-card-header" style="background:linear-gradient(135deg,#00D4E80D,#FF6B9D0D)">
                <span class="exp-badge award">🏆 Prêmio InovaCidade INICIATIVAS 2026</span>
                <h3 class="font-display font-extrabold text-2xl mt-3 text-ink">LGPD360 — Portal de Direitos Digitais do Cidadão</h3>
                <p class="text-muted text-sm mt-1">Prefeitura Municipal de Caraguatatuba &middot; 2025 – 2026</p>
            </div>
            <div class="exp-card-body">
                <p class="text-muted leading-relaxed mb-6">
                    Sistema completo desenvolvido do zero — da arquitetura ao deploy em produção.
                    Cidadãos autenticados via gov.br podem consultar, corrigir ou solicitar exclusão de seus dados pessoais
                    em 4 sistemas municipais: SESAU, Central 156, EMBRAS e RH Municipal.
                </p>

                {{-- Banner do prêmio --}}
                <div class="award-banner mb-7">
                    <div class="text-5xl flex-shrink-0">🏆</div>
                    <div>
                        <p class="font-display font-extrabold text-lg text-ink">Prêmio InovaCidade INICIATIVAS 2026</p>
                        <p class="text-sm text-muted mt-1">Instituto Smart City Business America &middot; São Paulo, 16 de junho de 2026</p>
                        <p class="text-sm mt-2">
                            Concedido à <strong>Prefeitura de Caraguatatuba, SP</strong> pelo projeto<br/>
                            <strong>LGPD360 — Portal de Direitos Digitais do Cidadão + Software de Governança</strong>.
                        </p>
                    </div>
                </div>

                {{--
                    Fotos da premiação.
                    Copie as imagens para public/img/ e substitua os placeholders abaixo:
                    - img/premio-trofeu.jpg   → foto do troféu InovaCidade
                    - img/premio-equipe.jpg   → foto da equipe STII com troféu
                --}}
                <div class="grid grid-cols-2 gap-4 mb-7">
                    @if(file_exists(public_path('img/premio-trofeu.jpg')))
                        <img src="{{ asset('img/premio-trofeu.jpg') }}"
                             alt="Troféu InovaCidade 2026"
                             class="rounded-2xl w-full h-48 object-cover" />
                    @else
                        <div class="rounded-2xl bg-ink/5 flex items-center justify-center py-10 text-center border border-ink/5">
                            <p class="text-muted text-sm italic leading-relaxed">
                                📸 Troféu InovaCidade<br/>
                                <span class="text-xs opacity-50">→ public/img/premio-trofeu.jpg</span>
                            </p>
                        </div>
                    @endif

                    @if(file_exists(public_path('img/premio-equipe.jpg')))
                        <img src="{{ asset('img/premio-equipe.jpg') }}"
                             alt="Equipe STII com troféu InovaCidade 2026"
                             class="rounded-2xl w-full h-48 object-cover" />
                    @else
                        <div class="rounded-2xl bg-ink/5 flex items-center justify-center py-10 text-center border border-ink/5">
                            <p class="text-muted text-sm italic leading-relaxed">
                                📸 Equipe STII com troféu<br/>
                                <span class="text-xs opacity-50">→ public/img/premio-equipe.jpg</span>
                            </p>
                        </div>
                    @endif
                </div>

                <ul class="exp-list">
                    <li>✦ Laravel 12 &middot; PHP 8.2 &middot; MySQL + PostgreSQL &middot; Tailwind CSS 4 &middot; Vite 7</li>
                    <li>✦ OAuth 2.0 + PKCE integrado ao SSO gov.br em produção real</li>
                    <li>✦ 3 conexões de banco simultâneas: MySQL principal, MySQL externo (ROPA/RIPD), PostgreSQL (data warehouse)</li>
                    <li>✦ Consulta de dados pessoais em 4 sistemas municipais integrados</li>
                    <li>✦ Design da interface, arquitetura UX/UI e acessibilidade e-MAG completa (VLibras, alto contraste, controle de fonte)</li>
                    <li>✦ Projeto de conclusão de curso — IFSP Caraguatatuba, ADS &middot; Orientador: Prof. Ms. Eduardo Noboru Sasaki</li>
                    <li>✦ Contrato formal: Contrato de Prestação de Serviços n.° 042/2026</li>
                </ul>
            </div>
        </div>

    </div>
</section>
