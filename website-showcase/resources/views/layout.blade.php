<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#07111f">
    <title>@yield('title', 'AIRA Systems | Governed AI')</title>
    <meta name="description" content="@yield('meta_description', 'AIRA Systems ontwikkelt governed AI voor complexe besluitvorming met menselijke regie, evidence en traceerbaarheid.')">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AIRA Systems">
    <meta name="twitter:card" content="summary_large_image">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root{--aira-ink:#07111f;--aira-cyan:#40E0D0}
        body{text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased}
        a:focus-visible,button:focus-visible{outline:3px solid rgba(64,224,208,.85);outline-offset:3px;border-radius:.5rem}
        .aira-nav{background:rgba(7,17,31,.95);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px)}
        @media(prefers-reduced-motion:reduce){*,*:before,*:after{scroll-behavior:auto!important;animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}}
    </style>
    @stack('head')
</head>
<body class="bg-white text-[#26313d] selection:bg-[#40E0D0]/30 selection:text-[#07111f]">
    <a href="#main-content" class="sr-only focus:not-sr-only fixed top-3 left-3 z-[100] bg-white text-[#07111f] px-4 py-2 rounded-lg shadow-xl font-semibold">Ga naar inhoud</a>
    <header class="sticky top-0 z-50 border-b border-white/10 aira-nav text-white shadow-lg">
        <nav aria-label="Hoofdnavigatie" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-[76px] flex items-center justify-between gap-5">
                <a href="/" class="flex items-center gap-3 shrink-0" aria-label="AIRA Systems home"><span class="leading-tight"><span class="block text-lg md:text-xl font-bold tracking-[0.08em]">AIRA</span><span class="hidden sm:block text-[10px] uppercase tracking-[0.18em] text-white/55">Intelligence You Can Trust</span></span></a>
                <div class="hidden md:flex items-center gap-6 text-sm font-semibold text-white/80"><a href="#aira-opportunity-radar">Tender Radar</a><a href="#">Pathfinder</a><a href="#">ADA</a><a href="https://www.aira-ai.com" target="_blank" rel="noopener" class="inline-flex px-5 py-2.5 bg-[#40E0D0] text-[#07111f] font-bold rounded-full">Live website</a></div>
            </div>
        </nav>
    </header>
    @yield('hero')
    <main id="main-content">@yield('content')</main>
    <footer class="bg-[#07111f] text-slate-400 border-t border-white/10"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12"><div class="text-white font-bold tracking-[0.08em]">AIRA Systems</div><div class="mt-1 text-xs uppercase tracking-[0.16em] text-cyan-200/70">Intelligence You Can Trust</div><p class="mt-4 max-w-xl leading-relaxed">Public showcase of AIRA's governed AI presentation layer. Production secrets, infrastructure and private implementation details are excluded.</p></div></footer>
</body>
</html>
