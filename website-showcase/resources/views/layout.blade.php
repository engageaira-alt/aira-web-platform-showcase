<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#07111f">
    <title>@yield('title', 'AIRA Systems | Governed AI')</title>
    <meta name="description" content="@yield('meta_description', 'AIRA Systems ontwikkelt governed AI voor complexe besluitvorming met menselijke regie, evidence en traceerbaarheid.')">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AIRA Systems">
    <meta name="twitter:card" content="summary_large_image">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root{
            --aira-ink:#07111f;
            --aira-navy:#2E4462;
            --aira-teal:#006B68;
            --aira-cyan:#40E0D0;
            --aira-copy:#475467;
        }
        html{overflow-x:hidden}
        body{overflow-x:hidden;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased}
        a,button,summary{-webkit-tap-highlight-color:transparent}
        a:focus-visible,button:focus-visible,summary:focus-visible,input:focus-visible,select:focus-visible,textarea:focus-visible{outline:3px solid rgba(64,224,208,.9);outline-offset:3px;border-radius:.65rem}
        .aira-nav{background:rgba(7,17,31,.96);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px)}
        .aira-btn{min-height:48px;padding:.75rem 1.25rem;line-height:1.25;display:inline-flex;align-items:center;justify-content:center;text-align:center}
        .aira-kicker{color:var(--aira-teal)}
        .aira-copy{color:var(--aira-copy)}
        .humanx-ticker{background:var(--aira-cyan);color:var(--aira-ink);overflow:hidden;border-bottom:1px solid rgba(7,17,31,.12)}
        .humanx-ticker a{display:block;color:inherit;text-decoration:none}
        .humanx-track{display:flex;width:max-content;align-items:center;min-height:40px;white-space:nowrap;animation:humanxTicker 32s linear infinite;will-change:transform}
        .humanx-track span{display:inline-flex;align-items:center;gap:.7rem;padding-right:2rem;font-size:.73rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase}
        .humanx-track b{font-weight:900}
        .humanx-ticker:hover .humanx-track,.humanx-ticker:focus-within .humanx-track{animation-play-state:paused}
        @keyframes humanxTicker{to{transform:translateX(-50%)}}
        .mobile-menu summary{list-style:none}
        .mobile-menu summary::-webkit-details-marker{display:none}
        .mobile-menu[open] .menu-open{display:none}
        .mobile-menu:not([open]) .menu-close{display:none}
        @media(max-width:767px){
            .mobile-gutter{padding-left:1.125rem!important;padding-right:1.125rem!important}
            .mobile-stack-actions>*{width:100%}
            .mobile-section{padding-top:4.5rem!important;padding-bottom:4.5rem!important}
            .humanx-track{min-height:40px}
            .humanx-track span{font-size:.68rem;letter-spacing:.065em;padding-right:1.5rem}
        }
        @media(min-width:390px) and (max-width:767px){.mobile-gutter{padding-left:1.25rem!important;padding-right:1.25rem!important}}
        @media(prefers-reduced-motion:reduce){
            *,*:before,*:after{scroll-behavior:auto!important;animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}
            .humanx-track{animation:none!important;transform:none!important}
            .humanx-track .ticker-copy{display:none}
        }
    </style>
    @stack('head')
</head>
<body class="bg-white text-[#26313d] selection:bg-[#40E0D0]/30 selection:text-[#07111f]">
    <a href="#main-content" class="sr-only focus:not-sr-only fixed top-3 left-3 z-[100] bg-white text-[#07111f] px-4 py-2 rounded-lg shadow-xl font-semibold">Ga naar inhoud</a>

    <header class="sticky top-0 z-50 border-b border-white/10 aira-nav text-white shadow-lg">
        <nav aria-label="Hoofdnavigatie" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
            <div class="h-[68px] md:h-[76px] flex items-center justify-between gap-4">
                <a href="/" class="flex items-center gap-3 shrink-0" aria-label="AIRA Systems home">
                    <span class="leading-tight">
                        <span class="block text-lg md:text-xl font-bold tracking-[0.08em]">AIRA</span>
                        <span class="hidden sm:block text-[10px] uppercase tracking-[0.18em] text-white/60">Intelligence You Can Trust</span>
                    </span>
                </a>

                <div class="hidden md:flex items-center gap-6 text-sm font-semibold text-white/80">
                    <a class="hover:text-white transition" href="/#aira-opportunity-radar">Tender Radar</a>
                    <a class="hover:text-white transition" href="#">Pathfinder</a>
                    <a class="hover:text-white transition" href="#">ADA</a>
                    <a href="/pilot" class="aira-btn min-h-0 px-5 py-2.5 bg-[#40E0D0] text-[#07111f] font-bold rounded-full hover:bg-[#68eadc] transition">Pilot starten</a>
                </div>

                <details class="mobile-menu relative md:hidden">
                    <summary class="cursor-pointer inline-flex min-h-[48px] min-w-[48px] items-center justify-center rounded-xl border border-white/15 bg-white/[0.06] text-sm font-bold" aria-label="Menu openen of sluiten">
                        <span class="menu-open">Menu</span>
                        <span class="menu-close">Sluit</span>
                    </summary>
                    <div class="absolute right-0 mt-3 w-[min(82vw,320px)] overflow-hidden rounded-2xl border border-white/10 bg-[#07111f] p-3 shadow-2xl">
                        <div class="grid gap-1 text-sm font-semibold">
                            <a class="aira-btn justify-start rounded-xl text-white/85 hover:bg-white/[0.07]" href="/#aira-opportunity-radar">Tender Radar</a>
                            <a class="aira-btn justify-start rounded-xl text-white/85 hover:bg-white/[0.07]" href="#">Pathfinder</a>
                            <a class="aira-btn justify-start rounded-xl text-white/85 hover:bg-white/[0.07]" href="#">ADA</a>
                            <a class="aira-btn mt-1 rounded-xl bg-[#40E0D0] text-[#07111f] font-bold" href="/pilot">Ontwerp uw pilot</a>
                        </div>
                    </div>
                </details>
            </div>
        </nav>
    </header>

    <div class="humanx-ticker" role="region" aria-label="HumanX Amsterdam 2026">
        <a href="https://www.humanx.co/europe/register" rel="noopener" target="_blank" aria-label="AIRA Systems op HumanX Amsterdam 2026, 22 tot 24 september in RAI Amsterdam. Bekijk registratie.">
            <div class="humanx-track">
                <span><b>AIRA Systems at HumanX Amsterdam 2026</b> • 22–24 September • RAI Amsterdam • 30% off with code HX26E_AIRAAISYSTEMS • Meet AIRA at HumanX →</span>
                <span class="ticker-copy" aria-hidden="true"><b>AIRA Systems at HumanX Amsterdam 2026</b> • 22–24 September • RAI Amsterdam • 30% off with code HX26E_AIRAAISYSTEMS • Meet AIRA at HumanX →</span>
            </div>
        </a>
    </div>

    @yield('hero')
    <main id="main-content">@yield('content')</main>

    <footer class="bg-[#07111f] text-slate-400 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 mobile-gutter">
            <div class="text-white font-bold tracking-[0.08em]">AIRA Systems</div>
            <div class="mt-1 text-xs uppercase tracking-[0.16em] text-cyan-200/70">Intelligence You Can Trust</div>
            <p class="mt-4 max-w-xl leading-relaxed">Public showcase of AIRA's governed AI presentation layer. Production secrets, infrastructure and private implementation details are excluded.</p>
        </div>
    </footer>
</body>
</html>
