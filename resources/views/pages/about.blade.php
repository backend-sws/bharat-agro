@extends('layouts.app')

@section('title', 'About Us | Bharat Agro Industry & Machinery Patna')
@section('meta_description', 'Bharat Agro Industry & Machinery Patna - trusted supplier and exporter of commercial agro and industrial machines under government subsidy schemes in Bihar & Jharkhand.')

@section('content')

<!-- Header Banner -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            ESTABLISHED IN PATNA, BIHAR
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            ABOUT US
        </h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto">
            Your Trusted Partner for Commercial Machinery Solutions Across Bihar &amp; Jharkhand
        </p>
    </div>
</div>

<!-- Main Story Section -->
<section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                        ABOUT COMPANY
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 mt-2 font-['Outfit']">
                        Empowering Entrepreneurs with Trusted Agro &amp; Industrial Machinery
                    </h2>
                </div>

                <div class="space-y-4 text-slate-600 text-sm sm:text-base leading-relaxed">
                    <p>
                        <strong>Bharat Agro Industry &amp; Machinery</strong>, based in Patna, is committed to delivering high-quality machinery solutions to entrepreneurs across Bihar and Jharkhand. We specialize in supplying machines approved and applicable under government subsidy schemes, ensuring reliability, transparency, and long-term value.
                    </p>
                    <p>
                        Our goal is to support self-employment, MSME growth, and industrial development by making modern machinery easily accessible to every aspiring entrepreneur.
                    </p>
                    <p>
                        We believe in empowering self-employment and strengthening local industries by making modern, efficient, and approved machines easily accessible.
                    </p>
                </div>

                <div class="bg-blue-50 border-l-4 border-blue-900 p-4 rounded-r-xl">
                    <h4 class="font-bold text-blue-950 text-sm mb-1">Our Vision:</h4>
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                        To enable aspiring youths, women, and rural entrepreneurs across Bihar and Jharkhand to establish sustainable, profitable manufacturing units with comprehensive technical and governmental scheme support.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-6 grid grid-cols-2 gap-4">
                <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                    <img src="{{ asset('images/about-bharat-agro.jpg') }}" alt="Bharat Agro Office Patna" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                    <img src="{{ asset('images/scheme-stock.jpg') }}" alt="Ready Stock Machines" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200 col-span-2">
                    <img src="{{ asset('images/cmyuva.webp') }}" alt="CM Yuva Udyami Yojana Bihar" class="w-full h-48 object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ready Stock & Scheme Focus -->
<section class="py-16 sm:py-20 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Left Card -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-amber-500 text-slate-950 flex items-center justify-center font-bold text-xl">
                    📦
                </div>
                <h3 class="text-xl font-bold font-['Outfit'] text-slate-900">
                    Machines &amp; Materials Available in Ready Stock
                </h3>
                <h4 class="text-sm font-semibold text-blue-900">
                    Commercial machines and materials available for immediate supply
                </h4>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    At Bharat Agro Industry &amp; Machinery, we maintain ready stock of a wide range of commercial machines and related materials so that entrepreneurs can start their projects without unnecessary delays. Our focus is to ensure fast availability, smooth processing, and timely support under government-approved schemes.
                </p>
            </div>

            <!-- Right Card -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-900 text-white flex items-center justify-center font-bold text-xl">
                    📜
                </div>
                <h3 class="text-xl font-bold font-['Outfit'] text-slate-900">
                    Special Focus on Government Schemes
                </h3>
                <h4 class="text-sm font-semibold text-blue-900">
                    Eligible &amp; Approved Under State and Central Subsidy Programs
                </h4>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    We are an exporter and supplier of a wide range of commercial machines used in food processing, agro-based industries, and small-scale manufacturing. Our solutions are designed to meet the eligibility and technical requirements of government schemes such as:
                </p>
                <ul class="text-xs text-slate-700 space-y-1.5 font-medium">
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Mukhyamantri Udyami Yojana (Bihar)</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Mukhyamantri Laghu Udyami Yojana (₹2 Lakhs Free Grant)</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Prime Minister Employment Generation Programme (PMEGP)</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> PM Formalisation of Micro Food Processing Enterprises (PMFME)</li>
                </ul>
            </div>
        </div>

        <!-- Beyond Machine Supply Note -->
        <div class="mt-10 bg-gradient-to-r from-blue-900 to-slate-900 text-white rounded-3xl p-8 sm:p-10 shadow-lg text-center max-w-4xl mx-auto space-y-3">
            <h3 class="text-lg sm:text-xl font-bold font-['Outfit'] text-amber-400">
                Complete End-to-End Entrepreneur Support
            </h3>
            <p class="text-xs sm:text-sm text-slate-200 leading-relaxed">
                "We support you beyond machine supply by providing complete assistance with documentation, quotations, training, and reliable after-sales services as required under the applicable schemes."
            </p>
            <div class="pt-2">
                <button type="button" class="open-quote-modal px-6 py-2.5 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-xs sm:text-sm shadow">
                    Contact Our Patna Office
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Awards and Recognition Section -->
<section class="py-16 sm:py-24 bg-slate-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-2">
            <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-amber-400 bg-amber-950/80 border border-amber-500/30 px-3.5 py-1 rounded-full">
                ⭐ HONOR &amp; ACHIEVEMENTS
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-amber-400 font-['Outfit']">
                Awards &amp; Recognition
            </h2>
            <p class="text-xs sm:text-sm text-slate-300">
                Honored across Bihar for reliability, manufacturing excellence, and grassroots employment generation.
            </p>
        </div>

        <!-- 6 Awards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group bg-slate-950 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl transition-all flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/award-1.jpg') }}" alt="Bharat Agro Stage Recognition" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4 border-t border-slate-800">
                    <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block">State Conclave Keynote</span>
                    <h4 class="text-sm font-bold text-white mt-0.5">Bharat Agro Stage Keynote &amp; Honor</h4>
                </div>
            </div>

            <div class="group bg-slate-950 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl transition-all flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/award-2.jpg') }}" alt="Youth Entrepreneurship Award" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4 border-t border-slate-800">
                    <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block">Excellence Award</span>
                    <h4 class="text-sm font-bold text-white mt-0.5">Youth Enterprise Empowerment Award</h4>
                </div>
            </div>

            <div class="group bg-slate-950 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl transition-all flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/award-3.jpg') }}" alt="Bihar Industrial Package Delegation 2025" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4 border-t border-slate-800">
                    <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block">BIADA &amp; Startup Bihar</span>
                    <h4 class="text-sm font-bold text-white mt-0.5">Bihar Industrial Package Meet 2025</h4>
                </div>
            </div>

            <div class="group bg-slate-950 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl transition-all flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/award-4.jpg') }}" alt="Women Entrepreneurship Honor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4 border-t border-slate-800">
                    <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block">Dignitary Felicitation</span>
                    <h4 class="text-sm font-bold text-white mt-0.5">Excellence in Agro Machinery Supply</h4>
                </div>
            </div>

            <div class="group bg-slate-950 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl transition-all flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/award-5.jpg') }}" alt="State MSME Leadership Award Plaque" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4 border-t border-slate-800">
                    <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block">Leadership Trophy</span>
                    <h4 class="text-sm font-bold text-white mt-0.5">State MSME Leadership Award Plaque</h4>
                </div>
            </div>

            <div class="group bg-slate-950 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl transition-all flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/award-6.jpg') }}" alt="Dignitary Honor &amp; Appreciation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-4 border-t border-slate-800">
                    <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block">Statewide Recognition</span>
                    <h4 class="text-sm font-bold text-white mt-0.5">Dignitary Felicitation &amp; Trust Honor</h4>
                </div>
            </div>
        </div>

        <!-- News Feature Banner -->
        <div class="mt-10 bg-slate-950 rounded-2xl border border-amber-500/30 p-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <span class="text-2xl">📰</span>
                <div>
                    <h4 class="text-sm font-bold text-white">Featured in Prominent News Media</h4>
                    <p class="text-xs text-slate-400">Regularly recognized for supporting MSME industrialization across Bihar &amp; Jharkhand.</p>
                </div>
            </div>
            <a href="{{ asset('images/award-news.jpg') }}" target="_blank" rel="noopener" class="text-xs font-bold text-amber-400 hover:text-amber-300 underline underline-offset-4 shrink-0">
                View Newspaper Article &rarr;
            </a>
        </div>
    </div>
</section>

@endsection
