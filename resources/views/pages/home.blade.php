@extends('layouts.app')

@section('title', 'Bharat Agro Industry & Machinery | पटना - सरकारी योजना अनुमोदित मशीनें')

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
                        <span>🇮🇳 बिहार व झारखण्ड के उद्यमियों की पहली पसंद</span>
                    </div>
                    <h1 class="slide-animate text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit',sans-serif] leading-tight text-white">
                        मुख्यमंत्री एवं प्रधानमंत्री योजनाओं के अंतर्गत <span class="text-amber-400">सभी मशीनें उपलब्ध</span>
                    </h1>
                    <p class="slide-animate text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        मुख्यमंत्री उद्यमी योजना, लघु उद्यमी योजना (₹2 लाख फ्री ग्रांट), PMEGP एवं PMFME के लिए सरकार द्वारा मान्यता प्राप्त उच्च गुणवत्ता वाली व्यावसायिक मशीनें।
                    </p>
                    <div class="slide-animate flex flex-wrap items-center gap-4 pt-2">
                        <button type="button" class="open-quote-modal px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold rounded-xl text-sm shadow-lg transition-transform hover:scale-105">
                            तुरंत कोटेशन प्राप्त करें (Get Quotation)
                        </button>
                        <a href="tel:+917061973186" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl text-sm border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>कॉल करें: +91 7061973186</span>
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
                        <span>🚀 आत्मनिर्भर भारत अभियान</span>
                    </div>
                    <h2 class="slide-animate text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit',sans-serif] leading-tight text-white">
                        बनिए सफल उद्यमी - <span class="text-amber-400">सरकारी योजनाओं का उठाएं लाभ</span>
                    </h2>
                    <p class="slide-animate text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        आटा चक्की, दाल मिल, मसाला ग्राइंडर, अगरबत्ती, कपूर, पेपर कप और पैकेजिंग मशीनों पर 35% से 50% तक सरकारी सब्सिडी का लाभ उठाएं।
                    </p>
                    <div class="slide-animate flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('schemes') }}" class="px-6 py-3.5 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-sm shadow-lg transition-transform hover:scale-105">
                            योजनाओं की पात्रता देखें (Check Eligibility)
                        </a>
                        <a href="{{ route('products') }}" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl text-sm border border-white/20 backdrop-blur-sm transition">
                            सभी मशीनें देखें (Browse Machines)
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
                        <span>महिला एवं युवा विशेष अवसर</span>
                    </div>
                    <h2 class="slide-animate text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit',sans-serif] leading-tight text-white">
                        महिलाओं और युवाओं के लिए <span class="text-amber-400">सुनहरा स्वरोजगार अवसर</span>
                    </h2>
                    <p class="slide-animate text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        कम लागत में अपना स्वयं का लघु उद्योग शुरू करें। संपूर्ण तकनीकी मार्गदर्शन, मशीनरी ट्रेनिंग, और बैंक ऋण कोटेशन हमारी पटना टीम द्वारा प्रदान की जाती है।
                    </p>
                    <div class="slide-animate flex flex-wrap items-center gap-4 pt-2">
                        <button type="button" class="open-quote-modal px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold rounded-xl text-sm shadow-lg transition">
                            नि:शुल्क परामर्श लें (Free Consultation)
                        </button>
                        <a href="{{ route('contact') }}" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl text-sm border border-white/20 backdrop-blur-sm transition">
                            पटना शोरूम का पता देखें
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Navigation Buttons -->
    <div class="absolute bottom-6 right-6 sm:right-12 z-20 flex items-center gap-3">
        <button id="hero-prev" class="w-10 h-10 rounded-full bg-black/40 hover:bg-amber-500 text-white hover:text-black border border-white/20 flex items-center justify-center transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button id="hero-next" class="w-10 h-10 rounded-full bg-black/40 hover:bg-amber-500 text-white hover:text-black border border-white/20 flex items-center justify-center transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
    </div>

    <!-- Slider Dots -->
    <div class="absolute bottom-6 left-6 sm:left-12 z-20 flex items-center gap-2">
        <button class="hero-dot w-8 h-2.5 rounded-full bg-amber-400 transition-all duration-300"></button>
        <button class="hero-dot w-3 h-2.5 rounded-full bg-white/50 transition-all duration-300"></button>
        <button class="hero-dot w-3 h-2.5 rounded-full bg-white/50 transition-all duration-300"></button>
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
                    <h2 class="text-base sm:text-lg font-bold text-amber-400 font-['Noto_Sans_Devanagari',sans-serif]">
                        सरकारी योजनाओं के तहत मान्यता प्राप्त मशीनरी आपूर्तिकर्ता
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-300 mt-1">
                        मुख्यमंत्री उद्यमी योजना, मुख्यमंत्री लघु उद्यमी योजना, प्रधानमंत्री रोजगार योजना (PMEGP) और PMFME के अंतर्गत सभी आवश्यक मशीनों की सुविधा उपलब्ध है।
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <button type="button" class="open-quote-modal px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-lg text-xs sm:text-sm shadow transition">
                    कोटेशन बनवाएं (Get Quote)
                </button>
                <a href="{{ route('schemes') }}" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs sm:text-sm border border-white/20 transition">
                    योजनाएं समझें →
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
                    सफल मशीनें स्थापित
                </div>
                <div class="text-[11px] text-slate-500">Commercial Units Installed</div>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="text-3xl sm:text-4xl font-extrabold text-amber-600 font-['Outfit',sans-serif] stat-counter" data-target="100" data-suffix="%">
                    0
                </div>
                <div class="text-xs sm:text-sm font-semibold text-slate-700 mt-1">
                    सरकारी योजना अनुमोदित
                </div>
                <div class="text-[11px] text-slate-500">Govt Approved Machinery</div>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="text-3xl sm:text-4xl font-extrabold text-blue-900 font-['Outfit',sans-serif] stat-counter" data-target="28" data-suffix="+">
                    0
                </div>
                <div class="text-xs sm:text-sm font-semibold text-slate-700 mt-1">
                    जिलों में सप्लाई कवरेज
                </div>
                <div class="text-[11px] text-slate-500">Bihar &amp; Jharkhand Districts</div>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition">
                <div class="text-3xl sm:text-4xl font-extrabold text-emerald-600 font-['Outfit',sans-serif] stat-counter" data-target="99" data-suffix="%">
                    0
                </div>
                <div class="text-xs sm:text-sm font-semibold text-slate-700 mt-1">
                    संतुष्ट उद्यमी ग्राहक
                </div>
                <div class="text-[11px] text-slate-500">Customer Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- 4. About Company Section (With Original Text & Images) -->
<section class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Image Collage -->
            <div class="lg:col-span-5 relative gsap-fade-up">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                    <img src="{{ asset('images/about-bharat-agro.jpg') }}" alt="Bharat Agro Industry Patna" class="w-full h-auto object-cover">
                </div>
                <!-- Floating Stock Image Badge -->
                <div class="hidden sm:block absolute -bottom-6 -right-6 w-48 rounded-xl overflow-hidden shadow-xl border-4 border-white bg-white">
                    <img src="{{ asset('images/scheme-stock.jpg') }}" alt="Ready Stock Machines Patna" class="w-full h-auto object-cover">
                    <div class="p-1.5 text-center text-[10px] font-bold text-slate-800 bg-amber-400">
                        पटना में रेडी स्टॉक उपलब्ध
                    </div>
                </div>
                <!-- Experience badge -->
                <div class="absolute -top-4 -left-4 bg-blue-900 text-white p-3.5 rounded-2xl shadow-lg border-2 border-amber-400 text-center">
                    <span class="block text-xl font-bold font-['Outfit']">PATNA</span>
                    <span class="block text-[10px] uppercase tracking-wider text-amber-300">हेड ऑफिस एवं शोरूम</span>
                </div>
            </div>

            <!-- Right Content Details -->
            <div class="lg:col-span-7 space-y-6 gsap-fade-up">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                        ABOUT COMPANY • हमारे बारे में
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
                        "हम आधुनिक, कुशल और सरकार द्वारा अनुमोदित मशीनों को सुलभ बनाकर स्वरोजगार को सशक्त बनाने और स्थानीय उद्योगों को मजबूत करने में विश्वास रखते हैं।"
                    </p>
                </div>

                <!-- Feature Points Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>सरकारी योजनाओं के लिए मान्य कोटेशन व बिल</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>पटना में मशीनों का लाइव डेमो एवं रेडी स्टॉक</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>ऑपरेटर ट्रेनिंग एवं ऑन-साइट इंस्टालेशन</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-slate-800 font-medium">
                        <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                        <span>1 वर्ष की वारंटी एवं स्पेयर पार्ट्स सुविधा</span>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="{{ route('about') }}" class="px-6 py-3 bg-blue-900 hover:bg-blue-950 text-white font-semibold rounded-xl text-sm shadow transition">
                        कंपनी के बारे में और जानें →
                    </a>
                    <button type="button" class="open-quote-modal px-6 py-3 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded-xl text-sm shadow transition">
                        बातचीत शुरू करें
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Government Schemes Showcase -->
<section class="py-16 sm:py-20 bg-white border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-900 bg-blue-100 px-3 py-1 rounded-md">
                GOVERNMENT SUBSIDY SCHEMES
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Outfit']">
                हम निम्नलिखित योजनाओं के तहत पात्र मशीनें उपलब्ध कराते हैं
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                बिहार एवं केंद्र सरकार की महत्वाकांक्षी योजनाओं के तहत मशीन खरीद पर भारी अनुदान प्राप्त करें। कोटेशन से लेकर डिलीवरी तक पूर्ण सहयोग।
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 gsap-stagger-parent">
            @foreach($schemes as $scheme)
                <div class="gsap-stagger-item">
                    <x-scheme-card :scheme="$scheme" />
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('schemes') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-slate-900 text-white font-semibold text-sm hover:bg-blue-900 transition">
                <span>सभी योजनाओं के नियम एवं आवेदन प्रक्रिया देखें</span>
                <span class="text-amber-400">→</span>
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
                    लोकप्रिय व्यावसायिक एवं कृषि मशीनें
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-1">
                    Located in Patna | Serving Bihar &amp; Jharkhand with Ready Stock
                </p>
            </div>
            <a href="{{ route('products') }}" class="inline-flex items-center gap-1.5 text-blue-900 font-bold hover:text-amber-600 transition text-sm">
                <span>सभी 27+ मशीनें देखें</span>
                <span>→</span>
            </a>
        </div>

        <!-- Interactive Category Filter Tabs -->
        <div class="flex flex-wrap items-center gap-2 mb-8">
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-blue-900 text-white border-blue-900 shadow-md" data-category="all">
                सभी मशीनें (All)
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="food-processing">
                खाद्य प्रसंस्करण (Food Processing)
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="small-industry">
                लघु उद्योग (Small Industry)
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="packaging">
                पैकेजिंग एवं डिस्पोजल (Packaging)
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="hardware-industrial">
                हार्डवेयर एवं औद्योगिक
            </button>
            <button type="button" class="product-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition bg-white text-slate-700 border-slate-200 hover:border-slate-300" data-category="water-beverage">
                वाटर एवं बेवरेज
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

<!-- 7. Why Choose Us Section (From Original Website) -->
<section class="py-16 sm:py-20 bg-white border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                WHY CHOOSE US? • हमें क्यों चुनें?
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Outfit']">
                विश्वसनीयता, गुणवत्ता और निरंतर सहयोग
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                हम केवल मशीनें नहीं बेचते, बल्कि आपके उद्योग को सफल बनाने के लिए हर कदम पर आपका मार्गदर्शन करते हैं।
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

<!-- 8. Awards & Achievements Section (With Original Awards & News Photos) -->
<section class="py-16 sm:py-20 bg-slate-950 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-400 bg-amber-950/80 border border-amber-500/30 px-3 py-1 rounded-md">
                RECOGNITION • सम्मान एवं उपलब्धियां
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white font-['Outfit']">
                Awards &amp; Achievements
            </h2>
            <p class="text-xs sm:text-sm text-slate-400">
                बिहार एवं झारखण्ड में लघु उद्योगों और स्वरोजगार को बढ़ावा देने के लिए सम्मानित
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-4xl mx-auto">
            <!-- Award Image 1 -->
            <div class="rounded-2xl overflow-hidden border-2 border-amber-400/40 shadow-2xl bg-slate-900 p-2">
                <img src="{{ asset('images/award-1.jpg') }}" alt="Bharat Agro Award Recognition" class="w-full h-auto rounded-xl object-contain max-h-[460px]">
                <div class="p-3 text-center text-xs text-amber-300 font-semibold">
                    उत्कृष्ट उद्यमिता एवं मशीनरी आपूर्ति हेतु सम्मान
                </div>
            </div>

            <!-- Award Image 2 (News Coverage) -->
            <div class="rounded-2xl overflow-hidden border-2 border-amber-400/40 shadow-2xl bg-slate-900 p-2">
                <img src="{{ asset('images/award-news.jpg') }}" alt="News Coverage Bharat Agro Machinery Patna" class="w-full h-auto rounded-xl object-contain max-h-[460px]">
                <div class="p-3 text-center text-xs text-amber-300 font-semibold">
                    प्रमुख समाचार पत्रों में प्रकाशित सराहना एवं उपलब्धियां
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. Real Customer Deliveries & Factory Gallery (Original 20 Carousel Photos) -->
<section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-900 bg-blue-100 px-3 py-1 rounded-md">
                    DELIVERY &amp; INSTALLATIONS
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 mt-2 font-['Outfit']">
                    मशीन डिलीवरी एवं ग्राहक संतुष्टि की झलकियां
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-1">
                    बिहार व झारखण्ड के विभिन्न जिलों में स्थापित की गई मशीनों की वास्तविक तस्वीरें
                </p>
            </div>
            <div class="text-xs text-slate-500 font-medium">
                20+ वास्तविक ग्राहक तस्वीरें (Swipe to view)
            </div>
        </div>

        <!-- Scrolling Grid of Original Carousel Photos -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach(array_slice($galleryImages, 0, 15) as $idx => $img)
                <div class="group relative rounded-xl overflow-hidden bg-slate-200 shadow-sm aspect-square border border-slate-200 hover:shadow-lg transition">
                    <img src="{{ asset($img) }}" alt="Customer Installation {{ $idx + 1 }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-2.5">
                        <span class="text-[11px] font-semibold text-white">सफल इंस्टालेशन #{{ $idx + 1 }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 10. Testimonials Section (What Client Says) -->
<section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                TESTIMONIALS • ग्राहकों की राय
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Outfit']">
                WHAT CLIENT SAYS?
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                हमारे संतुष्ट उद्यमियों के अनुभव और उनकी सफलता की कहानियां
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm relative">
                <div class="text-amber-400 text-3xl mb-3">★★★★★</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                    "मैंने मुख्यमंत्री उद्यमी योजना के तहत आटा चक्की और मसाला पल्वलाइजर मशीन भारत एग्रो पटना से ली थी। मशीन की क्वालिटी बहुत बढ़िया है और उन्होंने बैंक कोटेशन से लेकर डिलीवरी तक पूरा सहयोग किया।"
                </p>
                <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-900 text-sm block">सुनील कुमार सिंह</span>
                        <span class="text-xs text-slate-500">उद्यमी, मुजफ्फरपुर (बिहार)</span>
                    </div>
                    <span class="text-xs text-blue-900 font-bold bg-blue-100 px-2 py-0.5 rounded">आटा चक्की यूनिट</span>
                </div>
            </div>

            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm relative">
                <div class="text-amber-400 text-3xl mb-3">★★★★★</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                    "मुख्यमंत्री लघु उद्यमी योजना (₹2 लाख) के अंतर्गत अगरबत्ती और कपूर बनाने की मशीन खरीदी। ट्रेनिंग बहुत अच्छी मिली और आज हमारा माल स्थानीय बाजार में आसानी से बिक रहा है।"
                </p>
                <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-900 text-sm block">रेखा देवी (स्वयं सहायता समूह)</span>
                        <span class="text-xs text-slate-500">उद्यमी, गया (बिहार)</span>
                    </div>
                    <span class="text-xs text-emerald-900 font-bold bg-emerald-100 px-2 py-0.5 rounded">लघु उद्यमी योजना</span>
                </div>
            </div>

            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm relative">
                <div class="text-amber-400 text-3xl mb-3">★★★★★</div>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                    "PMEGP के तहत पेपर कप और नैपकिन मेकिंग मशीन लगाई। भारत एग्रो की टीम ने पटना से आकर हमारे प्लांट में इंस्टालेशन कराया और 1 साल तक सर्विस का वादा निभाया।"
                </p>
                <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                    <div>
                        <span class="font-bold text-slate-900 text-sm block">अमित कुमार वर्मा</span>
                        <span class="text-xs text-slate-500">उद्यमी, रांची (झारखण्ड)</span>
                    </div>
                    <span class="text-xs text-purple-900 font-bold bg-purple-100 px-2 py-0.5 rounded">PMEGP स्कीम</span>
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
                        भारत एग्रो इंडस्ट्री एवं मशीनरी, पटना
                    </h2>
                </div>

                <div class="space-y-4 text-sm text-slate-300">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-800 text-amber-400 flex items-center justify-center shrink-0 mt-1 font-bold">
                            📍
                        </div>
                        <div>
                            <span class="font-bold text-white block">कार्यालय एवं शोरूम का पता:</span>
                            <span>2nd Floor, Opp. Aryabhata University, Mithapur Old Bus Stand Road, Patna-01, Bihar</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-800 text-amber-400 flex items-center justify-center shrink-0 font-bold">
                            📞
                        </div>
                        <div>
                            <span class="font-bold text-white block">मोबाइल नंबर:</span>
                            <span>+91 7061973186, +91 7858945066</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-800 text-amber-400 flex items-center justify-center shrink-0 font-bold">
                            ✉️
                        </div>
                        <div>
                            <span class="font-bold text-white block">ईमेल आईडी:</span>
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
                    मुफ्त परामर्श एवं कोटेशन प्राप्त करें
                </h3>
                <p class="text-xs sm:text-sm text-slate-500 mb-6">
                    अपनी पसंदीदा मशीन और सरकारी योजना चुनें, हमारी तकनीकी टीम 30 मिनट में आपको कोटेशन भेजेगी।
                </p>

                <form action="{{ route('inquiry.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">आपका नाम (Full Name) *</label>
                            <input type="text" name="name" required placeholder="अपना नाम दर्ज करें" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">मोबाइल नंबर (WhatsApp) *</label>
                            <input type="tel" name="phone" required placeholder="10 अंकों का मोबाइल नंबर" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">शहर / जिला (District) *</label>
                            <input type="text" name="city" required placeholder="उदा. पटना, गया, मुजफ्फरपुर" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">राज्य (State)</label>
                            <select name="state" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="Bihar" selected>बिहार (Bihar)</option>
                                <option value="Jharkhand">झारखण्ड (Jharkhand)</option>
                                <option value="Uttar Pradesh">उत्तर प्रदेश (Uttar Pradesh)</option>
                                <option value="Other">अन्य राज्य (Other State)</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">मशीन चुनें (Select Machine)</label>
                            <select name="machine_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="Commercial Aata Chakki Machine">कमर्शियल आटा चक्की मशीन</option>
                                <option value="Heavy Duty Aata Pulverizer">आटा पल्वलाइजर मशीन</option>
                                <option value="Automatic Masala Pulverizer">मसाला पल्वलाइजर मशीन</option>
                                <option value="Mini Daal Mill & Polisher">दाल मिल मशीन</option>
                                <option value="Automatic Agarbatti Making Machine">अगरबत्ती मेकिंग मशीन</option>
                                <option value="Camphor (Kapoor) Tablet Machine">कपूर मेकिंग मशीन</option>
                                <option value="Hydraulic Slipper (Chappal) Machine">हवाई चप्पल मेकिंग मशीन</option>
                                <option value="Paper Cup Making Machine">पेपर कप मेकिंग मशीन</option>
                                <option value="Paper Napkin Machine">पेपर नैपकिन मेकिंग मशीन</option>
                                <option value="Aluminium Foil Container Machine">एल्युमिनियम फॉयल कंटेनर मशीन</option>
                                <option value="Commercial RO Water Plant">कमर्शियल आरओ वाटर प्लांट</option>
                                <option value="Automatic Wire Nail Machine">वायर नेल (लोहे की कील) मशीन</option>
                                <option value="Other Machine">अन्य कोई मशीन</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">सरकारी योजना (Scheme)</label>
                            <select name="scheme" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="मुख्यमंत्री उद्यमी योजना">मुख्यमंत्री उद्यमी योजना (₹10 लाख)</option>
                                <option value="मुख्यमंत्री लघु उद्यमी योजना">मुख्यमंत्री लघु उद्यमी योजना (₹2 लाख)</option>
                                <option value="PMEGP">प्रधानमंत्री रोजगार योजना (PMEGP - 35% सब्सिडी)</option>
                                <option value="PMFME">प्रधानमंत्री खाद्य उद्यमी योजना (PMFME)</option>
                                <option value="Own Investment">स्वयं का निवेश / नकद</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">अतिरिक्त विवरण / प्रश्न (Message)</label>
                        <textarea name="message" rows="3" placeholder="आपको मशीन किस क्षमता में चाहिए या कोई विशेष सवाल हो तो लिखें..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-amber-500 via-amber-600 to-amber-700 hover:from-amber-600 hover:to-amber-800 text-slate-950 font-bold rounded-xl text-base shadow-lg transition-transform hover:scale-[1.01]">
                        कोटेशन एवं विवरण भेजें (Submit Inquiry)
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
