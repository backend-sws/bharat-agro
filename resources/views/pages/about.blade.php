@extends('layouts.app')

@section('title', 'About Us • हमारे बारे में | Bharat Agro Industry & Machinery Patna')
@section('meta_description', 'पटना (बिहार) में स्थित भारत एग्रो इंडस्ट्री एवं मशीनरी - सरकारी योजनाओं के तहत अनुमोदित कमर्शियल व एग्रो मशीनरी के विश्वसनीय आपूर्तिकर्ता।')

@section('content')

<!-- Header Banner -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            ESTABLISHED IN PATNA, BIHAR
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            ABOUT US • कंपनी परिचय
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
                    <h4 class="font-bold text-blue-950 text-sm mb-1">हमारा दृष्टिकोण (Our Vision):</h4>
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                        बिहार और झारखण्ड के प्रत्येक इच्छुक युवा, महिला और उद्यमी को आत्मनिर्भर बनाना और स्थानीय स्तर पर रोजगार के नए अवसर सृजित करना।
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

<!-- Ready Stock & Scheme Focus (From Original Content) -->
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
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> मुख्यमंत्री उद्यमी योजना (बिहार)</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> मुख्यमंत्री लघु उद्यमी योजना (₹2 लाख फ्री ग्रांट)</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> प्रधानमंत्री रोजगार सृजन कार्यक्रम (PMEGP)</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> प्रधानमंत्री खाद्य उद्यमी योजना (PMFME)</li>
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
                    हमारे पटना कार्यालय से संपर्क करें
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Awards and Recognition Section -->
<section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12 space-y-2">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                HONOR &amp; ACHIEVEMENTS
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-['Outfit']">
                सराहना एवं उपलब्धियां
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-md p-3 bg-slate-50">
                <img src="{{ asset('images/award-1.jpg') }}" alt="Award Certificate" class="w-full h-auto rounded-xl object-contain">
            </div>
            <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-md p-3 bg-slate-50">
                <img src="{{ asset('images/award-news.jpg') }}" alt="Newspaper Coverage" class="w-full h-auto rounded-xl object-contain">
            </div>
        </div>
    </div>
</section>

@endsection

