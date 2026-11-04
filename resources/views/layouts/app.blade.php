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
    <div class="bg-gradient-to-r from-slate-950 via-blue-950 to-slate-950 text-white py-2 px-4 text-xs font-medium border-b border-amber-500/30 overflow-hidden relative z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 px-2.5 py-0.5 rounded-full text-[11px] font-bold tracking-wider uppercase shrink-0 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-slate-950 animate-ping"></span>
                Official Notice
            </div>
            <div class="overflow-hidden flex-1 mx-2 sm:mx-4 relative whitespace-nowrap">
                <div class="ticker-track flex items-center gap-12 text-slate-200">
                    <span class="flex items-center gap-2">
                        ⭐ <strong>Official Govt. Subsidy Approved Manufacturer:</strong> Machines eligible under <strong>Mukhyamantri Udyami Yojana</strong>, <strong>Laghu Udyami Yojana (₹2 Lakh Free Grant)</strong>, <strong>PMEGP</strong>, and <strong>PMFME</strong>.
                    </span>
                    <span class="flex items-center gap-2">
                        📄 <strong>Instant Bank Quotation &amp; DPR Support:</strong> Contact our Patna desk at <strong>+91 7061973186</strong> / <strong>7858945066</strong>.
                    </span>
                    <span class="flex items-center gap-2">
                        📍 <strong>Showroom &amp; Ready Stock:</strong> 2nd Floor, Opp. Aryabhata University, Mithapur Old Bus Stand Road, Patna-01, Bihar.
                    </span>
                    <span class="flex items-center gap-2">
                        ⭐ <strong>Official Govt. Subsidy Approved Manufacturer:</strong> Machines eligible under <strong>Mukhyamantri Udyami Yojana</strong>, <strong>Laghu Udyami Yojana</strong>, <strong>PMEGP</strong>, and <strong>PMFME</strong>.
                    </span>
                </div>
            </div>
            <div class="hidden lg:flex items-center gap-3 text-xs shrink-0 text-slate-300">
                <span class="bg-white/10 px-2.5 py-0.5 rounded text-[11px] font-medium border border-white/10 text-amber-300">GST: 10CJJPD5303B1Z7</span>
                <span class="text-slate-400">•</span>
                <span class="text-slate-300 text-[11px]">ISO 9001:2015</span>
            </div>
        </div>
    </div>

    <!-- Contact Info Utility Header Bar -->
    <div class="bg-slate-900 text-slate-300 py-2 px-4 text-xs border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-3">
            <div class="flex flex-wrap items-center gap-3 sm:gap-6">
                <a href="tel:+917061973186" class="flex items-center gap-1.5 hover:text-amber-400 transition-colors">
                    <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span class="font-medium">+91 7061973186</span>
                </a>
                <a href="https://wa.me/917858945066?text=Hello%20Bharat%20Agro%2C%20I%20am%20interested%20in%20machinery%20quotation." target="_blank" rel="noopener" class="flex items-center gap-1.5 text-emerald-400 hover:text-emerald-300 transition-colors">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                    <span>WhatsApp: +91 7858945066</span>
                </a>
                <a href="mailto:bharatagro02@gmail.com" class="hidden sm:flex items-center gap-1.5 hover:text-amber-400 transition-colors">
                    <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>bharatagro02@gmail.com</span>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <span class="hidden md:inline text-slate-400">🕒 Mon - Sun: 9:00 AM - 8:00 PM</span>
                <span class="hidden xl:inline text-slate-600">|</span>
                <span class="hidden xl:inline text-slate-400">Patna Showroom &amp; Factory Depot</span>
                <div class="flex items-center gap-1.5 pl-2 border-l border-slate-800">
                    <a href="https://www.facebook.com/share/17rzyPre8P/" target="_blank" rel="noopener" class="w-6 h-6 rounded bg-slate-800 hover:bg-blue-600 flex items-center justify-center transition-colors text-white" title="Facebook">
                        <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.7 5H18V0h-3.808C10.592 0 9 1.583 9 4.615V8z"/></svg>
                    </a>
                    <a href="https://youtube.com/@bharatagroindustries78?si=gHtddziCvsNceVLF" target="_blank" rel="noopener" class="w-6 h-6 rounded bg-slate-800 hover:bg-red-600 flex items-center justify-center transition-colors text-white" title="YouTube">
                        <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/bharat_industries_78?igsh=MXJwcDZuMmx2eHB3eg==" target="_blank" rel="noopener" class="w-6 h-6 rounded bg-slate-800 hover:bg-pink-600 flex items-center justify-center transition-colors text-white" title="Instagram">
                        <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar with Mega-Menu & Dynamic Controls -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md shadow-[0_4px_25px_-5px_rgba(0,44,75,0.08)] border-b border-slate-200/90 transition-all duration-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Identity -->
                <a href="{{ route('home') }}" class="flex items-center gap-3.5 group shrink-0">
                    <div class="p-1 rounded-xl bg-slate-50 border border-slate-200 shadow-sm group-hover:border-amber-400 group-hover:shadow transition-all">
                        <img src="{{ asset('images/logo.png') }}" alt="Bharat Agro Industry &amp; Machinery" class="h-12 w-auto object-contain transition-transform group-hover:scale-105">
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="block text-xl sm:text-2xl font-extrabold font-['Outfit',sans-serif] tracking-tight text-blue-950 leading-none">
                                BHARAT AGRO
                            </span>
                            <span class="hidden md:inline-flex items-center gap-1 text-[9px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200 tracking-wider uppercase">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Govt Approved
                            </span>
                        </div>
                        <span class="block text-[10px] font-bold text-amber-600 tracking-widest uppercase mt-0.5">
                            Industry &amp; Machinery • Patna
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center gap-1 font-medium text-slate-700 text-[14px] xl:text-[15px]">
                    <!-- Home -->
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg transition-all {{ request()->routeIs('home') ? 'text-blue-900 font-bold bg-blue-50/80 shadow-xs' : 'hover:text-blue-900 hover:bg-slate-100/80' }}">
                        Home
                    </a>

                    <!-- Machinery Catalog (Mega-Menu Trigger) -->
                    <div class="relative group">
                        <a href="{{ route('products') }}" class="px-3.5 py-2 rounded-lg flex items-center gap-1.5 transition-all {{ request()->routeIs('products*') ? 'text-blue-900 font-bold bg-blue-50/80 shadow-xs' : 'hover:text-blue-900 hover:bg-slate-100/80' }}">
                            <span>Machinery Catalog</span>
                            <span class="text-[10px] font-semibold bg-amber-100 text-amber-800 px-1.5 py-0.2 rounded">27+</span>
                            <svg class="w-4 h-4 text-slate-400 group-hover:text-blue-900 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>

                        <!-- Mega Menu Dropdown -->
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-3 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 pointer-events-none group-hover:pointer-events-auto z-50 w-[780px] xl:w-[860px]">
                            <div class="bg-white rounded-2xl shadow-2xl ring-1 ring-slate-900/10 border border-slate-100 p-6 overflow-hidden nav-dropdown">
                                <div class="grid grid-cols-12 gap-6">
                                    <!-- Column 1: Food Processing & Agro -->
                                    <div class="col-span-4 space-y-3">
                                        <div class="flex items-center gap-2 pb-2 border-b border-slate-100">
                                            <span class="w-7 h-7 rounded-lg bg-blue-50 text-blue-900 flex items-center justify-center text-sm font-bold">🌾</span>
                                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Food &amp; Agro Mills</h4>
                                        </div>
                                        <ul class="space-y-1.5 text-xs text-slate-600">
                                            <li>
                                                <a href="{{ route('products', ['category' => 'food-processing']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-blue-50 hover:text-blue-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Commercial Aata Chakki</span>
                                                    <span class="text-[11px] text-slate-500">50 to 500 Kg/Hr Heavy-Duty</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('products', ['category' => 'food-processing']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-blue-50 hover:text-blue-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Cyclone Aata Pulverizer</span>
                                                    <span class="text-[11px] text-slate-500">Dust-Free Fine Flour Grinding</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('products', ['category' => 'food-processing']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-blue-50 hover:text-blue-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Cold Press Oil Expeller</span>
                                                    <span class="text-[11px] text-slate-500">Mustard, Sesame, Groundnut</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('products', ['category' => 'food-processing']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-blue-50 hover:text-blue-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Commercial Spice &amp; Masala Mill</span>
                                                    <span class="text-[11px] text-slate-500">Turmeric, Chili, Coriander Grinder</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 2: Small Scale & Packaging -->
                                    <div class="col-span-4 space-y-3">
                                        <div class="flex items-center gap-2 pb-2 border-b border-slate-100">
                                            <span class="w-7 h-7 rounded-lg bg-amber-50 text-amber-800 flex items-center justify-center text-sm font-bold">⚙️</span>
                                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Small Industry &amp; Feed</h4>
                                        </div>
                                        <ul class="space-y-1.5 text-xs text-slate-600">
                                            <li>
                                                <a href="{{ route('products', ['category' => 'small-industry']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-amber-50/70 hover:text-amber-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Paper Cup Making Machine</span>
                                                    <span class="text-[11px] text-slate-500">High Speed Automatic 70-85 pcs/min</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('products', ['category' => 'small-industry']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-amber-50/70 hover:text-amber-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Automatic Agarbatti Plant</span>
                                                    <span class="text-[11px] text-slate-500">Incense Stick Manufacturing</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('products', ['category' => 'hardware-industrial']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-amber-50/70 hover:text-amber-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Cattle &amp; Fish Feed Pellets</span>
                                                    <span class="text-[11px] text-slate-500">Floating Pellet &amp; Feed Extruder</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('products', ['category' => 'packaging']) }}" class="block px-2.5 py-1.5 rounded-lg hover:bg-amber-50/70 hover:text-amber-950 transition-colors">
                                                    <span class="font-semibold text-slate-800 block">Continuous Band Sealer</span>
                                                    <span class="text-[11px] text-slate-500">Industrial Nitrogen &amp; Pouch Packing</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 3: Featured Subsidy Showcase Card -->
                                    <div class="col-span-4 bg-gradient-to-br from-blue-950 via-slate-900 to-blue-900 rounded-xl p-4 text-white flex flex-col justify-between shadow-inner border border-blue-800/40">
                                        <div>
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="bg-amber-400 text-slate-950 text-[10px] font-extrabold uppercase px-2 py-0.5 rounded tracking-wider">
                                                    Subsidy Ready
                                                </span>
                                                <span class="text-[11px] text-blue-200">Patna Showroom</span>
                                            </div>
                                            <h5 class="text-sm font-bold text-white mb-1.5">
                                                Laghu Udyami &amp; Udyami Yojana Packages
                                            </h5>
                                            <p class="text-[11px] text-slate-300 leading-relaxed mb-3">
                                                Avail ₹2 Lakh Free Grant or ₹10 Lakh project machines with official GST quotations &amp; bank DPR.
                                            </p>
                                        </div>

                                        <div class="pt-3 border-t border-white/10 space-y-2">
                                            <a href="{{ route('products') }}" class="w-full flex items-center justify-center gap-1.5 bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold text-xs py-2 rounded-lg transition-colors shadow">
                                                <span>View All 27+ Machines</span>
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                            </a>
                                            <span class="block text-center text-[10px] text-amber-200/80">⚡ Ready Stock for Instant Delivery</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Government Schemes (Dropdown) -->
                    <div class="relative group">
                        <a href="{{ route('schemes') }}" class="px-3.5 py-2 rounded-lg flex items-center gap-1.5 transition-all {{ request()->routeIs('schemes') ? 'text-blue-900 font-bold bg-blue-50/80 shadow-xs' : 'hover:text-blue-900 hover:bg-slate-100/80' }}">
                            <span>Government Schemes</span>
                            <span class="text-[10px] font-bold bg-emerald-100 text-emerald-800 px-1.5 py-0.2 rounded uppercase tracking-wider">Subsidy</span>
                            <svg class="w-4 h-4 text-slate-400 group-hover:text-blue-900 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>

                        <!-- Schemes Dropdown -->
                        <div class="absolute left-0 top-full pt-3 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 pointer-events-none group-hover:pointer-events-auto z-50 w-80">
                            <div class="bg-white rounded-xl shadow-2xl ring-1 ring-slate-900/10 border border-slate-100 p-3 nav-dropdown">
                                <div class="px-3 py-2 border-b border-slate-100 mb-1">
                                    <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Official State &amp; Central Schemes</span>
                                    <span class="text-xs font-semibold text-slate-800">Approved Machinery Quotations</span>
                                </div>
                                <ul class="space-y-1 text-xs">
                                    <li>
                                        <a href="{{ route('schemes') }}#udyami" class="flex items-start gap-2.5 p-2 rounded-lg hover:bg-blue-50 transition-colors">
                                            <span class="w-6 h-6 rounded bg-blue-100 text-blue-900 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">₹10L</span>
                                            <div>
                                                <span class="font-semibold text-slate-900 block">Mukhyamantri Udyami Yojana</span>
                                                <span class="text-[11px] text-slate-500">50% Subsidy + 50% Soft Loan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('schemes') }}#laghu-udyami" class="flex items-start gap-2.5 p-2 rounded-lg hover:bg-amber-50 transition-colors">
                                            <span class="w-6 h-6 rounded bg-amber-100 text-amber-900 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">₹2L</span>
                                            <div>
                                                <span class="font-semibold text-slate-900 block">Laghu Udyami Yojana (Bihar)</span>
                                                <span class="text-[11px] text-amber-700 font-medium">100% Free Grant • No Repayment</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('schemes') }}#pmegp" class="flex items-start gap-2.5 p-2 rounded-lg hover:bg-emerald-50 transition-colors">
                                            <span class="w-6 h-6 rounded bg-emerald-100 text-emerald-900 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">35%</span>
                                            <div>
                                                <span class="font-semibold text-slate-900 block">PMEGP Central Scheme</span>
                                                <span class="text-[11px] text-slate-500">15% to 35% Capital Subsidy</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('schemes') }}#pmfme" class="flex items-start gap-2.5 p-2 rounded-lg hover:bg-orange-50 transition-colors">
                                            <span class="w-6 h-6 rounded bg-orange-100 text-orange-900 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">Agro</span>
                                            <div>
                                                <span class="font-semibold text-slate-900 block">PMFME Food Processing</span>
                                                <span class="text-[11px] text-slate-500">35% Credit-Linked Capital Subsidy</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="mt-2 pt-2 border-t border-slate-100 px-1">
                                    <a href="{{ route('schemes') }}" class="flex items-center justify-between text-xs font-semibold text-blue-900 hover:text-amber-600 p-1.5 transition-colors">
                                        <span>View Complete Guidelines &amp; Documents</span>
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services -->
                    <a href="{{ route('services') }}" class="px-3 py-2 rounded-lg transition-all {{ request()->routeIs('services') ? 'text-blue-900 font-bold bg-blue-50/80 shadow-xs' : 'hover:text-blue-900 hover:bg-slate-100/80' }}">
                        Services &amp; Warranty
                    </a>

                    <!-- About Us -->
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg transition-all {{ request()->routeIs('about') ? 'text-blue-900 font-bold bg-blue-50/80 shadow-xs' : 'hover:text-blue-900 hover:bg-slate-100/80' }}">
                        About Us
                    </a>

                    <!-- Contact -->
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg transition-all {{ request()->routeIs('contact') ? 'text-blue-900 font-bold bg-blue-50/80 shadow-xs' : 'hover:text-blue-900 hover:bg-slate-100/80' }}">
                        Contact
                    </a>
                </nav>

                <!-- CTA Button & Actions -->
                <div class="flex items-center gap-2 sm:gap-3">
                    <!-- Quick Call Pill (Desktop) -->
                    <a href="tel:+917061973186" class="hidden xl:flex items-center gap-2 px-3 py-1.5 rounded-xl border border-slate-200 bg-slate-50/80 hover:bg-blue-50 hover:border-blue-200 transition-colors text-slate-800 group">
                        <div class="w-7 h-7 rounded-lg bg-blue-900 text-white flex items-center justify-center group-hover:bg-blue-800 transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div class="text-left leading-tight">
                            <span class="block text-[10px] text-slate-500 font-medium">Sales Hotline</span>
                            <span class="block text-xs font-bold text-slate-900">+91 7061973186</span>
                        </div>
                    </a>

                    <!-- Primary "Get Quotation" CTA Button -->
                    <button type="button" class="open-quote-modal relative overflow-hidden inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-bold px-4 sm:px-5 py-2.5 rounded-xl shadow-md hover:shadow-lg transition-all text-xs sm:text-sm active:scale-95 group">
                        <!-- Shimmer Light -->
                        <span class="absolute inset-0 w-1/2 h-full bg-gradient-to-r from-transparent via-white/40 to-transparent -skew-x-12 animate-shimmer pointer-events-none"></span>
                        
                        <svg class="w-4 h-4 text-slate-950 group-hover:rotate-12 transition-transform shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="tracking-tight">Get Quotation</span>
                    </button>

                    <!-- Mobile Menu Hamburger Button -->
                    <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 text-slate-700 hover:text-blue-900 rounded-xl hover:bg-slate-100 transition-colors border border-slate-200" aria-label="Toggle Navigation">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white/98 backdrop-blur-lg shadow-2xl px-4 pt-3 pb-6 space-y-2 max-h-[85vh] overflow-y-auto">
            <!-- Mobile Quick Actions: Call & WhatsApp -->
            <div class="grid grid-cols-2 gap-2 pt-1 pb-3 border-b border-slate-100">
                <a href="tel:+917061973186" class="flex items-center justify-center gap-1.5 bg-blue-900 hover:bg-blue-800 text-white font-semibold py-2 px-3 rounded-lg text-xs transition-colors shadow-xs">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>Call Sales</span>
                </a>
                <a href="https://wa.me/917858945066?text=Hello%20Bharat%20Agro%2C%20I%20am%20interested%20in%20machinery%20quotation." target="_blank" rel="noopener" class="flex items-center justify-center gap-1.5 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold py-2 px-3 rounded-lg text-xs transition-colors shadow-xs">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                    <span>WhatsApp</span>
                </a>
            </div>

            <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-900 font-bold' : 'text-slate-800 hover:bg-slate-50' }}">
                Home
            </a>

            <!-- Mobile Catalog Accordion -->
            <div class="border-y border-slate-100 py-1">
                <button type="button" id="mobile-catalog-btn" class="w-full flex items-center justify-between px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">
                    <span class="flex items-center gap-2">
                        <span>Machinery Catalog</span>
                        <span class="text-[10px] bg-amber-100 text-amber-900 font-bold px-1.5 py-0.5 rounded">27+ Models</span>
                    </span>
                    <svg id="mobile-catalog-arrow" class="w-4 h-4 text-slate-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="mobile-catalog-submenu" class="hidden pl-4 pr-2 py-2 space-y-1 text-xs text-slate-600 bg-slate-50/60 rounded-lg mt-1">
                    <a href="{{ route('products') }}" class="block py-1.5 font-bold text-blue-900">All 27+ Machines &rarr;</a>
                    <a href="{{ route('products', ['category' => 'food-processing']) }}" class="block py-1 text-slate-700 hover:text-blue-900">🌾 Food Processing &amp; Flour Mills</a>
                    <a href="{{ route('products', ['category' => 'small-industry']) }}" class="block py-1 text-slate-700 hover:text-blue-900">⚙️ Small Scale Manufacturing</a>
                    <a href="{{ route('products', ['category' => 'packaging']) }}" class="block py-1 text-slate-700 hover:text-blue-900">📦 Packaging &amp; Disposables</a>
                    <a href="{{ route('products', ['category' => 'hardware-industrial']) }}" class="block py-1 text-slate-700 hover:text-blue-900">🐄 Feed &amp; Industrial Units</a>
                    <a href="{{ route('products', ['category' => 'water-beverage']) }}" class="block py-1 text-slate-700 hover:text-blue-900">💧 Water &amp; Beverage Machines</a>
                </div>
            </div>

            <!-- Mobile Schemes Accordion -->
            <div class="border-b border-slate-100 pb-1">
                <button type="button" id="mobile-schemes-btn" class="w-full flex items-center justify-between px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">
                    <span class="flex items-center gap-2">
                        <span>Government Schemes</span>
                        <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-1.5 py-0.5 rounded">Up to 50%</span>
                    </span>
                    <svg id="mobile-schemes-arrow" class="w-4 h-4 text-slate-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="mobile-schemes-submenu" class="hidden pl-4 pr-2 py-2 space-y-1 text-xs text-slate-600 bg-slate-50/60 rounded-lg mt-1">
                    <a href="{{ route('schemes') }}" class="block py-1.5 font-bold text-blue-900">All Schemes &amp; Subsidies &rarr;</a>
                    <a href="{{ route('schemes') }}#udyami" class="block py-1 text-slate-700 hover:text-blue-900">🏛️ Mukhyamantri Udyami Yojana (₹10 Lakh)</a>
                    <a href="{{ route('schemes') }}#laghu-udyami" class="block py-1 text-slate-700 hover:text-blue-900">⭐ Laghu Udyami Yojana (₹2 Lakh Free)</a>
                    <a href="{{ route('schemes') }}#pmegp" class="block py-1 text-slate-700 hover:text-blue-900">💼 PMEGP Scheme (15% - 35% Subsidy)</a>
                    <a href="{{ route('schemes') }}#pmfme" class="block py-1 text-slate-700 hover:text-blue-900">🍲 PMFME Food Processing Scheme</a>
                </div>
            </div>

            <a href="{{ route('services') }}" class="block px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('services') ? 'bg-blue-50 text-blue-900 font-bold' : 'text-slate-800 hover:bg-slate-50' }}">
                Services &amp; Warranty
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-900 font-bold' : 'text-slate-800 hover:bg-slate-50' }}">
                About Us
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-900 font-bold' : 'text-slate-800 hover:bg-slate-50' }}">
                Contact
            </a>

            <!-- Mobile CTA Button -->
            <div class="pt-3 border-t border-slate-200">
                <button type="button" class="open-quote-modal w-full flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-bold py-3.5 rounded-xl text-sm shadow-md transition-all">
                    <svg class="w-4 h-4 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    <span>Get Instant Quotation</span>
                </button>
                <div class="mt-3 text-center text-[11px] text-slate-500">
                    <span>Showroom: Mithapur, Patna • GSTIN: 10CJJPD5303B1Z7</span>
                </div>
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
