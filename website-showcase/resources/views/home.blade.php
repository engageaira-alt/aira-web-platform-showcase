@extends('layout')

@section('title', 'AIRA Systems | Governed AI voor complexe besluitvorming')
@section('meta_description', 'AIRA Systems ontwikkelt governed AI voor complexe besluitvorming: Tender Radar, Pathfinder en ADA op één traceerbare AI-kern met menselijke regie en evidence by design.')

@section('hero')
<section class="relative isolate overflow-hidden bg-[#07111f] text-white">
    <div class="absolute inset-0 -z-20 bg-cover bg-center lg:bg-[center_right] hero-bg-zoom" style="background-image:url('{{ asset('images/aira-header.jpg') }}')"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-[#07111f] via-[#07111f]/82 to-[#07111f]/20"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-[#07111f]/70 via-transparent to-black/10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 lg:py-32">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 rounded-full border border-cyan-200/20 bg-cyan-200/[0.07] px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-cyan-100">Governed AI · Human-in-control · Traceerbaar</div>
            <h1 class="mt-7 text-4xl sm:text-5xl lg:text-6xl font-bold leading-[1.02] tracking-[-0.03em]">Intelligence you can trust.<span class="block mt-2 text-cyan-200">Voor beslissingen die ertoe doen.</span></h1>
            <p class="mt-7 max-w-2xl text-lg md:text-xl leading-relaxed text-slate-200">AIRA combineert strategische analyse, gespecialiseerde AI-agents, semantische modellen, bewijs en governance in één gecontroleerde besluitvormingsarchitectuur.</p>
            <p class="mt-4 max-w-2xl text-base md:text-lg leading-relaxed text-slate-400">Eén kern, meerdere toepassingen: Tender Radar voor kansen, Pathfinder voor complexe vraagstukken en ADA voor document- en bewijsanalyse.</p>
            <div class="mt-9 flex flex-col sm:flex-row gap-3"><a href="/demo/" class="inline-flex items-center justify-center rounded-full bg-[#40E0D0] px-6 py-3.5 font-bold text-[#07111f] shadow-xl shadow-cyan-950/20 hover:bg-[#68eadc] transition">Bekijk AIRA live</a><a href="https://calendly.com/aira-kennismaking" target="_blank" rel="noopener" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/[0.08] px-6 py-3.5 font-bold text-white hover:bg-white/[0.14] transition">Bespreek een pilot</a></div>
            <div class="mt-9 flex flex-wrap gap-x-6 gap-y-2 text-sm text-slate-400"><span>✓ Menselijke regie</span><span>✓ Evidence & provenance</span><span>✓ Reproduceerbare analyse</span><span>✓ Noord-Nederland → EU</span></div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="border-y border-slate-200 bg-white"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6"><div class="grid grid-cols-2 md:grid-cols-4 gap-5 text-center"><div><div class="text-xs uppercase tracking-[0.14em] text-slate-500">Core</div><div class="mt-1 font-bold text-[#07111f]">Governed AI</div></div><div><div class="text-xs uppercase tracking-[0.14em] text-slate-500">Control</div><div class="mt-1 font-bold text-[#07111f]">Human-in-control</div></div><div><div class="text-xs uppercase tracking-[0.14em] text-slate-500">Assurance</div><div class="mt-1 font-bold text-[#07111f]">Evidence & provenance</div></div><div><div class="text-xs uppercase tracking-[0.14em] text-slate-500">Output</div><div class="mt-1 font-bold text-[#07111f]">Traceerbare besluiten</div></div></div></div></section>

@include('components.opportunity-radar')

<section class="bg-[#f6f8fa] py-16 md:py-24"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="max-w-3xl"><div class="text-sm font-bold uppercase tracking-[0.14em] text-[#008B8B]">Eén kern · meerdere toepassingen</div><h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.02em] text-[#07111f]">Geen losse AI-tools. Eén bestuurbare architectuur.</h2><p class="mt-5 text-lg leading-relaxed text-slate-600">De toepassingen delen dezelfde principes voor context, reasoning, bewijs, verificatie en governance. Daardoor kan AIRA nieuwe use-cases toevoegen zonder telkens opnieuw bij nul te beginnen.</p></div>
<div class="mt-10 grid md:grid-cols-3 gap-6">
<article class="rounded-3xl border border-slate-200 bg-white p-7 md:p-8 shadow-sm"><div class="text-xs font-bold uppercase tracking-[0.16em] text-[#008B8B]">Tender Radar</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Vind kansen die echt passen</h3><p class="mt-4 leading-relaxed text-slate-600">Bundelt relevante tenders, subsidies en zakelijke kansen en ondersteunt een onderbouwde fit- en go/no-go-beoordeling.</p></article>
<article class="rounded-3xl border border-slate-200 bg-white p-7 md:p-8 shadow-sm"><div class="text-xs font-bold uppercase tracking-[0.16em] text-[#008B8B]">Pathfinder</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Structureer complexe vragen</h3><p class="mt-4 leading-relaxed text-slate-600">Brengt doelen, constraints, stakeholders, risico’s en mogelijke routes in kaart voordat een organisatie zich vastlegt op een oplossing.</p></article>
<article class="rounded-3xl border border-slate-200 bg-white p-7 md:p-8 shadow-sm"><div class="text-xs font-bold uppercase tracking-[0.16em] text-[#008B8B]">ADA</div><h3 class="mt-3 text-2xl font-bold text-[#07111f]">Analyseer claims en bewijs</h3><p class="mt-4 leading-relaxed text-slate-600">Analyseert documenten, argumenten en bewijs en maakt zichtbaar waar conclusies sterk zijn, waar onzekerheid zit en waar review nodig is.</p></article>
</div></div></section>

<section class="bg-[#07111f] text-white py-16 md:py-24"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="grid lg:grid-cols-[0.9fr_1.1fr] gap-10 lg:gap-16 items-start"><div><div class="text-sm font-bold uppercase tracking-[0.14em] text-cyan-200">AIRA Core</div><h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.02em]">Van vraag naar verifieerbare actie.</h2><p class="mt-5 text-lg leading-relaxed text-slate-300">Generatieve AI alleen is niet genoeg voor complexe besluiten. AIRA organiseert de volledige route van context naar keuze, uitvoering en controle.</p></div>
<div class="grid sm:grid-cols-2 gap-4">
@foreach ([['01','Begrijpen','Context, doelen, stakeholders, constraints en kennis worden expliciet gemaakt.'],['02','Beslissen','Opties worden vergeleken op waarde, risico, bewijs en uitvoerbaarheid.'],['03','Uitvoeren','Gespecialiseerde agents krijgen begrensde taken in plaats van onbeperkte autonomie.'],['04','Verifiëren','Provenance, evidence, governance en menselijke review bepalen wat vertrouwd mag worden.']] as [$nr,$title,$text])
<div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6"><div class="text-xs font-mono text-cyan-200/70">{{ $nr }}</div><h3 class="mt-3 text-xl font-bold">{{ $title }}</h3><p class="mt-3 leading-relaxed text-slate-400">{{ $text }}</p></div>
@endforeach
</div></div></div></section>

<section class="bg-white py-16 md:py-24"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="text-center max-w-3xl mx-auto"><div class="text-sm font-bold uppercase tracking-[0.14em] text-[#008B8B]">Waar AIRA waarde toevoegt</div><h2 class="mt-3 text-3xl md:text-5xl font-bold tracking-[-0.02em] text-[#07111f]">Voor situaties waarin één simpel antwoord niet volstaat.</h2></div><div class="mt-10 grid md:grid-cols-2 lg:grid-cols-4 gap-5">@foreach ([['Publieke sector','AI inzetten met governance, transparantie en menselijke verantwoordelijkheid.'],['MKB','Praktische automatisering en AI-adoptie zonder onnodige complexiteit.'],['Complexe samenwerking','Belangen, rollen, evidence en besluitroutes expliciet maken.'],['Strategie & innovatie','Technische mogelijkheden vertalen naar keuzes die uitvoerbaar en verdedigbaar zijn.']] as [$title,$text])<div class="rounded-2xl border border-slate-200 p-6"><h3 class="text-lg font-bold text-[#07111f]">{{ $title }}</h3><p class="mt-3 leading-relaxed text-slate-600">{{ $text }}</p></div>@endforeach</div></div></section>

<section class="bg-[#2E4462] text-white py-16 md:py-20"><div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center"><h2 class="text-3xl md:text-5xl font-bold tracking-[-0.02em]">Begin met het vraagstuk, niet met de tool.</h2><p class="mt-5 max-w-3xl mx-auto text-lg leading-relaxed text-white/80">AIRA is ontworpen voor complexe besluitvorming waarin context, risico, evidence en menselijke verantwoordelijkheid expliciet moeten blijven.</p></div></section>

@push('head')
<style>@keyframes airaHeroDrift{0%,100%{transform:scale(1.01)}50%{transform:scale(1.05)}}.hero-bg-zoom{animation:airaHeroDrift 28s ease-in-out infinite;transform-origin:center right}</style>
@endpush
@endsection
