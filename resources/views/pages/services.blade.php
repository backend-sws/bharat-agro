@extends('layouts.app')

@section('title', 'Services • हमारी सेवाएं | Bharat Agro Industry & Machinery Patna')
@section('meta_description', 'मशीनरी सप्लाई, सरकारी योजना कोटेशन, प्रोजेक्ट रिपोर्ट, ऑन-साइट इंस्टालेशन एवं ऑपरेटर ट्रेनिंग - भारत एग्रो इंडस्ट्री पटना।')

@section('content')

<!-- Header Banner -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            END-TO-END INDUSTRIAL SERVICES
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            SERVICES • हमारी सेवाएं
        </h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto">
            From Project Report to Installation &amp; Training - We Support Your Entire Entrepreneurship Journey
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
                नए उद्योग की शुरुआत से लेकर सफल संचालन तक पूर्ण सहयोग
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                हम सिर्फ मशीनें नहीं बेचते, बल्कि आपको एक सफल और आत्मनिर्भर उद्यमी बनाने के लिए हर संभव सेवा प्रदान करते हैं।
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-900 flex items-center justify-center font-bold text-2xl">
                    📑
                </div>
                <h3 class="text-lg font-bold font-['Outfit'] text-slate-900">
                    सरकारी योजना कोटेशन एवं प्रोजेक्ट रिपोर्ट
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    मुख्यमंत्री उद्यमी योजना, PMEGP और PMFME में बैंक लोन एवं सब्सिडी पास कराने के लिए उद्योग विभाग द्वारा मान्य आधिकारिक कोटेशन एवं विस्तृत DPR तैयार करके दी जाती है।
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-2xl">
                    🏭
                </div>
                <h3 class="text-lg font-bold font-['Outfit'] text-slate-900">
                    रेडी स्टॉक एवं सुरक्षित मशीन डिलीवरी
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    पटना स्थित हमारे गोदाम में 27+ प्रकार की व्यावसायिक मशीनें रेडी स्टॉक में रहती हैं। बिहार व झारखण्ड के किसी भी जिले में सुरक्षित ट्रांसपोर्टेशन के साथ डिलीवरी कराई जाती है।
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-2xl">
                    🔧
                </div>
                <h3 class="text-lg font-bold font-['Outfit'] text-slate-900">
                    ऑन-साइट इंस्टालेशन एवं टेस्टिंग
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    हमारे अनुभवी मैकेनिकल एवं इलेक्ट्रिकल तकनीशियन आपके कार्यस्थल पर जाकर मशीन की प्रॉपर फिटिंग, मोटर कनेक्शन और सफल ट्रायल रन सुनिश्चित करते हैं।
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-2xl">
                    👨‍🏫
                </div>
                <h3 class="text-lg font-bold font-['Outfit'] text-slate-900">
                    व्यावहारिक ऑपरेटर ट्रेनिंग
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    मशीन चलाने वाले ऑपरेटर को सुरक्षा, डाई बदलने, स्पीड कंट्रोल, लुब्रिकेशन और दैनिक मेंटेनेंस की पूरी हैंड-ऑन ट्रेनिंग दी जाती है ताकि उत्पादन बिना रुकावट चले।
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-rose-100 text-rose-800 flex items-center justify-center font-bold text-2xl">
                    📦
                </div>
                <h3 class="text-lg font-bold font-['Outfit'] text-slate-900">
                    कच्चा माल (Raw Material) सप्लायर गाइडेंस
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    अगरबत्ती स्टिक, प्रीमिक्स, कपूर पाउडर, पेपर कप रोल, फॉयल पेपर, चप्पल शीट आदि के विश्वसनीय व किफायती सप्लायर्स के सीधे संपर्क उपलब्ध कराए जाते हैं।
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-sky-100 text-sky-800 flex items-center justify-center font-bold text-2xl">
                    🛡️
                </div>
                <h3 class="text-lg font-bold font-['Outfit'] text-slate-900">
                    1 साल वारंटी एवं स्पेयर पार्ट्स सपोर्ट
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    सभी प्रमुख मशीनों पर 1 वर्ष की वारंटी प्रदान की जाती है। पटना ऑफिस से कभी भी आवश्यक स्पेयर पार्ट्स, डाई, ब्लेड, बेल्ट आदि तुरंत उपलब्ध कराए जाते हैं।
                </p>
            </div>
        </div>

        <!-- Consultation Banner -->
        <div class="mt-16 bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-md text-center max-w-3xl mx-auto space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                SERVICE INQUIRY
            </span>
            <h3 class="text-2xl font-bold font-['Outfit'] text-slate-900">
                क्या आपको इंस्टालेशन या कोटेशन से जुड़ी सहायता चाहिए?
            </h3>
            <p class="text-xs sm:text-sm text-slate-600">
                हमारे सर्विस इंजीनियर से बात करने के लिए अभी कॉल करें या ऑनलाइन फॉर्म भरें।
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                <a href="tel:+917061973186" class="px-6 py-3 bg-blue-900 hover:bg-blue-950 text-white font-semibold rounded-xl text-sm transition">
                    कॉल करें: +91 7061973186
                </a>
                <button type="button" class="open-quote-modal px-6 py-3 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-sm shadow transition">
                    ऑनलाइन सर्विस रिक्वेस्ट भेजें
                </button>
            </div>
        </div>
    </div>
</section>

@endsection

