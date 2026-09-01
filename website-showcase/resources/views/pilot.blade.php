@extends('layout')

@section('title', 'AIRA Founding Pilot | Governed AI in 4–6 weken')
@section('meta_description', 'Test governed AI binnen één concrete workflow. Een AIRA Founding Pilot levert binnen 4–6 weken een werkende pilot, controleerbaar bewijs en implementatieadvies vanaf €2.500 excl. btw.')

@section('hero')
<section class="relative isolate overflow-hidden bg-[#07111f] text-white">
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_80%_20%,rgba(64,224,208,0.16),transparent_34%),linear-gradient(135deg,#07111f_0%,#10243a_100%)]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 md:py-24 mobile-gutter">
        <div class="grid lg:grid-cols-[1.25fr_0.75fr] gap-8 lg:gap-16 items-end">
            <div>
                <div class="text-xs sm:text-sm font-bold uppercase tracking-[0.14em] text-cyan-200">AIRA Founding Pilot</div>
                <h1 class="mt-5 text-[2.45rem] sm:text-5xl lg:text-6xl font-bold leading-[1.02] tracking-[-0.035em]">Van AI-belofte naar een aantoonbaar werkende workflow.</h1>
                <p class="mt-6 max-w-3xl text-[1.05rem] md:text-xl leading-[1.65] text-slate-200">Test governed AI op één concreet besluitvormingsproces, met menselijke regie, herleidbare bronnen en controleerbare resultaten.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-3 mobile-stack-actions"><a href="https://calendly.com/aira-kennismaking" target="_blank" rel="noopener" class="aira-btn rounded-xl sm:rounded-full bg-[#40E0D0] px-6 font-bold text-[#07111f] hover:bg-[#68eadc] transition">Plan een pilotgesprek</a><a href="/#aira-opportunity-radar" class="aira-btn rounded-xl sm:rounded-full border border-white/20 bg-white/[0.07] px-6 font-bold text-white hover:bg-white/[0.13] transition">Bekijk werkende technologie</a></div>
            </div>
            <aside class="rounded-3xl border border-white/10 bg-white/[0.06] p-6 md:p-8 backdrop-blur-sm">
                <div class="text-xs font-bold uppercase tracking-[0.16em] text-cyan-200">Investering</div>
                <div class="mt-3 text-4xl font-bold">Vanaf €2.500</div>
                <div class="mt-1 text-sm text-slate-300">exclusief btw</div>
                <div class="my-6 h-px bg-white/10"></div>
                <dl class="space-y-4 text-sm"><div class="flex justify-between gap-5"><dt class="text-slate-300">Doorlooptijd</dt><dd class="font-bold text-white">4–6 weken</dd></div><div class="flex justify-between gap-5"><dt class="text-slate-300">Scope</dt><dd class="font-bold text-white text-right">Eén workflow</dd></div><div class="flex justify-between gap-5"><dt class="text-slate-300">Resultaat</dt><dd class="font-bold text-white text-right">Pilot + advies</dd></div></dl>
            </aside>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="bg-white py-16 md:py-24 mobile-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="grid lg:grid-cols-[0.8fr_1.2fr] gap-9 lg:gap-16">
            <div><div class="aira-kicker text-sm font-bold uppercase tracking-[0.14em]">Wat u krijgt</div><h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight text-[#07111f]">Klein beginnen. Serieus bewijzen.</h2><p class="mt-5 text-[1.05rem] md:text-lg leading-[1.7] aira-copy">De pilot wordt bewust afgebakend. Zo ontstaat binnen enkele weken echt bewijs van waarde, zonder direct een groot veranderprogramma te starten.</p></div>
            <div class="grid sm:grid-cols-2 gap-4 md:gap-5">
                @foreach ([['01','Intake en succescriteria','We kiezen één vraagstuk, bepalen de gebruikers en maken vooraf meetbaar wanneer de pilot geslaagd is.'],['02','Werkend pilotprototype','AIRA werkt met echte of veilig geanonimiseerde data binnen de afgesproken workflow.'],['03','Governance en bewijs','Bronnen, aannames, onzekerheden, menselijke controles en beslissingen blijven inzichtelijk.'],['04','Evaluatie en opschaling','U ontvangt een demonstratie, evaluatierapport en concreet advies voor implementatie of vervolg.']] as [$nr,$title,$text])
                <article class="rounded-2xl border border-slate-200 bg-[#f8fafb] p-6"><div class="text-xs font-mono text-[#006B68]">{{ $nr }}</div><h3 class="mt-3 text-xl font-bold text-[#07111f]">{{ $title }}</h3><p class="mt-3 leading-[1.65] aira-copy">{{ $text }}</p></article>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-[#f3f7f8] py-16 md:py-24 mobile-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="max-w-3xl"><div class="aira-kicker text-sm font-bold uppercase tracking-[0.14em]">Mogelijke workflows</div><h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight text-[#07111f]">Begin waar betere besluitvorming direct waarde oplevert.</h2></div>
        <div class="mt-9 md:mt-10 grid md:grid-cols-3 gap-4 md:gap-6">
            <article class="rounded-3xl bg-white border border-slate-200 p-6 md:p-7 shadow-sm"><div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">Procurement</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Aanbestedingen en kansen</h3><p class="mt-4 leading-[1.65] aira-copy">Relevante kansen vinden, fit beoordelen en een onderbouwde go/no-go-beslissing voorbereiden.</p></article>
            <article class="rounded-3xl bg-white border border-slate-200 p-6 md:p-7 shadow-sm"><div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">Risico</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Claims, bewijs en onzekerheid</h3><p class="mt-4 leading-[1.65] aira-copy">Documenten en argumenten analyseren en zichtbaar maken waar bewijs, tegenspraak of menselijke review nodig is.</p></article>
            <article class="rounded-3xl bg-white border border-slate-200 p-6 md:p-7 shadow-sm"><div class="aira-kicker text-xs font-bold uppercase tracking-[0.16em]">Publieke sector</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Beleid en besluitvorming</h3><p class="mt-4 leading-[1.65] aira-copy">Opties, belangen, regels en gevolgen structureren met transparante menselijke verantwoordelijkheid.</p></article>
        </div>
    </div>
</section>

<section class="bg-white py-16 md:py-24 mobile-section">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mobile-gutter">
        <div class="text-center"><div class="aira-kicker text-sm font-bold uppercase tracking-[0.14em]">Werkwijze</div><h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight text-[#07111f]">Vier stappen naar aantoonbare waarde.</h2></div>
        <ol class="mt-9 md:mt-10 grid sm:grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ([['1','Verkennen','Vraagstuk en haalbaarheid'],['2','Afbakenen','Data en succescriteria'],['3','Uitvoeren','Bouwen, testen en reviewen'],['4','Beslissen','Evalueren en opschalen']] as [$nr,$title,$text])
            <li class="rounded-2xl border border-slate-200 p-6"><div class="flex h-11 w-11 items-center justify-center rounded-full bg-[#07111f] font-bold text-cyan-200">{{ $nr }}</div><h3 class="mt-4 text-lg font-bold text-[#07111f]">{{ $title }}</h3><p class="mt-2 text-sm leading-relaxed aira-copy">{{ $text }}</p></li>
            @endforeach
        </ol>
    </div>
</section>

<section class="bg-[#2E4462] text-white py-16 md:py-20 mobile-section">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center mobile-gutter"><div class="text-sm font-bold uppercase tracking-[0.14em] text-cyan-200">Beperkt aantal founding pilots</div><h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.025em] leading-tight">Welke workflow moet in uw organisatie aantoonbaar beter?</h2><p class="mt-5 max-w-3xl mx-auto text-[1.05rem] md:text-lg leading-[1.7] text-white/85">In een eerste gesprek bepalen we of het vraagstuk geschikt is, welke resultaten meetbaar zijn en welke pilotscope realistisch is.</p><a href="https://calendly.com/aira-kennismaking" target="_blank" rel="noopener" class="aira-btn mt-8 w-full sm:w-auto rounded-xl sm:rounded-full bg-[#40E0D0] px-7 font-bold text-[#07111f] hover:bg-[#68eadc] transition">Plan een pilotgesprek</a></div>
</section>
@endsection
