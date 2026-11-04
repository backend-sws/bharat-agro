@props(['product'])

<div class="product-card bg-white rounded-2xl overflow-hidden border border-slate-200/90 flex flex-col h-full shadow-sm hover:shadow-xl transition-all duration-300 group">
    <!-- Image Area with Badges -->
    <div class="relative bg-slate-100 overflow-hidden aspect-[4/3] flex items-center justify-center p-4">
        <img src="{{ asset($product['image']) }}"
             alt="{{ $product['name'] }}"
             class="w-full h-full object-contain mix-blend-multiply group-hover:scale-108 transition-transform duration-500 ease-out"
             loading="lazy">

        <!-- Top Scheme Badge -->
        <div class="absolute top-3 left-3 flex flex-wrap gap-1">
            <span class="bg-blue-900/90 backdrop-blur-sm text-white text-[11px] font-bold px-2.5 py-1 rounded-md tracking-wide shadow-sm">
                {{ $product['schemes'][0] ?? 'सरकारी योजना' }}
            </span>
        </div>

        @if($product['is_featured'] ?? false)
            <div class="absolute top-3 right-3">
                <span class="bg-amber-500 text-slate-950 text-[10px] font-extrabold uppercase px-2 py-0.5 rounded shadow-sm">
                    ★ लोकप्रिय
                </span>
            </div>
        @endif
    </div>

    <!-- Product Info Content -->
    <div class="p-5 flex flex-col flex-grow">
        <!-- Category & Capacity -->
        <div class="flex items-center justify-between text-xs text-slate-500 mb-1.5 gap-2">
            <span class="font-semibold text-amber-700 truncate">{{ $product['category_label'] }}</span>
            <span class="bg-slate-100 px-2 py-0.5 rounded text-[11px] font-medium text-slate-700 shrink-0">
                ⚡ {{ $product['power'] }}
            </span>
        </div>

        <!-- Product Name in Hindi & English -->
        <h3 class="text-base font-bold text-slate-900 leading-snug group-hover:text-blue-800 transition-colors mb-1 line-clamp-1 font-['Outfit',sans-serif]">
            {{ $product['name'] }}
        </h3>
        <p class="text-xs font-semibold text-blue-950 mb-2 font-['Noto_Sans_Devanagari',sans-serif]">
            {{ $product['hindi_name'] }}
        </p>

        <!-- Short Description -->
        <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed mb-4 flex-grow">
            {{ $product['short_desc'] }}
        </p>

        <!-- Spec Tags (Capacity & Warranty) -->
        <div class="bg-slate-50 rounded-xl p-2.5 mb-4 border border-slate-100 space-y-1 text-xs">
            <div class="flex items-center justify-between text-slate-700">
                <span class="text-slate-500">उत्पादन क्षमता:</span>
                <span class="font-semibold text-slate-900">{{ $product['capacity'] }}</span>
            </div>
            <div class="flex items-center justify-between text-slate-700">
                <span class="text-slate-500">सब्सिडी सहायता:</span>
                <span class="font-bold text-emerald-700">35% - 50% उपलब्ध</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="grid grid-cols-2 gap-2 mt-auto pt-2">
            <button type="button"
                    class="open-quote-modal w-full py-2.5 px-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold rounded-lg text-xs tracking-wide shadow-sm transition text-center"
                    data-machine="{{ $product['name'] }}">
                कोटेशन लें
            </button>
            <a href="{{ route('products.detail', $product['slug']) }}"
               class="w-full py-2.5 px-3 bg-slate-900 hover:bg-blue-900 text-white font-medium rounded-lg text-xs transition text-center flex items-center justify-center gap-1">
                <span>विवरण</span>
                <span class="text-amber-400">→</span>
            </a>
        </div>
    </div>
</div>
