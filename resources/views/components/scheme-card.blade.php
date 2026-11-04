@props(['scheme'])

@php
    $id = $scheme['id'] ?? 'udyami';
    $color = $scheme['color'] ?? 'blue';

    $themeConfig = [
        'laghu-udyami' => [
            'topGradient' => 'from-amber-400 via-amber-500 to-amber-600',
            'badgeClass' => 'bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 font-black shadow-xs',
            'badgeIcon' => '⭐',
            'boxGradient' => 'bg-gradient-to-br from-amber-50 via-orange-50/60 to-amber-100/70 border-amber-300/80 text-amber-950',
            'cardHover' => 'hover:border-amber-400 hover:shadow-amber-500/15',
            'btnHover' => 'hover:from-amber-500 hover:to-amber-600',
            'watermark' => '₹2L',
        ],
        'udyami' => [
            'topGradient' => 'from-blue-600 via-blue-800 to-indigo-900',
            'badgeClass' => 'bg-blue-900 text-white font-extrabold shadow-xs',
            'badgeIcon' => '⚡',
            'boxGradient' => 'bg-gradient-to-br from-blue-50 via-indigo-50/60 to-blue-100/60 border-blue-200/90 text-blue-950',
            'cardHover' => 'hover:border-blue-400 hover:shadow-blue-500/15',
            'btnHover' => 'hover:from-blue-800 hover:to-blue-900',
            'watermark' => '₹10L',
        ],
        'pmegp' => [
            'topGradient' => 'from-emerald-500 via-emerald-600 to-teal-700',
            'badgeClass' => 'bg-emerald-700 text-white font-extrabold shadow-xs',
            'badgeIcon' => '🏛️',
            'boxGradient' => 'bg-gradient-to-br from-emerald-50 via-teal-50/60 to-emerald-100/60 border-emerald-200/90 text-emerald-950',
            'cardHover' => 'hover:border-emerald-400 hover:shadow-emerald-500/15',
            'btnHover' => 'hover:from-emerald-700 hover:to-emerald-800',
            'watermark' => '35%',
        ],
        'pmfme' => [
            'topGradient' => 'from-orange-500 via-orange-600 to-red-600',
            'badgeClass' => 'bg-orange-600 text-white font-extrabold shadow-xs',
            'badgeIcon' => '🍲',
            'boxGradient' => 'bg-gradient-to-br from-orange-50 via-amber-50/60 to-orange-100/60 border-orange-200/90 text-orange-950',
            'cardHover' => 'hover:border-orange-400 hover:shadow-orange-500/15',
            'btnHover' => 'hover:from-orange-600 hover:to-orange-700',
            'watermark' => 'Agro',
        ],
        'cmyuva' => [
            'topGradient' => 'from-indigo-600 via-indigo-700 to-purple-800',
            'badgeClass' => 'bg-indigo-700 text-white font-extrabold shadow-xs',
            'badgeIcon' => '🚀',
            'boxGradient' => 'bg-gradient-to-br from-indigo-50 via-purple-50/60 to-indigo-100/60 border-indigo-200/90 text-indigo-950',
            'cardHover' => 'hover:border-indigo-400 hover:shadow-indigo-500/15',
            'btnHover' => 'hover:from-indigo-700 hover:to-indigo-800',
            'watermark' => '1%',
        ],
    ];

    $cfg = $themeConfig[$id] ?? $themeConfig['udyami'];
@endphp

<div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-[0_4px_25px_-5px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(0,44,75,0.14)] {{ $cfg['cardHover'] }} transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between h-full relative overflow-hidden group">
    <!-- Top Decorative Gradient Band -->
    <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r {{ $cfg['topGradient'] }}"></div>

    <!-- Faint Watermark Emblem -->
    <div class="absolute -right-3 -top-3 text-7xl font-black font-['Outfit'] text-slate-900/[0.03] select-none pointer-events-none">
        {{ $cfg['watermark'] }}
    </div>

    <div>
        <!-- Top Pill Header -->
        <div class="flex items-center justify-between gap-2 mb-3.5 pt-1">
            <span class="inline-flex items-center gap-1.5 {{ $cfg['badgeClass'] }} text-[11px] uppercase tracking-wider px-3 py-1 rounded-full">
                <span>{{ $cfg['badgeIcon'] }}</span>
                <span>{{ $scheme['badge'] }}</span>
            </span>
            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider text-right">
                {{ $scheme['sub_title'] }}
            </span>
        </div>

        <!-- Scheme Name -->
        <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 group-hover:text-blue-900 transition-colors font-['Outfit',sans-serif] leading-tight mb-4">
            {{ $scheme['name'] }}
        </h3>

        <!-- Financial Subsidy Highlight Card (Fintech Style) -->
        <div class="{{ $cfg['boxGradient'] }} rounded-2xl p-4 border shadow-xs mb-4">
            <div class="flex items-center justify-between mb-1.5">
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-600 flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Subsidy / Grant Benefit</span>
                </span>
                <span class="text-[10px] font-bold text-emerald-800 bg-emerald-100/90 px-2 py-0.5 rounded-full border border-emerald-200/80">
                    Govt. Approved
                </span>
            </div>
            <div class="text-base sm:text-lg font-black font-['Outfit'] tracking-tight leading-snug">
                {{ $scheme['grant'] }}
            </div>
        </div>

        <!-- Eligibility Box -->
        <div class="flex items-start gap-2.5 p-3 rounded-xl bg-slate-50 border border-slate-200/70 text-xs text-slate-600 mb-5">
            <div class="w-5 h-5 rounded-lg bg-blue-50 text-blue-900 flex items-center justify-center shrink-0 mt-0.5 border border-blue-100">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
            <div>
                <strong class="text-slate-800 font-bold block text-[11px] uppercase tracking-wider">Eligible Beneficiaries:</strong>
                <span class="text-slate-600 font-medium leading-relaxed">{{ $scheme['eligible_for'] }}</span>
            </div>
        </div>

        <!-- Checklist Highlights -->
        <div class="space-y-2.5 mb-6">
            @foreach($scheme['highlights'] as $highlight)
                <div class="flex items-start gap-2.5 text-xs text-slate-700 leading-relaxed">
                    <span class="w-4 h-4 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 font-bold text-[10px]">
                        ✓
                    </span>
                    <span>{{ $highlight }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Action Footer Area -->
    <div class="pt-4 border-t border-slate-100 mt-auto space-y-2">
        <button type="button"
                class="open-quote-modal w-full py-3 px-4 bg-gradient-to-r from-slate-900 via-blue-950 to-slate-900 hover:from-blue-900 hover:to-blue-950 text-white font-bold rounded-xl text-xs sm:text-sm shadow-sm hover:shadow-md transition-all flex items-center justify-center gap-2 group-hover:scale-[1.01] active:scale-[0.99]"
                data-machine="{{ $scheme['name'] }} Machinery">
            <svg class="w-4 h-4 text-amber-400 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span>Get Scheme Quotation &amp; DPR</span>
            <span class="text-amber-400 font-bold group-hover:translate-x-1 transition-transform">→</span>
        </button>

        <a href="{{ route('schemes') }}#{{ $scheme['id'] }}" class="block text-center text-[11px] font-semibold text-slate-500 hover:text-blue-900 transition-colors py-1">
            View Eligibility &amp; Document Checklist &rarr;
        </a>
    </div>
</div>

