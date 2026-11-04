@extends('layouts.app')

@section('title', 'Bharat Agro Industry & Machinery | Patna - Government Scheme Approved Machines')

@section('content')

<!-- 1. Hero Banner Slider Section -->
<section class="relative bg-slate-950 overflow-hidden text-white min-h-[460px] sm:min-h-[560px] lg:min-h-[640px] flex items-center">
    <!-- Slides Container -->
    <div id="hero-slider" class="absolute inset-0 w-full h-full">
        <!-- Slide 1: Mukhyamantri Udyog -->
        <div class="hero-slide absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-100">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider-mukhyamantri.jpg') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/80 to-transparent"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <div class="max-w-2xl py-16 space-y-6">
                    <div class="slide-animate inline-flex items-center gap-2 bg-amber-500/20 text-amber-300 border border-amber-400/40 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wide uppercase">
                        <span>🇮🇳 Preferred Partner for Entrepreneurs in Bihar &amp; Jharkhand</span>
                    </div>
                    <h1 class="slide-animate text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit',sans-serif] leading-tight text-white">
                        All Commercial Machinery Available Under <span class="text-amber-400">Government Schemes</span>
                    </h1>
                    <p class="slide-animate text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        Certified commercial and agro machinery for Mukhyamantri Udyami Yojana, Laghu Udyami Yojana (₹2 Lakh Free Grant), PMEGP, and PMFME schemes.
                    </p>
                    <div class="slide-animate flex flex-wrap items-center gap-4 pt-2">
                        <button type="button" class="open-quote-modal px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold rounded-xl text-sm shadow-lg transition-transform hover:scale-105">
                            Get Instant Quotation
                        </button>
                        <a href="tel:+917061973186" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl text-sm border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>Call: +91 7061973186</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Prime Minister Yojna -->
        <div class="hero-slide absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0 pointer-events-none">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider-prime-minister.jpg') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/95 via-blue-950/80 to-transparent"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <div class="max-w-2xl py-16 space-y-6">
                    <div class="slide-animate inline-flex items-center gap-2 bg-blue-500/20 text-blue-300 border border-blue-400/40 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wide uppercase">
                        <span>🚀 Self-Reliant India Initiative</span>
                    </div>
                    <h2 class="slide-animate text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit',sans-serif] leading-tight text-white">
                        Become a Successful Entrepreneur - <span class="text-amber-400">Avail Government Subsidies</span>
                    </h2>
                    <p class="slide-animate text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        Avail 35% to 50% capital subsidies on Flour Mills, Pulse Mills, Spice Pulverizers, Agarbatti, Camphor, and Packaging Equipment.
                    </p>
                    <div class="slide-animate flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('schemes') }}" class="px-6 py-3.5 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-sm shadow-lg transition-transform hover:scale-105">
                            Check Scheme Eligibility
                        </a>
                        <a href="{{ route('products') }}" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl text-sm border border-white/20 backdrop-blur-sm transition">
                            Browse All Machines
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Bharat Agro Patna -->
        <div class="hero-slide absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0 pointer-events-none">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider-bharat-agro.jpg') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/80 to-transparent"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <div class="max-w-2xl py-16 space-y-6">
                    <div class="slide-animate inline-flex items-center gap-2 bg-emerald-500/20 text-emerald-300 border border-emerald-400/40 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wide uppercase">
                        <span>Special Focus on Women &amp; Youth</span>
                    </div>
                    <h2 class="slide-animate text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit',sans-serif] leading-tight text-white">
                        Golden Opportunities for <span class="text-amber-400">Self-Employment</span>
                    </h2>
                    <p class="slide-animate text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        Start your own small-scale enterprise with minimal capital investment. Complete technical training, machinery guidance, and bank loan documentation provided by our Patna team.
                    </p>
                    <div class="slide-animate flex flex-wrap items-center gap-4 pt-2">
                        <button type="button" class="open-quote-modal px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold rounded-xl text-sm shadow-lg transition">
                            Free Consultation
                        </button>
                        <a href="{{ route('contact') }}" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl text-sm border border-white/20 backdrop-blur-sm transition">
                            Visit Patna Showroom
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Navigation Buttons -->
    <div class="absolute bottom-6 right-6 sm:right-12 z-20 flex items-center gap-3">
        <button id="hero-prev" class="w-10 h-10 rounded-full bg-black/40 hover:bg-amber-500 text-white hover:text-black border border-white/20 flex items-center justify-center transition" aria-label="Previous Slide">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button id="hero-next" class="w-10 h-10 rounded-full bg-black/40 hover:bg-amber-500 text-white hover:text-black border border-white/20 flex items-center justify-center transition" aria-label="Next Slide">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
    </div>

    <!-- Slider Dots -->
    <div class="absolute bottom-6 left-6 sm:left-12 z-20 flex items-center gap-2">
        <button class="hero-dot w-8 h-2.5 rounded-full bg-amber-400 transition-all duration-300" aria-label="Slide 1"></button>
        <button class="hero-dot w-3 h-2.5 rounded-full bg-white/50 transition-all duration-300" aria-label="Slide 2"></button>
        <button class="hero-dot w-3 h-2.5 rounded-full bg-white/50 transition-all duration-300" aria-label="Slide 3"></button>
    </div>
</section>

<!-- 2. Prime Government Schemes Banner Strip -->
<section class="bg-gradient-to-r from-blue-900 via-blue-950 to-slate-950 text-white py-8 border-y-4 border-amber-500 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-amber-500 text-slate-950 flex items-center justify-center shrink-0 shadow-lg font-bold text-2xl">
                    📜
                </div>
                <div>
                    <h2 class="text-base sm:text-lg font-bold text-amber-400 font-['Outfit',sans-serif]">
                        Certified Machinery Supplier Under State &amp; Central Government Schemes
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-300 mt-1">
                        All essential machines are available under Mukhyamantri Udyami Yojana, Mukhyamantri Laghu Udyami Yojana, PMEGP, and PMFME.
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <button type="button" class="open-quote-modal px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-lg text-xs sm:text-sm shadow transition">
                    Get Official Quotation
                </button>
                <a href="{{ route('schemes') }}" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs sm:text-sm border border-white/20 transition">
                    Explore Schemes →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. Dynamic Stats Counter Section (GSAP ScrollTrigger) -->
<section class="py-12 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 text-center">
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="text-3xl sm:text-4xl font-extrabold text-blue-900 font-['Outfit',sans-serif] stat-counter" data-target="500" data-suffix="+">
                    0
                </div>
                <div class="text-xs sm:text-sm font-semibold text-slate-700 mt-1">
                    Units Installed
                </div>
                <div class="text-[11px] text-slate-500">Commercial &amp; Agro Setups</div>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="text-3xl sm:text-4xl font-extrabold text-amber-600 font-['Outfit',sans-serif] stat-counter" data-target="100" data-suffix="%">
                    0
                </div>
                <div class="text-xs sm:text-sm font-semibold text-slate-700 mt-1">
                    Scheme Compliant
                </div>
                <div class="text-[11px] text-slate-500">Govt Approved Machinery</div>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="text-3xl sm:text-4xl font-extrabold text-blue-900 font-['Outfit',sans-serif] stat-counter" data-target="28" data-suffix="+">
                    0
                </div>
                <div class="text-xs sm:text-sm font-semibold text-slate-700 mt-1">
                    Districts Covered
                </div>
                <div class="text-[11px] text-slate-500">Bihar &amp; Jharkhand Network</div>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="text-3xl sm:text-4xl font-extrabold text-emerald-600 font-['Outfit',sans-serif] stat-counter" data-target="99" data-suffix="%">
                    0
                </div>
                <div class="text-xs sm:text-sm font-semibold text-slate-700 mt-1">
                    Satisfied Clients
                </div>
                <div class="text-[11px] text-slate-500">Positive Feedback &amp; Trust</div>
            </div>
        </div>
    </div>
</section>

<!-- 4. About Company Section -->
<section class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Image Collage -->
            <div class="lg:col-span-5 relative gsap-fade-up">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                    <img src="{{ asset('images/about-bharat-agro.jpg') }}" alt="Bharat Agro Industry Patna Office" class="w-full h-auto object-cover">
                </div>
                <!-- Floating Stock Image Badge -->
                <div class="hidden sm:block absolute -bottom-6 -right-6 w-48 rounded-xl overflow-hidden shadow-xl border-4 border-white bg-white">
                    <img src="{{ asset('images/scheme-stock.jpg') }}" alt="Ready Stock Machines in Patna" class="w-full h-auto object-cover">
                    <div class="p-1.5 text-center text-[10px] font-bold text-slate-800 bg-amber-400">
                        Ready Stock Available in Patna
                    </div>
                </div>
                <!-- Experience badge -->
                <div class="absolute -top-4 -left-4 bg-blue-900 text-white p-3.5 rounded-2xl shadow-lg border-2 border-amber-400 text-center">
                    <span class="block text-xl font-bold font-['Outfit']">PATNA</span>
                    <span class="block text-[10px] uppercase tracking-wider text-amber-300">Head Office &amp; Showroom</span>
                </div>
            </div>

            <!-- Right Content Details -->
            <div class="lg:col-span-7 space-y-6 gsap-fade-up">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                        ABOUT COMPANY
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 mt-3 font-['Outfit',sans-serif] leading-tight">
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
                    <p class="font-semibold text-blue-900 bg-blue-50/80 p-3.5 rounded-xl border-l-4 border-blue-900 text-sm">
                        "We believe in empowering self-employment and strengthening local industries by making modern, efficient, and approved machines easily accessible."
                    </p>
                </div>

                <!-- Feature Points Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>Approved Quotations &amp; GST Invoices for Schemes</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>Live Machinery Demos &amp; Ready Stock in Patna</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>Hands-on Operator Training &amp; On-Site Setup</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>1-Year Comprehensive Warranty &amp; Spares</span>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="{{ route('about') }}" class="px-6 py-3 bg-blue-900 hover:bg-blue-950 text-white font-semibold rounded-xl text-sm shadow transition">
                        Learn More About Us →
                    </a>
                    <button type="button" class="open-quote-modal px-6 py-3 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-sm shadow transition">
                        Start Consultation
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Government Schemes Showcase -->
<section class="py-16 sm:py-24 bg-gradient-to-b from-slate-50 via-white to-slate-50 border-y border-slate-200/90 relative overflow-hidden">
    <!-- Subtle Industrial Dot Background -->
    <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-35 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-3.5">
            <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-blue-900 bg-blue-100/90 border border-blue-200/80 px-4 py-1 rounded-full shadow-xs">
                <span class="w-2 h-2 rounded-full bg-blue-700 animate-pulse"></span>
                Official Government Subsidy Partner
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Outfit'] tracking-tight">
                We Supply Machines Eligible Under the Following Schemes
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Avail substantial capital subsidies from the Central &amp; State Governments on certified commercial machinery. We provide end-to-end support from official GST bank quotation and project DPR preparation to on-site installation.
            </p>

            <!-- Quick Trust Pills -->
            <div class="flex flex-wrap items-center justify-center gap-2.5 pt-2 text-xs font-semibold text-slate-700">
                <span class="inline-flex items-center gap-1.5 bg-white px-3 py-1 rounded-full border border-slate-200 shadow-xs">
                    <span class="text-amber-500">⭐</span> ₹2 Lakhs 100% Free Grant
                </span>
                <span class="inline-flex items-center gap-1.5 bg-white px-3 py-1 rounded-full border border-slate-200 shadow-xs">
                    <span class="text-blue-600">⚡</span> ₹10 Lakhs Project Loan &amp; 50% Subsidy
                </span>
                <span class="inline-flex items-center gap-1.5 bg-white px-3 py-1 rounded-full border border-slate-200 shadow-xs">
                    <span class="text-emerald-600">📄</span> Instant Bank Quotation &amp; DPR
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 gsap-stagger-parent">
            @foreach($schemes as $scheme)
                <div class="gsap-stagger-item flex">
                    <x-scheme-card :scheme="$scheme" />
                </div>
            @endforeach
        </div>

        <div class="mt-14 text-center">
            <a href="{{ route('schemes') }}" class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-2xl bg-gradient-to-r from-slate-900 via-blue-950 to-slate-900 hover:from-blue-900 hover:to-slate-900 text-white font-bold text-xs sm:text-sm shadow-md hover:shadow-lg transition-all group">
                <span>View Complete Scheme Guidelines &amp; Application Steps</span>
                <span class="text-amber-400 font-bold group-hover:translate-x-1 transition-transform">→</span>
            </a>
        </div>
    </div>
</section>

<!-- 6. Our Products (Interactive Tab Filtering + GSAP) -->
<section class="py-16 sm:py-20 bg-slate-50" id="products-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                    OUR COMMERCIAL MACHINERY
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 mt-2 font-['Outfit']">
                    Commercial &amp; Agro Machinery Catalog
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-1">
                    Located in Patna | Serving Bihar &amp; Jharkhand with Ready Stock
                </p>
            </div>
            <a href="{{ route('products') }}" class="inline-flex items-center gap-1.5 text-blue-900 font-bold hover:text-amber-600 transition text-sm">
                <span>Browse All 27+ Machines</span>
                <span>→</span>
            </a>
        </div>

        <!-- Interactive Category Filter Tabs -->
        <div class="flex flex-wrap items-center gap-2 mb-8">
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-blue-900 text-white border-blue-900 shadow-md" data-category="all">
                All Machines
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="food-processing">
                Food Processing &amp; Agro
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="small-industry">
                Small Scale Manufacturing
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="packaging">
                Packaging &amp; Disposables
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="hardware-industrial">
                Hardware &amp; Industrial
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="water-beverage">
                Water &amp; Beverage
            </button>
        </div>

        <!-- Products Grid -->
        <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($allProducts as $product)
                <div class="home-product-card" data-category="{{ $product['category'] }}">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 7. Why Choose Us Section -->
<section class="py-16 sm:py-20 bg-white border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                WHY CHOOSE US?
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Outfit']">
                Reliability, Performance &amp; Long-Term Commitment
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                We do not just deliver machines - we provide turnkey technical guidance to make your enterprise financially viable and sustainable.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Box 1 -->
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-all shadow-sm hover:shadow-lg flex flex-col group">
                <div class="w-14 h-14 rounded-2xl bg-blue-900 text-white flex items-center justify-center font-bold text-2xl mb-6 shadow-md group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                    🤝
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3 font-['Outfit']">
                    Entrepreneur-Focused Approach
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    We understand the challenges faced by new and growing entrepreneurs and offer practical, scalable machinery solutions designed to support sustainable business growth and long-term success.
                </p>
            </div>

            <!-- Box 2 -->
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-all shadow-sm hover:shadow-lg flex flex-col group">
                <div class="w-14 h-14 rounded-2xl bg-amber-500 text-slate-950 flex items-center justify-center font-bold text-2xl mb-6 shadow-md group-hover:bg-blue-900 group-hover:text-white transition-colors">
                    ⚙️
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3 font-['Outfit']">
                    Quality &amp; Performance Assurance
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Our machines are thoroughly tested for durability, efficiency, and consistent performance, ensuring long-term reliability, low maintenance, and smooth operation for commercial and industrial use.
                </p>
            </div>

            <!-- Box 3 -->
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-all shadow-sm hover:shadow-lg flex flex-col group">
                <div class="w-14 h-14 rounded-2xl bg-blue-900 text-white flex items-center justify-center font-bold text-2xl mb-6 shadow-md group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                    📍
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3 font-['Outfit']">
                    Trusted Supplier in Bihar &amp; Jharkhand
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    We proudly serve entrepreneurs across Bihar and Jharkhand by delivering reliable commercial machinery, transparent dealings, timely support, and long-term service relationships built on trust and performance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 8. Awards & Achievements Section -->
<section class="py-16 sm:py-24 bg-slate-950 text-white relative overflow-hidden">
    <!-- Background Industrial Pattern & Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-40 pointer-events-none"></div>
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-amber-400 bg-amber-950/80 border border-amber-500/30 px-3.5 py-1 rounded-full shadow-xs">
                ⭐ Official Honors &amp; Recognitions
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-amber-400 font-['Outfit'] tracking-tight">
                Awards &amp; Achievements
            </h2>
            <p class="text-xs sm:text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
                Honored by esteemed government dignitaries, state ministers, and industry summits for outstanding contributions to industrial entrepreneurship and MSME development across Bihar &amp; Jharkhand.
            </p>
        </div>

        <!-- 6 Awards Grid (Matching Authentic Website Layout) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
            <!-- Award 1 -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                    <img src="{{ asset('images/award-1.jpg') }}" alt="Bharat Agro Stage Recognition Ceremony" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                </div>
                <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between border-t border-slate-800">
                    <div>
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">State Summit Keynote</span>
                        <h4 class="text-sm sm:text-base font-bold text-white leading-snug group-hover:text-amber-300 transition-colors">
                            Bharat Agro Stage Recognition Ceremony
                        </h4>
                    </div>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                        Felicitation at regional industry summit for promoting modern food processing technology across Bihar.
                    </p>
                </div>
            </div>

            <!-- Award 2 -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                    <img src="{{ asset('images/award-2.jpg') }}" alt="Youth Entrepreneurship Excellence Award Presentation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                </div>
                <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between border-t border-slate-800">
                    <div>
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Excellence Award</span>
                        <h4 class="text-sm sm:text-base font-bold text-white leading-snug group-hover:text-amber-300 transition-colors">
                            Youth Enterprise Empowerment Award
                        </h4>
                    </div>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                        Presented to Bharat Agro leadership for enabling hundreds of youth to start profitable micro-enterprises.
                    </p>
                </div>
            </div>

            <!-- Award 3 -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                    <img src="{{ asset('images/award-3.jpg') }}" alt="Bihar Industrial Promotion Package Meet (BIADA & Startup Bihar)" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                </div>
                <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between border-t border-slate-800">
                    <div>
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Invest Bihar &amp; BIADA</span>
                        <h4 class="text-sm sm:text-base font-bold text-white leading-snug group-hover:text-amber-300 transition-colors">
                            Bihar Industrial Package Delegation 2025
                        </h4>
                    </div>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                        Active participation and delegation at the Startup Bihar &amp; BIADA industrial investment rollout program.
                    </p>
                </div>
            </div>

            <!-- Award 4 -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                    <img src="{{ asset('images/award-4.jpg') }}" alt="Women Entrepreneurship Honor" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                </div>
                <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between border-t border-slate-800">
                    <div>
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Dignitary Felicitation</span>
                        <h4 class="text-sm sm:text-base font-bold text-white leading-snug group-hover:text-amber-300 transition-colors">
                            Excellence in Agro Machinery Supply
                        </h4>
                    </div>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                        Honored with auspicious Buddha idol memento by state dignitaries for unwavering manufacturing commitment.
                    </p>
                </div>
            </div>

            <!-- Award 5 -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                    <img src="{{ asset('images/award-5.jpg') }}" alt="State MSME Leadership Award Plaque" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                </div>
                <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between border-t border-slate-800">
                    <div>
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Leadership Trophy</span>
                        <h4 class="text-sm sm:text-base font-bold text-white leading-snug group-hover:text-amber-300 transition-colors">
                            State MSME Leadership Award Plaque
                        </h4>
                    </div>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                        Awarded for premier supply chain execution under Mukhyamantri Udyami &amp; Laghu Udyami schemes.
                    </p>
                </div>
            </div>

            <!-- Award 6 -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-400 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                    <img src="{{ asset('images/award-6.jpg') }}" alt="Dignitary Honor &amp; Appreciation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                </div>
                <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between border-t border-slate-800">
                    <div>
                        <span class="text-[11px] font-bold text-amber-400 uppercase tracking-wider block mb-1">Statewide Recognition</span>
                        <h4 class="text-sm sm:text-base font-bold text-white leading-snug group-hover:text-amber-300 transition-colors">
                            Dignitary Felicitation &amp; Trust Honor
                        </h4>
                    </div>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                        Recognized by industry leaders for genuine machinery delivery, prompt warranty service, and on-site support.
                    </p>
                </div>
            </div>
        </div>

        <!-- News & Media Appreciation Banner -->
        <div class="mt-12 bg-gradient-to-r from-slate-900 via-blue-950 to-slate-900 rounded-2xl border border-amber-500/30 p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center shrink-0 border border-amber-500/30 text-2xl">
                    📰
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-bold text-white">Media Coverage &amp; Press Appreciation</h4>
                    <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                        Extensively covered by regional dailies and business media for generating grassroots rural employment across Bihar.
                    </p>
                </div>
            </div>
            <a href="{{ asset('images/award-news.jpg') }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold px-5 py-2.5 rounded-xl text-xs sm:text-sm shadow transition-colors shrink-0">
                <span>View News Feature</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- 9. Real Customer Deliveries & Factory Gallery -->
<section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-900 bg-blue-100 px-3 py-1 rounded-md">
                    DELIVERY &amp; INSTALLATIONS
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 mt-2 font-['Outfit']">
                    Real Customer Deliveries &amp; Installations
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-1">
                    Authentic photographs of machine handovers and factory installations across Bihar and Jharkhand
                </p>
            </div>
            <div class="text-xs text-slate-500 font-medium">
                20+ Authentic Customer Photographs
            </div>
        </div>

        <!-- Scrolling Grid of Original Carousel Photos -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach(array_slice($galleryImages, 0, 15) as $idx => $img)
                <div class="group relative rounded-xl overflow-hidden bg-slate-200 shadow-sm aspect-square border border-slate-200 hover:shadow-lg transition">
                    <img src="{{ asset($img) }}" alt="Customer Installation {{ $idx + 1 }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-2.5">
                        <span class="text-[11px] font-semibold text-white">Client Setup #{{ $idx + 1 }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 10. Testimonials Section -->
<section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                TESTIMONIALS
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Outfit']">
                WHAT CLIENT SAYS?
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                Real feedback and success journeys from our entrepreneurs across Bihar and Jharkhand
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm relative">
                <div class="text-amber-400 text-3xl mb-3">★★★★★</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                    "I purchased a commercial flour mill and spice pulverizer unit under Mukhyamantri Udyami Yojana from Bharat Agro Patna. The machine quality is stellar, and they supported us right from the initial bank quotation to final commissioning."
                </p>
                <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-900 text-sm block">Sunil Kumar Singh</span>
                        <span class="text-xs text-slate-500">Entrepreneur, Muzaffarpur (Bihar)</span>
                    </div>
                    <span class="text-xs text-blue-900 font-bold bg-blue-100 px-2 py-0.5 rounded">Flour Mill Unit</span>
                </div>
            </div>

            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm relative">
                <div class="text-amber-400 text-3xl mb-3">★★★★★</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                    "Under Mukhyamantri Laghu Udyami Yojana (₹2 Lakhs grant), we bought automatic agarbatti and camphor making machines. The operator training was thorough, and our finished goods are now selling easily in local wholesale markets."
                </p>
                <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-900 text-sm block">Rekha Devi (SHG Leader)</span>
                        <span class="text-xs text-slate-500">Entrepreneur, Gaya (Bihar)</span>
                    </div>
                    <span class="text-xs text-emerald-900 font-bold bg-emerald-100 px-2 py-0.5 rounded">Laghu Udyami Scheme</span>
                </div>
            </div>

            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm relative">
                <div class="text-amber-400 text-3xl mb-3">★★★★★</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                    "We established a high-speed paper cup and napkin manufacturing facility under PMEGP. Bharat Agro engineers traveled from Patna to install the unit, align motors, and have honored their 1-year service commitment seamlessly."
                </p>
                <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-900 text-sm block">Amit Kumar Verma</span>
                        <span class="text-xs text-slate-500">Entrepreneur, Ranchi (Jharkhand)</span>
                    </div>
                    <span class="text-xs text-purple-900 font-bold bg-purple-100 px-2 py-0.5 rounded">PMEGP Scheme</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 11. Consultation & Contact Map Section -->
<section class="py-16 sm:py-20 bg-slate-900 text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left Info & Map -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 bg-amber-950 px-3 py-1 rounded-md border border-amber-500/30">
                        VISIT OUR PATNA SHOWROOM
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-2 font-['Outfit']">
                        Bharat Agro Industry &amp; Machinery, Patna
                    </h2>
                </div>

                <div class="space-y-4 text-sm text-slate-300">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-800 text-amber-400 flex items-center justify-center shrink-0 mt-1 font-bold">
                            📍
                        </div>
                        <div>
                            <span class="font-bold text-white block">Office &amp; Showroom Address:</span>
                            <span>2nd Floor, Opp. Aryabhata University, Mithapur Old Bus Stand Road, Patna-01, Bihar</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-800 text-amber-400 flex items-center justify-center shrink-0 font-bold">
                            📞
                        </div>
                        <div>
                            <span class="font-bold text-white block">Mobile Numbers:</span>
                            <span>+91 7061973186, +91 7858945066</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-800 text-amber-400 flex items-center justify-center shrink-0 font-bold">
                            ✉️
                        </div>
                        <div>
                            <span class="font-bold text-white block">Official Email:</span>
                            <span>bharatagro02@gmail.com</span>
                        </div>
                    </div>
                </div>

                <!-- Map Frame -->
                <div class="rounded-2xl overflow-hidden border border-slate-700 shadow-xl h-64 bg-slate-800">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.2238472481356!2d85.1275!3d25.5975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed585c54d3d8db%3A0xa1b2c3d4e5f60718!2sAryabhatta%20Knowledge%20University%2C%20Mithapur%2C%20Patna%2C%20Bihar%20800001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Bharat Agro Location Patna">
                    </iframe>
                </div>
            </div>

            <!-- Right Quick Consultation Form -->
            <div class="lg:col-span-7 bg-white text-slate-900 rounded-3xl p-8 sm:p-10 shadow-2xl border border-slate-100">
                <h3 class="text-2xl font-bold font-['Outfit'] text-blue-950 mb-1">
                    Request Free Consultation &amp; Quotation
                </h3>
                <p class="text-xs sm:text-sm text-slate-500 mb-6">
                    Select your interested machinery and applicable scheme. Our technical engineering team will send you a quotation within 30 minutes.
                </p>

                <form action="{{ route('inquiry.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Full Name *</label>
                            <input type="text" name="name" required placeholder="Enter your full name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Mobile / WhatsApp No. *</label>
                            <input type="tel" name="phone" required placeholder="10-digit mobile number" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">City / District *</label>
                            <input type="text" name="city" required placeholder="e.g. Patna, Ranchi, Gaya" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">State</label>
                            <select name="state" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="Bihar" selected>Bihar</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Other">Other State</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Select Machine</label>
                            <select name="machine_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="Commercial Aata Chakki Machine">Commercial Aata Chakki Machine</option>
                                <option value="Heavy Duty Aata Pulverizer">Heavy Duty Aata Pulverizer</option>
                                <option value="Automatic Masala Pulverizer">Automatic Masala Pulverizer</option>
                                <option value="Mini Daal Mill & Polisher">Mini Daal Mill &amp; Polisher</option>
                                <option value="Automatic Agarbatti Making Machine">Automatic Agarbatti Making Machine</option>
                                <option value="Camphor (Kapoor) Tablet Machine">Camphor (Kapoor) Tablet Machine</option>
                                <option value="Hydraulic Slipper (Chappal) Machine">Hydraulic Slipper Machine</option>
                                <option value="Paper Cup Making Machine">Paper Cup Making Machine</option>
                                <option value="Paper Napkin Machine">Paper Napkin Machine</option>
                                <option value="Aluminium Foil Container Machine">Aluminium Foil Container Machine</option>
                                <option value="Commercial RO Water Plant">Commercial RO Water Plant</option>
                                <option value="Automatic Wire Nail Machine">Automatic Wire Nail Machine</option>
                                <option value="Other Custom Machine">Other Custom Machine</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Government Scheme</label>
                            <select name="scheme" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="Mukhyamantri Udyami Yojana">Mukhyamantri Udyami Yojana (₹10 Lakhs)</option>
                                <option value="Mukhyamantri Laghu Udyami Yojana">Mukhyamantri Laghu Udyami Yojana (₹2 Lakhs Grant)</option>
                                <option value="PMEGP">PMEGP (Up to 35% Capital Subsidy)</option>
                                <option value="PMFME">PMFME (Food Processing Scheme)</option>
                                <option value="Private / Self Investment">Self Investment / Non-Subsidy</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Message or Questions</label>
                        <textarea name="message" rows="3" placeholder="Specify desired output capacity, timeline, or electricity setup..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-amber-500 via-amber-600 to-amber-700 hover:from-amber-600 hover:to-amber-800 text-slate-950 font-bold rounded-xl text-base shadow-lg transition-transform hover:scale-[1.01]">
                        Submit Quotation Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
