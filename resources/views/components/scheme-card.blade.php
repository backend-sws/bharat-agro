@props(['scheme'])

<div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full relative overflow-hidden group">
    <!-- Top accent border line -->
    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-700 via-amber-500 to-blue-900"></div>

    <div class="flex items-center justify-between mb-3">
        <span class="inline-block bg-blue-50 text-blue-900 border border-blue-200 text-[11px] font-extrabold uppercase px-2.5 py-1 rounded-md">
            {{ $scheme['badge'] }}
        </span>
        <span class="text-xs font-semibold text-slate-500">{{ $scheme['sub_title'] }}</span>
    </div>

    <h3 class="text-lg font-bold text-slate-900 mb-1 group-hover:text-blue-900 transition-colors font-['Noto_Sans_Devanagari',sans-serif]">
        {{ $scheme['name'] }}
    </h3>

    <div class="bg-amber-50/80 border border-amber-200/80 rounded-xl p-3 my-3">
        <span class="text-xs text-amber-800 font-semibold block">सब्सिडी / वित्तीय सहायता:</span>
        <span class="text-sm font-extrabold text-amber-950 block mt-0.5">{{ $scheme['grant'] }}</span>
    </div>

    <p class="text-xs text-slate-600 mb-3 font-medium">
        <strong class="text-slate-800">पात्रता:</strong> {{ $scheme['eligible_for'] }}
    </p>

    <div class="space-y-2 mb-6 flex-grow">
        @foreach($scheme['highlights'] as $highlight)
            <div class="flex items-start gap-2 text-xs text-slate-700">
                <svg class="w-4 h-4 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
                <span>{{ $highlight }}</span>
            </div>
        @endforeach
    </div>

    <div class="pt-2 mt-auto">
        <button type="button"
                class="open-quote-modal w-full py-2.5 px-4 bg-slate-900 hover:bg-blue-900 text-white font-semibold rounded-lg text-xs transition flex items-center justify-center gap-2 group-hover:bg-blue-800"
                data-machine="{{ $scheme['name'] }} Machinery">
            <span>इस योजना के अंतर्गत मशीन चुनें</span>
            <span class="text-amber-400">→</span>
        </button>
    </div>
</div>

