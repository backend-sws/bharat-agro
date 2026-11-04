@extends('layouts.app')

@section('title', 'सरकारी योजनाएं एवं सब्सिडी विवरण | Bharat Agro Machinery Patna')
@section('meta_description', 'मुख्यमंत्री उद्यमी योजना, लघु उद्यमी योजना (₹2 लाख), PMEGP और PMFME के अंतर्गत मशीनरी कोटेशन, पात्रता और आवेदन प्रक्रिया की संपूर्ण जानकारी।')

@section('content')

<!-- Header Banner -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            GOVERNMENT SUBSIDY SCHEMES GUIDE
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            सरकारी योजनाएं एवं सब्सिडी मार्गदर्शन
        </h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto">
            बिहार एवं केंद्र सरकार की योजनाओं के अंतर्गत मशीनरी खरीद पर 35% से 100% तक वित्तीय अनुदान प्राप्त करें
        </p>
    </div>
</div>

<!-- Main Schemes Detail Section -->
<section class="py-16 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <!-- Scheme 1: Mukhyamantri Udyami Yojana -->
        <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-4">
                <div class="flex items-center gap-3">
                    <span class="bg-blue-100 text-blue-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                        बिहार सरकार • उद्योग विभाग
                    </span>
                    <span class="text-xs font-bold text-amber-600 bg-amber-100 px-3 py-1 rounded-full">
                        ₹10 लाख तक सहायता
                    </span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-['Outfit']">
                    1. मुख्यमंत्री उद्यमी योजना (बिहार)
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    यह बिहार सरकार की सबसे महत्वाकांक्षी योजना है जिसमें अनुसूचित जाति (SC), अनुसूचित जनजाति (ST), अत्यंत पिछड़ा वर्ग (EBC), महिला, तथा युवा उद्यमियों को नया उद्योग लगाने हेतु <strong>₹10 लाख की वित्तीय सहायता</strong> दी जाती है।
                </p>
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 text-xs sm:text-sm space-y-2">
                    <div class="flex items-center gap-2 text-slate-800">
                        <span class="font-bold text-emerald-600">✓ ₹5 लाख अनुदान (सब्सिडी):</span>
                        <span>यह राशि सरकार द्वारा सीधे माफ कर दी जाती है (लौटानी नहीं होती)।</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-800">
                        <span class="font-bold text-blue-900">✓ ₹5 लाख ब्याजमुक्त ऋण:</span>
                        <span>महिलाओं, SC/ST और EBC के लिए पूर्णत: ब्याजमुक्त (युवाओं के लिए मात्र 1% ब्याज), जिसे 84 आसान मासिक किस्तों में लौटाना होता है।</span>
                    </div>
                </div>
                <div class="pt-2">
                    <span class="text-xs font-bold text-slate-800 block mb-1.5">पात्र प्रमुख मशीनें:</span>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">कमर्शियल आटा चक्की प्लांट</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">दाल मिल मशीन</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">मसाला पल्वलाइजर</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">पेपर कप व प्लेट प्लांट</span>
                        <span class="bg-blue-50 text-blue-900 px-2.5 py-1 rounded-md border border-blue-200 font-medium">नेल मेकिंग व वायर मशीन</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 bg-slate-900 text-white p-6 rounded-2xl text-center space-y-4">
                <span class="text-xs font-bold text-amber-400 uppercase tracking-wider block">कोटेशन हेतु संपर्क करें</span>
                <p class="text-xs text-slate-300">
                    उद्योग विभाग पोर्टल पर अपलोड करने योग्य जीएसटी इनवॉइस एवं आधिकारिक कोटेशन प्राप्त करें।
                </p>
                <button type="button" class="open-quote-modal w-full py-3 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl text-xs transition" data-machine="मुख्यमंत्री उद्यमी योजना मशीनरी">
                    कोटेशन बनवाएं (Get Quote)
                </button>
                <a href="tel:+917061973186" class="block text-xs text-amber-300 hover:underline">
                    फोन पर समझें: +91 7061973186
                </a>
            </div>
        </div>

        <!-- Scheme 2: Mukhyamantri Laghu Udyami Yojana -->
        <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-4">
                <div class="flex items-center gap-3">
                    <span class="bg-amber-100 text-amber-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                        100% फ्री ग्रांट
                    </span>
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-full">
                        ₹2 लाख अनुदान राशि
                    </span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-['Outfit']">
                    2. मुख्यमंत्री लघु उद्यमी योजना (बिहार)
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    बिहार के आर्थिक रूप से कमजोर एवं गरीब परिवारों के लिए यह योजना वरदान साबित हुई है। इसमें चयनित लाभार्थियों को अपना खुद का छोटा रोजगार या वर्कशॉप शुरू करने के लिए <strong>₹2,00,000 की राशि पूर्णत: नि:शुल्क (बिना ऋण)</strong> तीन किस्तों में बैंक खाते में भेजी जाती है।
                </p>
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 text-xs sm:text-sm space-y-2">
                    <div class="flex items-center gap-2 text-slate-800">
                        <span class="font-bold text-amber-600">✓ 1st किस्त: ₹50,000</span>
                        <span>टूलकिट एवं प्रारंभिक व्यवस्था के लिए।</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-800">
                        <span class="font-bold text-blue-900">✓ 2nd किस्त: ₹1,00,000</span>
                        <span>मशीनरी खरीद हेतु (मशीन का पक्का बिल एवं कोटेशन अनिवार्य)।</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-800">
                        <span class="font-bold text-emerald-600">✓ 3rd किस्त: ₹50,000</span>
                        <span>कार्यशील पूंजी एवं कच्चा माल खरीद के लिए।</span>
                    </div>
                </div>
                <div class="pt-2">
                    <span class="text-xs font-bold text-slate-800 block mb-1.5">₹2 लाख के बजट में श्रेष्ठ मशीनें:</span>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">स्वचालित अगरबत्ती मेकिंग मशीन</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">कपूर (टिकिया) मेकिंग मशीन</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">हवाई चप्पल (स्लीपर) मेकिंग मशीन</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">मिनी आटा चक्की व मसाला ग्राइंडर</span>
                        <span class="bg-amber-50 text-amber-900 px-2.5 py-1 rounded-md border border-amber-200 font-medium">चाऊमीन / नूडल्स मेकिंग मशीन</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 bg-amber-500 text-slate-950 p-6 rounded-2xl text-center space-y-4">
                <span class="text-xs font-bold uppercase tracking-wider block">लघु उद्यमी स्पेशल सपोर्ट</span>
                <p class="text-xs text-slate-900 font-medium">
                    हमारे पास ₹2 लाख के पैकेज के अनुकूल सभी मशीनें उपलब्ध हैं। बिल एवं लाइव डेमो तुरंत प्राप्त करें।
                </p>
                <button type="button" class="open-quote-modal w-full py-3 bg-slate-950 hover:bg-slate-900 text-white font-bold rounded-xl text-xs transition" data-machine="लघु उद्यमी योजना 2 लाख पैकेज">
                    ₹2 लाख पैकेज कोटेशन लें
                </button>
                <a href="https://wa.me/917061973186?text=Namaste%20Bharat%20Agro,%20mujhe%20Laghu%20Udyami%20Yojana%20ke%20machine%20quotation%20chahiye." target="_blank" rel="noopener" class="block text-xs font-bold text-blue-950 hover:underline">
                    WhatsApp पर कोटेशन मंगाएं →
                </a>
            </div>
        </div>

        <!-- Scheme 3: PMEGP & PMFME -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <span class="bg-emerald-100 text-emerald-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                    केंद्र सरकार • KVIC
                </span>
                <h3 class="text-xl font-bold font-['Outfit'] text-slate-900">
                    3. प्रधानमंत्री रोजगार सृजन कार्यक्रम (PMEGP)
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    विनिर्माण (Manufacturing) इकाइयों के लिए ₹50 लाख तक बैंक ऋण की सुविधा। ग्रामीण क्षेत्रों में 35% और शहरी क्षेत्रों में 25% तक कैपिटल सब्सिडी दी जाती है।
                </p>
                <ul class="text-xs text-slate-700 space-y-2">
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> बैंक लोन के लिए विस्तृत प्रोजेक्ट रिपोर्ट (DPR) सहायता</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> कमर्शियल आरओ वाटर प्लांट, वायर नेल, प्लास्टिक मोल्डिंग हेतु मान्य</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> 18 वर्ष से अधिक आयु का कोई भी भारतीय नागरिक पात्र</li>
                </ul>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <span class="bg-purple-100 text-purple-900 font-extrabold text-xs px-3 py-1 rounded-full uppercase">
                    खाद्य प्रसंस्करण मंत्रालय (MoFPI)
                </span>
                <h3 class="text-xl font-bold font-['Outfit'] text-slate-900">
                    4. प्रधानमंत्री खाद्य उद्यमी योजना (PMFME)
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    फूड प्रोसेसिंग एवं कृषि आधारित उद्योगों के लिए विशेष 35% क्रेडिट लिंक्ड कैपिटल सब्सिडी (अधिकतम ₹10 लाख प्रति इकाई)।
                </p>
                <ul class="text-xs text-slate-700 space-y-2">
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> आटा चक्की, दाल मिल, मसाला पिसाई एवं तेल मिल यूनिट्स</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> सोया पनीर (टोफू), पास्ता एवं मैकरोनी प्लांट</li>
                    <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> FSSAI फूड लाइसेंस एवं ब्रांडिंग व पैकेजिंग मार्गदर्शन</li>
                </ul>
            </div>
        </div>

        <!-- Required Documents Checklist -->
        <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm space-y-6">
            <h3 class="text-xl font-bold font-['Outfit'] text-slate-900 text-center">
                आवेदन हेतु आवश्यक दस्तावेजों की सूची (Required Documents)
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-xs sm:text-sm">
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">1. आधार कार्ड एवं पैन कार्ड</span>
                    <span class="text-slate-500">पहचान व पते के प्रमाण हेतु अनिवार्य।</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">2. निवास एवं जाति प्रमाण पत्र</span>
                    <span class="text-slate-500">आरक्षित वर्ग एवं बिहार निवासी प्रमाण हेतु।</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">3. शैक्षणिक प्रमाण पत्र</span>
                    <span class="text-slate-500">10वीं / 12वीं / आईटीआई पास मार्कशीट।</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">4. बैंक पासबुक / कैंसिल्ड चेक</span>
                    <span class="text-slate-500">सब्सिडी व लोन राशि सीधे खाते में आने हेतु।</span>
                </div>
                <div class="p-4 rounded-xl bg-amber-50 border border-amber-200">
                    <span class="font-bold text-amber-900 block mb-1">5. मशीनरी का आधिकारिक कोटेशन</span>
                    <span class="text-slate-700">भारत एग्रो पटना द्वारा प्रमाणित GST कोटेशन।</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <span class="font-bold text-blue-900 block mb-1">6. कार्यस्थल का पता / बिजली बिल</span>
                    <span class="text-slate-500">जहां मशीन स्थापित की जानी है।</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

