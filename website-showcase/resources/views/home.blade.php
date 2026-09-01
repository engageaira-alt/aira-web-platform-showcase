@extends('layout')

@section('title', 'AIRA Systems | Governed AI voor complexe besluitvorming')
@section('meta_description', 'AIRA Systems ontwikkelt governed AI voor complexe besluitvorming: Tender Radar, Pathfinder en ADA op één traceerbare AI-kern met menselijke regie en evidence by design.')

@section('hero')
<section class="relative isolate overflow-hidden bg-[#07111f] text-white">
    <div class="absolute inset-0 -z-20 bg-cover bg-center lg:bg-[center_right] hero-bg-zoom" style="background-image:url('{{ asset('images/aira-header.jpg') }}')"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-[#07111f] via-[#07111f]/92 to-[#07111f]/45"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-[#07111f]/85 via-[#07111f]/15 to-black/10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 md:py-24 lg:py-28 mobile-gutter">
        <div class="max-w-3xl">
            <div class="text-xs sm:text-sm font-bold uppercase tracking-[0.14em] text-cyan-200">AIRA · Governed Decision Intelligence</div>
            <h1 class="mt-5 text-[2.55rem] sm:text-5xl lg:text-6xl font-bold leading-[1.01] tracking-[-0.035em]">
                Minder handwerk. Snellere analyse.
                <span class="block mt-2 text-cyan-200">Betere beslissingen.</span>
            </h1>
            <p class="mt-6 max-w-2xl text-[1.05rem] sm:text-lg md:text-xl leading-[1.65] text-slate-200">AIRA helpt organisaties informatie sneller te vinden, complexe vragen te structureren en beslissingen controleerbaar te onderbouwen. AI ondersteunt het werk; mensen houden de regie.</p>

            <div class="mt-8 flex flex-col sm:flex-row sm:items-center gap-3 mobile-stack-actions">
                <a href="/pilot" class="aira-btn rounded-xl sm:rounded-full bg-[#40E0D0] px-6 font-bold text-[#07111f] shadow-xl shadow-cyan-950/20 hover:bg-[#68eadc] transition">Ontdek uw eerste pilot</a>
                <a href="#aira-opportunity-radar" class="aira-btn rounded-xl sm:rounded-full border border-white/20 bg-white/[0.07] px-6 font-bold text-white hover:bg-white/[0.13] transition">Bekijk AIRA live →</a>
            </div>

            <div class="mt-7 flex flex-wrap gap-x-5 gap-y-2 text-sm text-slate-300">
                <span>✓ Mens houdt regie</span>
                <span>✓ Bewijs herleidbaar</span>
                <span>✓ Start met één proces</span>
            </div>

            <div class="mt-8 inline-flex flex-wrap items-center gap-x-3 gap-y-1 rounded-2xl border border-white/10 bg-white/[0.06] px-5 py-3 text-sm md:text-base text-slate-200">
                <strong class="text-white">Vanaf €2.500 excl. btw</strong>
                <span class="text-white/30">·</span>
                <span>4–6 weken van nulmeting naar bewijs</span>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="border-y border-slate-200 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-7 md:py-8 mobile-gutter">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-5 gap-y-6 text-center">
            <div><div class="text-[11px] uppercase tracking-[0.14em] text-slate-500">Core</div><div class="mt-1 text-sm sm:text-base font-bold text-[#07111f]">Governed AI</div></div>
            <div><div class="text-[11px] uppercase tracking-[0.14em] text-slate-500">Control</div><div class="mt-1 text-sm sm:text-base font-bold text-[#07111f]">Human-in-control</div></div>
            <div><div class="text-[11px] uppercase tracking-[0.14em] text-slate-500">Assurance</div><div class="mt-1 text-sm sm:text-base font-bold text-[#07111f]">Evidence-aware</div></div>
            <div><div class="text-[11px] uppercase tracking-[0.14em] text-slate-500">Pilot</div><div class="mt-1 text-sm sm:text-base font-bold text-[#07111f]">4–6 weken</div></div>
        </div>
    </div>
</section>

<section class="bg-white py-16 md:py-24 mobile-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="max-w-3xl">
            <div class="aira-kicker text-sm font-bold uppercase tracking-[0.14em]">Wat het u oplevert</div>
            <h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight text-[#07111f]">Drie verbeteringen die mensen direct merken.</h2>
            <p class="mt-5 text-[1.05rem] md:text-lg leading-[1.7] aira-copy">AIRA begint niet bij een technologielijst, maar bij werk dat onnodig traag, repetitief of moeilijk te overzien is.</p>
        </div>

        <div class="mt-9 md:mt-11 grid md:grid-cols-3 gap-4 md:gap-6">
            <article class="rounded-3xl border border-slate-200 bg-white p-6 md:p-8 shadow-sm">
                <div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">01 · Minder zoeken</div>
                <h3 class="mt-3 text-2xl font-bold text-[#07111f]">Relevante informatie sneller bij elkaar.</h3>
                <p class="mt-4 leading-[1.65] aira-copy">Laat AIRA publieke bronnen, documenten en signalen doorzoeken zodat professionals niet alles zelf hoeven af te zoeken.</p>
            </article>
            <article class="rounded-3xl border border-slate-200 bg-white p-6 md:p-8 shadow-sm">
                <div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">02 · Meer overzicht</div>
                <h3 class="mt-3 text-2xl font-bold text-[#07111f]">Complexiteit zichtbaar zonder ruis.</h3>
                <p class="mt-4 leading-[1.65] aira-copy">Breng regels, risico’s, belangen, evidence en afhankelijkheden samen zodat een keuze makkelijker te begrijpen wordt.</p>
            </article>
            <article class="rounded-3xl border border-slate-200 bg-white p-6 md:p-8 shadow-sm">
                <div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">03 · Beslis met bewijs</div>
                <h3 class="mt-3 text-2xl font-bold text-[#07111f]">Versnellen zonder controle weg te geven.</h3>
                <p class="mt-4 leading-[1.65] aira-copy">Automatiseer het eerste werk, maar houd bron, onzekerheid en menselijke verantwoordelijkheid zichtbaar in het besluit.</p>
            </article>
        </div>
    </div>
</section>

<section class="bg-[#f6f8fa] pt-16 md:pt-20 pb-3 md:pb-4 mobile-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="max-w-3xl">
            <div class="aira-kicker text-sm font-bold uppercase tracking-[0.14em]">Zie AIRA aan het werk</div>
            <h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight text-[#07111f]">Van open signaal naar een kans die u kunt beoordelen.</h2>
            <p class="mt-5 text-[1.05rem] md:text-lg leading-[1.7] aira-copy">De mobiele preview houdt alleen de beslisinformatie in beeld. De volledige cockpit blijft beschikbaar voor wie de technische diepte wil onderzoeken.</p>
        </div>
    </div>
</section>

@include('components.opportunity-radar')

<section class="bg-[#f6f8fa] py-16 md:py-24 mobile-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="max-w-3xl">
            <div class="aira-kicker text-sm font-bold uppercase tracking-[0.14em]">Eén kern · meerdere toepassingen</div>
            <h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight text-[#07111f]">Geen verzameling losse AI-tools. Eén bestuurbare architectuur.</h2>
            <p class="mt-5 text-[1.05rem] md:text-lg leading-[1.7] aira-copy">De toepassingen delen dezelfde principes voor context, reasoning, bewijs, verificatie en governance. Daardoor kan AIRA nieuwe use-cases toevoegen zonder telkens opnieuw bij nul te beginnen.</p>
        </div>

        <div class="mt-9 md:mt-11 grid md:grid-cols-3 gap-4 md:gap-6">
            <article class="rounded-3xl border border-slate-200 bg-white p-6 md:p-8 shadow-sm"><div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">Tender Radar</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Vind kansen die echt passen</h3><p class="mt-4 leading-[1.65] aira-copy">Bundelt tenders, subsidies en zakelijke kansen en ondersteunt een onderbouwde fit- en go/no-go-beoordeling.</p></article>
            <article class="rounded-3xl border border-slate-200 bg-white p-6 md:p-8 shadow-sm"><div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">Pathfinder</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Structureer complexe vragen</h3><p class="mt-4 leading-[1.65] aira-copy">Brengt doelen, constraints, stakeholders, risico’s en mogelijke routes in kaart voordat een organisatie zich vastlegt op een oplossing.</p></article>
            <article class="rounded-3xl border border-slate-200 bg-white p-6 md:p-8 shadow-sm"><div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">ADA</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Analyseer claims en bewijs</h3><p class="mt-4 leading-[1.65] aira-copy">Maakt zichtbaar waar conclusies sterk zijn, waar onzekerheid zit en waar aanvullende menselijke review nodig is.</p></article>
        </div>
    </div>
</section>

<section class="bg-[#07111f] text-white py-16 md:py-24 mobile-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="grid lg:grid-cols-[0.9fr_1.1fr] gap-10 lg:gap-16 items-start">
            <div>
                <div class="text-sm font-bold uppercase tracking-[0.14em] text-cyan-200">AIRA Core</div>
                <h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight">Eerst begrijpen. Dan verbeteren. Daarna bewijzen.</h2>
                <p class="mt-5 text-[1.05rem] md:text-lg leading-[1.7] text-slate-300">Generatieve AI alleen is niet genoeg voor complexe besluiten. AIRA organiseert de route van context naar keuze, uitvoering en controle.</p>
            </div>
            <div class="grid sm:grid-cols-2 gap-4">
                @foreach ([['01','Begrijpen','Context, doelen, stakeholders, constraints en kennis worden expliciet gemaakt.'],['02','Beslissen','Opties worden vergeleken op waarde, risico, bewijs en uitvoerbaarheid.'],['03','Uitvoeren','Gespecialiseerde agents krijgen begrensde taken in plaats van onbeperkte autonomie.'],['04','Verifiëren','Provenance, evidence, governance en menselijke review bepalen wat vertrouwd mag worden.']] as [$nr,$title,$text])
                <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6"><div class="text-xs font-mono text-cyan-200/80">{{ $nr }}</div><h3 class="mt-3 text-xl font-bold">{{ $title }}</h3><p class="mt-3 leading-[1.65] text-slate-300">{{ $text }}</p></div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-16 md:py-24 mobile-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="max-w-3xl mx-auto text-center">
            <div class="aira-kicker text-sm font-bold uppercase tracking-[0.14em]">Van bewijs naar praktijk</div>
            <h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight text-[#07111f]">Eén workflow. Vier fasen. Een helder schaalbesluit.</h2>
            <p class="mt-5 text-[1.05rem] md:text-lg leading-[1.7] aira-copy">Klein genoeg om risico te beheersen, serieus genoeg om operationele waarde te meten.</p>
        </div>

        <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ([['01','Fit & nulmeting'],['02','Systeemkaart & prototype'],['03','Begrensde praktijktest'],['04','Bewijs & schaalbesluit']] as [$nr,$title])
            <div class="rounded-2xl border border-slate-200 p-6"><div class="aira-kicker text-xs font-bold tracking-[0.15em]">{{ $nr }}</div><h3 class="mt-3 text-lg font-bold text-[#07111f]">{{ $title }}</h3></div>
            @endforeach
        </div>

        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-3 mobile-stack-actions">
            <a href="/pilot" class="aira-btn rounded-xl sm:rounded-full bg-[#07111f] px-6 font-bold text-white hover:bg-[#12243a] transition">Ontwerp uw pilot</a>
            <a href="/contact" class="aira-btn rounded-xl sm:rounded-full border border-slate-300 px-6 font-bold text-[#2E4462] hover:bg-slate-50 transition">Plan een fitcheck</a>
        </div>
    </div>
</section>

<section class="bg-[#2E4462] text-white py-16 md:py-20 mobile-section">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center mobile-gutter">
        <div class="text-sm font-bold uppercase tracking-[0.14em] text-cyan-200">Human-in-control · Evidence-aware</div>
        <h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight">Begin met het systeem, niet met de tool.</h2>
        <p class="mt-5 max-w-3xl mx-auto text-[1.05rem] md:text-lg leading-[1.7] text-white/85">AIRA is ontworpen voor complexe besluitvorming waarin context, risico, evidence en menselijke verantwoordelijkheid expliciet moeten blijven.</p>
    </div>
</section>

@push('head')
<style>
    @keyframes airaHeroDrift{0%,100%{transform:scale(1.01)}50%{transform:scale(1.045)}}
    .hero-bg-zoom{transform-origin:center right}
    @media(min-width:768px) and (prefers-reduced-motion:no-preference){.hero-bg-zoom{animation:airaHeroDrift 28s ease-in-out infinite}}
    @media(max-width:767px){.hero-bg-zoom{background-position:62% center;transform:none}}
</style>
@endpush
@endsection
