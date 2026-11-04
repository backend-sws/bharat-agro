@extends('layouts.app')

@section('title', 'All Commercial Machinery (Products) | Bharat Agro Machinery Patna')
@section('meta_description', 'Commercial flour mills, spice pulverizers, pulse mills, agarbatti, camphor, paper cup, and packaging machinery available with government subsidies in Bihar & Jharkhand.')

@section('content')

<!-- Page Hero Header -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            COMPLETE MACHINERY CATALOG
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            OUR PRODUCTS
        </h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto">
            Reliable Commercial Machinery for Every Business Need • Exporter &amp; Supplier of Government Scheme–Approved Machines
        </p>
    </div>
</div>

<!-- Notice Bar in English -->
<div class="bg-amber-100 text-amber-900 py-3 px-4 border-b border-amber-200 text-xs sm:text-sm font-medium text-center">
    Take the first step toward self-reliance with certified machinery eligible under state and central government subsidy schemes.
</div>

<!-- Products Catalog Section -->
<section class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Search and Filter Bar -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm mb-10 space-y-4">
            <form action="{{ route('products') }}" method="GET" class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                <!-- Search Input -->
                <div class="md:col-span-5 relative">
                    <input type="text"
                           name="q"
                           value="{{ $searchQuery }}"
                           placeholder="Search machine name (e.g. Flour Mill, Spice Pulverizer, Paper Cup...)"
                           class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                    <svg class="w-5 h-5 text-slate-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <!-- Category Select -->
                <div class="md:col-span-4">
                    <select name="category" onchange="this.form.submit()" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                        @foreach($categories as $key => $label)
                            <option value="{{ $key }}" {{ $currentCategory === $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit & Clear Buttons -->
                <div class="md:col-span-3 flex items-center gap-2">
                    <button type="submit" class="flex-1 py-2.5 bg-blue-900 hover:bg-blue-950 text-white font-semibold rounded-xl text-sm transition">
                        Filter
                    </button>
                    @if($searchQuery || ($currentCategory && $currentCategory !== 'all') || $currentScheme)
                        <a href="{{ route('products') }}" class="px-3.5 py-2.5 border border-slate-300 hover:bg-slate-100 rounded-xl text-xs font-medium text-slate-700 transition">
                            Reset
                        </a>
                    @endif
                </div>
            </form>

            <!-- Quick Scheme Filter Pills -->
            <div class="flex flex-wrap items-center gap-2 pt-2 border-t border-slate-100 text-xs">
                <span class="text-slate-500 font-medium">Filter by Scheme:</span>
                <a href="{{ route('products', ['scheme' => 'Mukhyamantri Udyami']) }}" class="px-2.5 py-1 rounded-lg border {{ $currentScheme === 'Mukhyamantri Udyami' ? 'bg-blue-900 text-white border-blue-900' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    Mukhyamantri Udyami Yojana
                </a>
                <a href="{{ route('products', ['scheme' => 'Laghu Udyami']) }}" class="px-2.5 py-1 rounded-lg border {{ $currentScheme === 'Laghu Udyami' ? 'bg-blue-900 text-white border-blue-900' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    Laghu Udyami (₹2 Lakhs Grant)
                </a>
                <a href="{{ route('products', ['scheme' => 'PMEGP']) }}" class="px-2.5 py-1 rounded-lg border {{ $currentScheme === 'PMEGP' ? 'bg-blue-900 text-white border-blue-900' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    PMEGP (35% Subsidy)
                </a>
                <a href="{{ route('products', ['scheme' => 'PMFME']) }}" class="px-2.5 py-1 rounded-lg border {{ $currentScheme === 'PMFME' ? 'bg-blue-900 text-white border-blue-900' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    PMFME Food Processing
                </a>
            </div>
        </div>

        <!-- Product Count Indicator -->
        <div class="flex items-center justify-between mb-6">
            <p class="text-xs sm:text-sm text-slate-600">
                Total of <strong class="text-blue-950 font-bold">{{ count($products) }}</strong> commercial machines available
            </p>
            <button type="button" class="open-quote-modal text-xs font-bold text-amber-600 hover:text-amber-700 underline">
                Request Custom Machinery Quotation →
            </button>
        </div>

        <!-- Products Grid -->
        @if(count($products) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-2xl p-12 text-center border border-slate-200 shadow-sm max-w-lg mx-auto space-y-4">
                <div class="text-5xl">🔍</div>
                <h3 class="text-lg font-bold text-slate-900">No Machines Found</h3>
                <p class="text-xs sm:text-sm text-slate-600">
                    No machinery matches your criteria. Try adjusting your search query or speak with our technical team directly.
                </p>
                <div class="pt-2 flex items-center justify-center gap-3">
                    <a href="{{ route('products') }}" class="px-4 py-2 bg-blue-900 text-white rounded-lg text-xs font-semibold">
                        View All Machines
                    </a>
                    <a href="tel:+917061973186" class="px-4 py-2 bg-amber-500 text-slate-950 rounded-lg text-xs font-bold">
                        Call Us: +91 7061973186
                    </a>
                </div>
            </div>
        @endif

        <!-- Help Callout Banner -->
        <div class="mt-16 bg-gradient-to-r from-blue-900 to-slate-900 text-white rounded-3xl p-8 sm:p-10 shadow-xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-2">
                <span class="text-xs font-bold text-amber-400 uppercase tracking-wider">Expert Engineering Support</span>
                <h3 class="text-xl sm:text-2xl font-bold font-['Outfit']">
                    Didn't find your required machine in the catalog?
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 max-w-xl">
                    We also engineer custom machinery solutions and complete turnkey industrial plants. Contact our technical team today for tailor-made setups.
                </p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <a href="tel:+917061973186" class="px-5 py-3 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-xs sm:text-sm shadow transition">
                    Call: 7061973186
                </a>
                <button type="button" class="open-quote-modal px-5 py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl text-xs sm:text-sm border border-white/20 transition">
                    Request Quotation
                </button>
            </div>
        </div>
    </div>
</section>

@endsection
