@extends('layouts.app')

@section('title', 'Services | Bharat Agro Industry & Machinery Patna')
@section('meta_description', 'Machinery supply, government scheme quotation, project DPR preparation, on-site commissioning and operator training - Bharat Agro Industry Patna.')

@section('content')

<!-- Header Banner -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            END-TO-END INDUSTRIAL SERVICES
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            SERVICES
        </h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto">
            From Project DPR to Installation &amp; Training - We Support Your Entire Entrepreneurship Journey
        </p>
    </div>
</div>

<!-- Services Grid Section -->
<section class="py-16 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                COMPREHENSIVE SUPPORT
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Outfit']">
                Comprehensive Support from Setup to Profitable Operations
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                We do not merely supply machines - we provide turnkey technical, governmental, and operational services to ensure your enterprise flourishes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-5 sm:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-blue-100 text-blue-900 flex items-center justify-center font-bold text-xl sm:text-2xl">
                    📑
                </div>
                <h3 class="text-base sm:text-lg font-bold font-['Outfit'] text-slate-900">
                    Scheme Quotations &amp; Detailed Project Reports (DPR)
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Official GST machine quotations, technical specification sheets, and bankable project DPRs formatted for smooth clearance through District Industry Centers (DIC), KVIC, and commercial banks.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-5 sm:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-xl sm:text-2xl">
                    🏭
                </div>
                <h3 class="text-base sm:text-lg font-bold font-['Outfit'] text-slate-900">
                    Ready Stock Inventory &amp; Safe Transport
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Over 27 commercial machine models maintained in ready stock at our Patna warehouse. Safe, transit-insured freight delivery arranged to any district across Bihar and Jharkhand.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-5 sm:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xl sm:text-2xl">
                    🔧
                </div>
                <h3 class="text-base sm:text-lg font-bold font-['Outfit'] text-slate-900">
                    On-Site Installation &amp; Commissioning
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Our experienced mechanical and electrical technicians visit your unit to manage foundation placement, motor alignment, circuit wiring, and initial test-batch production.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white p-5 sm:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-xl sm:text-2xl">
                    👨‍🏫
                </div>
                <h3 class="text-base sm:text-lg font-bold font-['Outfit'] text-slate-900">
                    Hands-on Operator &amp; Safety Training
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Your machine operators receive structured hands-on training on speed adjustments, die changeovers, lubrication cycles, preventative maintenance, and safety protocols.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white p-5 sm:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-rose-100 text-rose-800 flex items-center justify-center font-bold text-xl sm:text-2xl">
                    📦
                </div>
                <h3 class="text-base sm:text-lg font-bold font-['Outfit'] text-slate-900">
                    Raw Material Sourcing Guidance
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    We connect you directly with genuine suppliers for raw materials including incense sticks, premix powder, camphor crystals, paper rolls, packaging films, and rubber sheets.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white p-5 sm:p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-sky-100 text-sky-800 flex items-center justify-center font-bold text-xl sm:text-2xl">
                    🛡️
                </div>
                <h3 class="text-base sm:text-lg font-bold font-['Outfit'] text-slate-900">
                    1-Year Warranty &amp; Spare Parts Support
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Comprehensive 1-year warranty coverage on major machinery. Genuine spare parts, custom dies, cutters, and belts dispatched promptly from our Patna facility.
                </p>
            </div>
        </div>

        <!-- Consultation Banner -->
        <div class="mt-16 bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-md text-center max-w-3xl mx-auto space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                SERVICE INQUIRY
            </span>
            <h3 class="text-2xl font-bold font-['Outfit'] text-slate-900">
                Need Help with Machinery Quotations, DPR, or Installation?
            </h3>
            <p class="text-xs sm:text-sm text-slate-600">
                Speak directly with our service engineers or submit an online inquiry.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                <a href="tel:+917061973186" class="px-6 py-3 bg-blue-900 hover:bg-blue-950 text-white font-semibold rounded-xl text-sm transition">
                    Call: +91 7061973186
                </a>
                <button type="button" class="open-quote-modal px-6 py-3 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-sm shadow transition">
                    Request Online Service
                </button>
            </div>
        </div>
    </div>
</section>

@endsection
