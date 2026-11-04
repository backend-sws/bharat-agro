@extends('layouts.app')

@section('title', $product['name'] . ' | Bharat Agro Machinery Patna')
@section('meta_description', $product['name'] . ' - ' . $product['short_desc'] . ' | Available with government subsidy and bank quotation in Bihar & Jharkhand.')

@section('content')

<!-- Breadcrumb -->
<div class="bg-slate-100 py-3 border-b border-slate-200 text-xs text-slate-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-blue-900">Home</a>
        <span>/</span>
        <a href="{{ route('products') }}" class="hover:text-blue-900">Products</a>
        <span>/</span>
        <span class="text-blue-900 font-bold truncate">{{ $product['name'] }}</span>
    </div>
</div>

<!-- Product Details Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <!-- Left: Product Image & Badges -->
            <div class="lg:col-span-5 space-y-4">
                <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50 p-6 shadow-sm flex items-center justify-center relative aspect-square">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="max-h-full max-w-full object-contain mix-blend-multiply">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-900 text-white text-xs font-bold px-3 py-1 rounded-md shadow">
                            {{ $product['category_label'] }}
                        </span>
                    </div>
                </div>

                <!-- Scheme Eligibility Alert Box -->
                <div class="bg-amber-50 rounded-2xl p-4 border border-amber-200 space-y-2">
                    <span class="text-xs font-bold text-amber-900 uppercase block">Eligible Government Schemes:</span>
                    <div class="flex flex-wrap gap-1.5">
                        @foreach($product['schemes'] as $sch)
                            <span class="bg-white border border-amber-300 text-amber-950 text-xs font-semibold px-2.5 py-1 rounded-md">
                                ★ {{ $sch }}
                            </span>
                        @endforeach
                    </div>
                    <p class="text-[11px] text-amber-800 pt-1">
                        This machine qualifies for 35% to 50% capital subsidies and concessional loan assistance.
                    </p>
                </div>
            </div>

            <!-- Right: Product Specifications & CTAs -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                        COMMERCIAL SPECIFICATION
                    </span>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2 font-['Outfit']">
                        {{ $product['name'] }}
                    </h1>
                </div>

                <p class="text-sm text-slate-600 leading-relaxed">
                    {{ $product['description'] }}
                </p>

                <!-- Technical Specification Table -->
                <div class="border border-slate-200 rounded-2xl overflow-hidden">
                    <div class="bg-slate-50 px-4 py-2.5 border-b border-slate-200 text-xs font-bold text-slate-800 uppercase tracking-wider">
                        Technical Specifications
                    </div>
                    <div class="divide-y divide-slate-100 text-xs sm:text-sm">
                        <div class="grid grid-cols-3 px-4 py-2.5">
                            <span class="text-slate-500 font-medium">Output Capacity:</span>
                            <span class="col-span-2 font-semibold text-slate-900">{{ $product['capacity'] }}</span>
                        </div>
                        <div class="grid grid-cols-3 px-4 py-2.5 bg-slate-50/50">
                            <span class="text-slate-500 font-medium">Motor Power:</span>
                            <span class="col-span-2 font-semibold text-slate-900">{{ $product['power'] }}</span>
                        </div>
                        <div class="grid grid-cols-3 px-4 py-2.5">
                            <span class="text-slate-500 font-medium">Warranty &amp; Service:</span>
                            <span class="col-span-2 font-semibold text-emerald-700">1-Year Full Warranty + On-Site Technician Support</span>
                        </div>
                        <div class="grid grid-cols-3 px-4 py-2.5 bg-slate-50/50">
                            <span class="text-slate-500 font-medium">Stock &amp; Delivery:</span>
                            <span class="col-span-2 font-semibold text-slate-900">Ready Stock Available in Patna Warehouse</span>
                        </div>
                        <div class="grid grid-cols-3 px-4 py-2.5">
                            <span class="text-slate-500 font-medium">Compliance:</span>
                            <span class="col-span-2 font-semibold text-slate-900">Complies with Department of Industries &amp; MSME Standards</span>
                        </div>
                    </div>
                </div>

                <!-- Features Points -->
                <div>
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Key Highlights &amp; Capabilities:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-sm">
                        @foreach($product['features'] as $feat)
                            <div class="flex items-center gap-2 text-slate-700 font-medium">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-900 flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                                <span>{{ $feat }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Action CTAs -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4 pt-4 border-t border-slate-200 w-full">
                    <button type="button"
                            class="open-quote-modal w-full sm:w-auto text-center justify-center px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold rounded-xl text-sm shadow-md transition flex items-center gap-2 active:scale-95"
                            data-machine="{{ $product['name'] }}">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Request Official Quotation</span>
                    </button>

                    <a href="https://wa.me/917061973186?text=Hello%20Bharat%20Agro,%20I%20would%20like%20to%20request%20a%20quotation%20and%20specs%20for%20{{ urlencode($product['name']) }}."
                       target="_blank"
                       rel="noopener"
                       class="w-full sm:w-auto text-center justify-center px-6 py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl text-sm shadow-md transition flex items-center gap-2 active:scale-95">
                        <svg class="w-5 h-5 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>Chat on WhatsApp</span>
                    </a>

                    <a href="tel:+917061973186" class="w-full sm:w-auto text-center justify-center px-5 py-3.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold rounded-xl text-sm transition flex items-center gap-2 active:scale-95">
                        <svg class="w-4 h-4 text-blue-900 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>Call: 7061973186</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Products in Same Category -->
        @if(count($relatedProducts) > 0)
            <div class="mt-20 pt-12 border-t border-slate-200">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                            SIMILAR MACHINERY
                        </span>
                        <h2 class="text-2xl font-bold font-['Outfit'] text-slate-900 mt-1">
                            Related Machines in this Category
                        </h2>
                    </div>
                    <a href="{{ route('products', ['category' => $product['category']]) }}" class="text-xs font-bold text-blue-900 hover:underline">
                        View all machines in this category →
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($relatedProducts as $rel)
                        <x-product-card :product="$rel" />
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

@endsection
