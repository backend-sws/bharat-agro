@extends('layouts.app')

@section('title', 'Government Schemes & Subsidy Guide | Bharat Agro Machinery Patna')
@section('meta_description', 'Complete guide on Mukhyamantri Udyami Yojana, Laghu Udyami Yojana (₹2 Lakhs Free Grant), PMEGP, and PMFME machinery quotations, eligibility, and application procedures.')

@section('content')

<!-- Header Banner -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            GOVERNMENT SUBSIDY SCHEMES GUIDE
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            Government Schemes &amp; Subsidies Guide
        </h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto">
            Avail 35% to 100% financial assistance and subsidies on machinery purchases under state and central government programs
        </p>
    </div>
</div>

<!-- Main Schemes Detail Section -->
<section class="py-16 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <!-- Scheme 1: Mukhyamantri Udyami Yojana -->
        <div id="udyami" class="bg-white rounded-2xl sm:rounded-3xl p-5 sm:p-8 lg:p-12 border border-slate-200 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center scroll-mt-24">
            <div class="lg:col-span-8 space-y-4">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="bg-blue-100 text-blue-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                        Govt. of Bihar • Dept. of Industries
                    </span>
                    <span class="text-xs font-bold text-amber-600 bg-amber-100 px-3 py-1 rounded-full">
                        Up to ₹10 Lakhs Assistance
                    </span>
                </div>
                <h2 class="text-xl sm:text-3xl font-extrabold text-slate-900 font-['Outfit']">
                    1. Mukhyamantri Udyami Yojana (Bihar)
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    The flagship enterprise promotion scheme of the Government of Bihar providing <strong>₹10 Lakhs in financial assistance</strong> to Scheduled Castes (SC), Scheduled Tribes (ST), Extremely Backward Classes (EBC), Women, and Youth entrepreneurs to establish new manufacturing businesses.
                </p>
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 text-xs sm:text-sm space-y-2">
                    <div class="flex items-start gap-2 text-slate-800">
                        <span class="font-bold text-emerald-600 shrink-0">✓ ₹5 Lakhs Grant:</span>
                        <span>Outright government subsidy (zero repayment required).</span>
                    </div>
                    <div class="flex items-start gap-2 text-slate-800">
                        <span class="font-bold text-blue-900 shrink-0">✓ ₹5 Lakhs Loan:</span>
                        <span>100% interest-free for women, SC/ST, and EBC beneficiaries (1% simple interest for general youth), repayable in 84 monthly installments.</span>
                    </div>
                </div>
                <div class="pt-2">
                    <span class="text-xs font-bold text-slate-800 block mb-1.5">Approved Key Machinery:</span>
                    <div class="flex flex-wrap gap-1.5 sm:gap-2 text-xs">
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">Commercial Flour Mill Plants</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">Pulse (Dal) Mill Plants</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">Spice Pulverizers</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">Paper Cup &amp; Napkin Machines</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">Wire Nail Making Plants</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 bg-slate-900 text-white p-5 sm:p-6 rounded-2xl text-center space-y-4">
                <span class="text-xs font-bold text-amber-400 uppercase tracking-wider block">Get Quotation</span>
                <p class="text-xs text-slate-300">
                    Receive verified GST invoices and official machinery quotation accepted by the Department of Industries portal.
                </p>
                <button type="button" class="open-quote-modal w-full py-3 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-xs transition active:scale-95" data-machine="Mukhyamantri Udyami Yojana Machinery">
                    Request Official Quotation
                </button>
                <a href="tel:+917061973186" class="block text-xs text-amber-300 hover:underline">
                    Phone Consultation: +91 7061973186
                </a>
            </div>
        </div>

        <!-- Scheme 2: Mukhyamantri Laghu Udyami Yojana -->
        <div id="laghu-udyami" class="bg-white rounded-2xl sm:rounded-3xl p-5 sm:p-8 lg:p-12 border border-slate-200 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center scroll-mt-24">
            <div class="lg:col-span-8 space-y-4">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="bg-amber-100 text-amber-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                        100% Free Grant
                    </span>
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-full">
                        ₹2 Lakhs Non-Repayable Aid
                    </span>
                </div>
                <h2 class="text-xl sm:text-3xl font-extrabold text-slate-900 font-['Outfit']">
                    2. Mukhyamantri Laghu Udyami Yojana (Bihar)
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Designed specifically for economically weaker families in Bihar. Beneficiaries receive a total of <strong>₹2,00,000 as a 100% free government grant</strong> (no bank loan, zero interest, zero repayment) disbursed across three progressive stages directly into their bank accounts.
                </p>
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 text-xs sm:text-sm space-y-2">
                    <div class="flex items-start gap-2 text-slate-800">
                        <span class="font-bold text-amber-600 shrink-0">✓ 1st Installment: ₹50,000</span>
                        <span>For workspace setup, preliminary tools, and electrification.</span>
                    </div>
                    <div class="flex items-start gap-2 text-slate-800">
                        <span class="font-bold text-blue-900 shrink-0">✓ 2nd Installment: ₹1,00,000</span>
                        <span>Dedicated for machinery purchase (requires verified GST machinery bill).</span>
                    </div>
                    <div class="flex items-start gap-2 text-slate-800">
                        <span class="font-bold text-emerald-600 shrink-0">✓ 3rd Installment: ₹50,000</span>
                        <span>For working capital and commercial raw material inventory.</span>
                    </div>
                </div>
                <div class="pt-2">
                    <span class="text-xs font-bold text-slate-800 block mb-1.5">Top Machines Under ₹2 Lakhs Budget:</span>
                    <div class="flex flex-wrap gap-1.5 sm:gap-2 text-xs">
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">Automatic Agarbatti Making Machine</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">Camphor Tablet Machine</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">Hydraulic Slipper (Chappal) Machine</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">Mini Flour Mill &amp; Spice Pulverizer</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">Noodle &amp; Chowmein Extruder</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 bg-amber-500 text-slate-950 p-5 sm:p-6 rounded-2xl text-center space-y-4">
                <span class="text-xs font-bold uppercase tracking-wider block">Laghu Udyami Special Package</span>
                <p class="text-xs text-slate-900 font-medium">
                    We maintain comprehensive ₹2 Lakh machinery packages with instant GST invoicing and ready stock in Patna.
                </p>
                <button type="button" class="open-quote-modal w-full py-3 bg-slate-950 hover:bg-slate-900 text-white font-bold rounded-xl text-xs transition active:scale-95" data-machine="Laghu Udyami Yojana 2 Lakh Package">
                    Get ₹2 Lakh Package Quote
                </button>
                <a href="https://wa.me/917061973186?text=Hello%20Bharat%20Agro,%20I%20need%20the%20quotation%20for%20Laghu%20Udyami%20Yojana%20package." target="_blank" rel="noopener" class="block text-xs font-bold text-blue-950 hover:underline">
                    Request Quote on WhatsApp →
                </a>
            </div>
        </div>

        <!-- Scheme 3: PMEGP & PMFME -->
        <div id="pmegp" class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 scroll-mt-24">
            <div class="bg-white p-5 sm:p-8 rounded-2xl sm:rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <span class="bg-emerald-100 text-emerald-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                    Central Govt • KVIC
                </span>
                <h3 class="text-lg sm:text-xl font-bold font-['Outfit'] text-slate-900">
                    3. Prime Minister Employment Generation Programme (PMEGP)
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Provides bank financing up to ₹50 Lakhs for manufacturing units. Capital subsidy ranges from 25% in urban areas to 35% in rural areas.
                </p>
                <ul class="text-xs text-slate-700 space-y-2">
                    <li class="flex items-start gap-2"><span class="text-emerald-600 font-bold shrink-0">✓</span> Detailed Project Report (DPR) preparation for bank approvals</li>
                    <li class="flex items-start gap-2"><span class="text-emerald-600 font-bold shrink-0">✓</span> Eligible for Commercial RO Water Plants, Wire Nails, and Plastic Molding</li>
                    <li class="flex items-start gap-2"><span class="text-emerald-600 font-bold shrink-0">✓</span> Open to any Indian citizen above 18 years of age</li>
                </ul>
            </div>

            <div id="pmfme" class="bg-white p-5 sm:p-8 rounded-2xl sm:rounded-3xl border border-slate-200 shadow-sm space-y-4 scroll-mt-24">
                <span class="bg-purple-100 text-purple-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                    Ministry of Food Processing Industries
                </span>
                <h3 class="text-lg sm:text-xl font-bold font-['Outfit'] text-slate-900">
                    4. PM Formalisation of Micro Food Processing Enterprises (PMFME)
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Offers a 35% credit-linked capital subsidy (up to ₹10 Lakhs per enterprise) for micro food processing businesses.
                </p>
                <ul class="text-xs text-slate-700 space-y-2">
                    <li class="flex items-start gap-2"><span class="text-emerald-600 font-bold shrink-0">✓</span> Flour mills, pulse mills, spice grinders, and edible oil extraction</li>
                    <li class="flex items-start gap-2"><span class="text-emerald-600 font-bold shrink-0">✓</span> Soya milk, tofu paneer, and commercial pasta plants</li>
                    <li class="flex items-start gap-2"><span class="text-emerald-600 font-bold shrink-0">✓</span> FSSAI food licensing, packaging, and brand guidance</li>
                </ul>
            </div>
        </div>

        <!-- Required Documents Checklist -->
        <div class="bg-white rounded-2xl sm:rounded-3xl p-5 sm:p-8 lg:p-10 border border-slate-200 shadow-sm space-y-6">
            <h3 class="text-lg sm:text-xl font-bold font-['Outfit'] text-slate-900 text-center">
                Required Documents Checklist for Application
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-xs sm:text-sm">
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">1. Aadhaar Card &amp; PAN Card</span>
                    <span class="text-slate-500">Mandatory identity and address proof.</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">2. Domicile &amp; Caste Certificate</span>
                    <span class="text-slate-500">For Bihar residency and category quota claims.</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">3. Educational Certificate</span>
                    <span class="text-slate-500">10th / 12th / ITI / Graduation marksheet.</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">4. Bank Passbook / Cheque</span>
                    <span class="text-slate-500">For direct beneficiary transfer (DBT) disbursal.</span>
                </div>
                <div class="p-4 rounded-xl bg-amber-50 border border-amber-200">
                    <span class="font-bold text-amber-900 block mb-1">5. Official Machinery Quotation</span>
                    <span class="text-slate-700">Official GST quotation issued by Bharat Agro Patna.</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">6. Workshop Electricity Bill</span>
                    <span class="text-slate-500">Proposed factory address / lease agreement.</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
