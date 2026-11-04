<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Bharat Agro Industry & Machinery | Patna - Government Scheme Approved Machines')</title>
    <meta name="description" content="@yield('meta_description', 'Leading manufacturer and supplier of commercial agro and industrial machinery approved under Mukhyamantri Udyami Yojana, Laghu Udyami Yojana, PMEGP, and PMFME in Bihar & Jharkhand.')">

    <!-- Google Fonts: Poppins & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-amber-400 selection:text-slate-900 flex flex-col min-h-screen font-['Poppins',sans-serif]">

    <!-- Top Announcement Ticker Bar (Govt Subsidy Alert) -->
    <div class="bg-gradient-to-r from-red-600 via-amber-600 to-red-700 text-white py-2 px-4 text-xs sm:text-sm font-medium overflow-hidden shadow-inner relative z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2 bg-red-800/80 px-2.5 py-0.5 rounded-full text-[11px] font-bold tracking-wider uppercase shrink-0 border border-white/20">
                <span class="w-2 h-2 rounded-full bg-amber-300 animate-ping"></span>
                Official Notice
            </div>
            <div class="overflow-hidden flex-1 mx-4 relative whitespace-nowrap">
                <div class="ticker-track flex items-center gap-12 font-medium">
                    <span class="flex items-center gap-2">
                        ⭐ Certified machinery available under government subsidy schemes including <strong>Mukhyamantri Udyami Yojana</strong>, <strong>Laghu Udyami Yojana (₹2 Lakh Free Grant)</strong>, <strong>PMEGP</strong>, and <strong>PMFME</strong>.
                    </span>
                    <span class="flex items-center gap-2">
                        📞 For machine quotation, GST invoice, and project DPR assistance, contact: <strong>+91 7061973186</strong> / <strong>7858945066</strong>
                    </span>
                    <span class="flex items-center gap-2">
                        📍 2nd Floor, Opp. Aryabhata University, Mithapur Old Bus Stand Road, Patna-01, Bihar
                    </span>
                    <span class="flex items-center gap-2">
                        ⭐ Certified machinery available under government subsidy schemes including <strong>Mukhyamantri Udyami Yojana</strong>, <strong>Laghu Udyami Yojana</strong>, <strong>PMEGP</strong>, and <strong>PMFME</strong>.
                    </span>
                </div>
            </div>
            <div class="hidden md:flex items-center gap-3 text-xs shrink-0">
                <span class="text-amber-200">GSTIN: 10CJJPD5303B1Z7</span>
            </div>
        </div>
    </div>

    <!-- Classic Contact Info Header Bar -->
    <div class="bg-slate-900 text-slate-300 py-2.5 px-4 text-xs border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-3">
            <div class="flex flex-wrap items-center gap-4 sm:gap-6">
                <a href="tel:+917061973186" class="flex items-center gap-1.5 hover:text-amber-400 transition-colors">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+91 7061973186</span>
                </a>
                <a href="tel:+917858945066" class="hidden sm:flex items-center gap-1.5 hover:text-amber-400 transition-colors">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+91 7858945066</span>
                </a>
                <a href="mailto:bharatagro02@gmail.com" class="flex items-center gap-1.5 hover:text-amber-400 transition-colors">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>bharatagro02@gmail.com</span>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <span class="hidden md:inline text-slate-400">Landline: 0612 3171580</span>
                <span class="hidden lg:inline text-slate-500">|</span>
                <span class="hidden lg:inline text-slate-400">Mithapur, Patna (Serving Bihar &amp; Jharkhand)</span>
                <div class="flex items-center gap-2 pl-2">
                    <a href="https://www.facebook.com/share/17rzyPre8P/" target="_blank" rel="noopener" class="w-6 h-6 rounded bg-slate-800 hover:bg-blue-600 flex items-center justify-center transition-colors text-white" title="Facebook">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.7 5H18V0h-3.808C10.592 0 9 1.583 9 4.615V8z"/></svg>
                    </a>
                    <a href="https://youtube.com/@bharatagroindustries78?si=gHtddziCvsNceVLF" target="_blank" rel="noopener" class="w-6 h-6 rounded bg-slate-800 hover:bg-red-600 flex items-center justify-center transition-colors text-white" title="YouTube">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/bharat_industries_78?igsh=MXJwcDZuMmx2eHB3eg==" target="_blank" rel="noopener" class="w-6 h-6 rounded bg-slate-800 hover:bg-pink-600 flex items-center justify-center transition-colors text-white" title="Instagram">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-200 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Bharat Agro Industry & Machinery" class="h-12 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="hidden sm:block">
                        <span class="block text-xl font-bold font-['Outfit',sans-serif] tracking-tight text-blue-900 leading-tight">
                            BHARAT AGRO
                        </span>
                        <span class="block text-[11px] font-semibold text-amber-600 tracking-wider uppercase">
                            Industry &amp; Machinery • Patna
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-1 font-medium text-slate-700 text-[15px]">
                    <a href="{{ route('home') }}" class="px-3.5 py-2 rounded-lg transition-colors {{ request()->routeIs('home') ? 'text-blue-900 font-semibold bg-blue-50' : 'hover:text-blue-900 hover:bg-slate-100' }}">
                        Home
                    </a>
                    <a href="{{ route('products') }}" class="px-3.5 py-2 rounded-lg transition-colors {{ request()->routeIs('products*') ? 'text-blue-900 font-semibold bg-blue-50' : 'hover:text-blue-900 hover:bg-slate-100' }}">
                        Products
                    </a>
                    <a href="{{ route('schemes') }}" class="px-3.5 py-2 rounded-lg transition-colors {{ request()->routeIs('schemes') ? 'text-blue-900 font-semibold bg-blue-50' : 'hover:text-blue-900 hover:bg-slate-100' }}">
                        Government Schemes
                    </a>
                    <a href="{{ route('about') }}" class="px-3.5 py-2 rounded-lg transition-colors {{ request()->routeIs('about') ? 'text-blue-900 font-semibold bg-blue-50' : 'hover:text-blue-900 hover:bg-slate-100' }}">
                        About Us
                    </a>
                    <a href="{{ route('services') }}" class="px-3.5 py-2 rounded-lg transition-colors {{ request()->routeIs('services') ? 'text-blue-900 font-semibold bg-blue-50' : 'hover:text-blue-900 hover:bg-slate-100' }}">
                        Services
                    </a>
                    <a href="{{ route('contact') }}" class="px-3.5 py-2 rounded-lg transition-colors {{ request()->routeIs('contact') ? 'text-blue-900 font-semibold bg-blue-50' : 'hover:text-blue-900 hover:bg-slate-100' }}">
                        Contact
                    </a>
                </nav>

                <!-- CTA Button & Mobile Menu Toggle -->
                <div class="flex items-center gap-3">
                    <button type="button" class="open-quote-modal hidden sm:inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-semibold px-5 py-2.5 rounded-lg shadow-sm hover:shadow transition-all text-sm group">
                        <svg class="w-4 h-4 text-slate-900 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>Get Quotation</span>
                    </button>

                    <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 text-slate-700 hover:text-blue-900 rounded-lg hover:bg-slate-100 transition-colors" aria-label="Toggle Navigation">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white shadow-xl px-4 pt-3 pb-6 space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">
                Home
            </a>
            <a href="{{ route('products') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('products*') ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">
                Products
            </a>
            <a href="{{ route('schemes') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('schemes') ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">
                Government Schemes
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">
                About Us
            </a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('services') ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">
                Services
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-900 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">
                Contact
            </a>
            <div class="pt-3 border-t border-slate-200">
                <button type="button" class="open-quote-modal w-full flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 rounded-lg text-sm shadow">
                    <span>Get Quotation</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Success Flash Notification -->
    @if(session('success'))
        <div class="bg-emerald-600 text-white px-4 py-3 shadow-lg relative z-50">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-emerald-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-medium text-sm sm:text-base">{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="text-white hover:text-emerald-200 p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    @endif

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Classic Footer Section -->
    <footer class="bg-slate-950 text-slate-300 pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                <!-- Col 1: About Bharat Agro -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Bharat Agro Logo" class="h-12 w-auto bg-white p-1 rounded">
                        <div>
                            <span class="block text-lg font-bold text-white tracking-tight">BHARAT AGRO</span>
                            <span class="block text-xs text-amber-400 font-medium">Industry &amp; Machinery</span>
                        </div>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                        Bharat Agro Industry &amp; Machinery is a trusted exporter and supplier of agro &amp; industrial machines, dedicated to supporting entrepreneurs, startups, and small business owners under various Government of India and State Government schemes.
                    </p>
                    <div class="pt-2 text-xs text-amber-400 font-semibold flex items-center gap-2">
                        <span>GSTIN: 10CJJPD5303B1Z7</span>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h3 class="text-white font-bold text-base mb-4 border-l-4 border-amber-500 pl-2.5">
                        Quick Links
                    </h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors flex items-center gap-1.5"><span class="text-amber-500">›</span> Home</a></li>
                        <li><a href="{{ route('products') }}" class="hover:text-amber-400 transition-colors flex items-center gap-1.5"><span class="text-amber-500">›</span> All Products</a></li>
                        <li><a href="{{ route('schemes') }}" class="hover:text-amber-400 transition-colors flex items-center gap-1.5"><span class="text-amber-500">›</span> Government Schemes</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-amber-400 transition-colors flex items-center gap-1.5"><span class="text-amber-500">›</span> About Us</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-amber-400 transition-colors flex items-center gap-1.5"><span class="text-amber-500">›</span> Our Services</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-400 transition-colors flex items-center gap-1.5"><span class="text-amber-500">›</span> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Approved Schemes -->
                <div>
                    <h3 class="text-white font-bold text-base mb-4 border-l-4 border-amber-500 pl-2.5">
                        Approved Schemes
                    </h3>
                    <ul class="space-y-2.5 text-xs sm:text-sm text-slate-400">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✓</span>
                            <span><strong>Mukhyamantri Udyami Yojana</strong> (Financial aid up to ₹10 Lakhs)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✓</span>
                            <span><strong>Mukhyamantri Laghu Udyami Yojana</strong> (₹2 Lakhs Free Grant)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✓</span>
                            <span><strong>PMEGP</strong> (Up to 35% Capital Subsidy)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✓</span>
                            <span><strong>PMFME</strong> (Food Processing Capital Subsidy)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400 font-bold">✓</span>
                            <span><strong>Mukhyamantri Yuva Udyami Yojana</strong></span>
                        </li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Office -->
                <div>
                    <h3 class="text-white font-bold text-base mb-4 border-l-4 border-amber-500 pl-2.5">
                        Contact &amp; Office
                    </h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-slate-400">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-5 h-5 text-amber-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>2nd Floor, Opp. Aryabhata University, Mithapur Old Bus Stand Road, Patna-01, Bihar</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-amber-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>Mob: <a href="tel:7061973186" class="hover:text-amber-400 text-slate-200">7061973186</a>, <a href="tel:7858945066" class="hover:text-amber-400 text-slate-200">7858945066</a></span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-amber-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>Landline: 0612 3171580</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-amber-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:bharatagro02@gmail.com" class="hover:text-amber-400 text-slate-200">bharatagro02@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; 2022-26 Bharat Agro Industry &amp; Machinery. All Rights Reserved.</p>
                <p>Located in Patna | Proudly Serving Entrepreneurs Across Bihar &amp; Jharkhand</p>
            </div>
        </div>
    </footer>

    <!-- Quotation Modal Popup -->
    <div id="quotation-modal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div id="modal-backdrop" class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm transition-opacity"></div>
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div id="modal-content" class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-slate-200">
                <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-slate-900 px-6 py-5 text-white flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold font-['Outfit']" id="modal-title">Request Machinery Quotation</h3>
                        <p class="text-xs text-blue-200">Complete the form for government subsidy guidance &amp; technical specs</p>
                    </div>
                    <button type="button" class="close-quote-modal text-white/80 hover:text-white rounded-lg p-1 hover:bg-white/10 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <form action="{{ route('inquiry.submit') }}" method="POST" class="p-6 space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Full Name *</label>
                        <input type="text" name="name" required placeholder="e.g. Rajesh Kumar" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Mobile / WhatsApp No. *</label>
                            <input type="tel" name="phone" required placeholder="e.g. 9876543210" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">City / District</label>
                            <input type="text" name="city" placeholder="e.g. Patna, Ranchi, Muzaffarpur" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Interested Machine</label>
                            <input type="text" id="quote-machine-name" name="machine_name" placeholder="e.g. Flour Mill, Agarbatti Machine" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none bg-slate-50">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Government Scheme</label>
                            <select name="scheme" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none bg-white">
                                <option value="Mukhyamantri Udyami Yojana">Mukhyamantri Udyami Yojana (Bihar - ₹10 Lakhs)</option>
                                <option value="Mukhyamantri Laghu Udyami Yojana">Mukhyamantri Laghu Udyami Yojana (₹2 Lakhs Free Grant)</option>
                                <option value="PMEGP">PMEGP (Up to 35% Capital Subsidy)</option>
                                <option value="PMFME">PMFME (Food Processing Scheme)</option>
                                <option value="Private / Self-Funded">Private Investment / Self-Funded</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Message / Requirements</label>
                        <textarea name="message" rows="3" placeholder="Tell us about required capacity, power setup, or timeline..." class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none"></textarea>
                    </div>
                    <div class="pt-2 flex items-center justify-end gap-3">
                        <button type="button" class="close-quote-modal px-4 py-2.5 rounded-lg border border-slate-300 text-slate-700 text-sm font-medium hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-6 py-2.5 rounded-lg text-sm shadow transition">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp and Quick Call Actions -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col gap-3">
        <!-- Call Button -->
        <a href="tel:+917061973186" class="w-13 h-13 rounded-full bg-blue-700 hover:bg-blue-800 text-white shadow-xl flex items-center justify-center transition-transform hover:scale-110 group border-2 border-white" title="Direct Call: 7061973186">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        </a>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/917061973186?text=Hello%20Bharat%20Agro,%20I%20would%20like%20to%20get%20machinery%20quotations%20and%20scheme%20details." target="_blank" rel="noopener" class="w-13 h-13 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white shadow-xl flex items-center justify-center transition-transform hover:scale-110 group border-2 border-white" title="Chat on WhatsApp">
            <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
        </a>
    </div>

</body>
</html>
