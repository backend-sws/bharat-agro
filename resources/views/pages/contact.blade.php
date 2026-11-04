@extends('layouts.app')

@section('title', 'Contact Us | Bharat Agro Industry & Machinery Patna')
@section('meta_description', 'Bharat Agro Industry Patna contact info - 2nd Floor, Opp. Aryabhata University, Mithapur Old Bus Stand Road, Patna. Phone: 7061973186, 7858945066.')

@section('content')

<!-- Header Banner -->
<div class="bg-gradient-to-r from-blue-950 via-blue-900 to-slate-900 text-white py-14 border-b-4 border-amber-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="inline-block bg-amber-500 text-slate-950 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md">
            GET IN TOUCH WITH US
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-['Outfit']">
            CONTACT US
        </h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto">
            We’re here to help you start or grow your business with the right machinery under government-supported schemes.
        </p>
    </div>
</div>

<!-- Notice Bar in English -->
<div class="bg-amber-100 text-amber-900 py-3 px-4 border-b border-amber-200 text-xs sm:text-sm font-medium text-center">
    Certified machinery available under government schemes including Mukhyamantri Udyami Yojana, Laghu Udyami Yojana, PMEGP, and PMFME.
</div>

<!-- Contact Content Section -->
<section class="py-16 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left Info Column -->
            <div class="lg:col-span-5 space-y-8">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                        PATNA HEADQUARTERS
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2 font-['Outfit']">
                        Get in Touch with Bharat Agro Industry &amp; Machinery
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed">
                        Whether you need product details, scheme-related guidance, or assistance in choosing the right machine, feel free to contact us anytime. Our Patna team will be glad to assist you.
                    </p>
                </div>

                <!-- Contact Details Cards -->
                <div class="space-y-4 text-xs sm:text-sm">
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-900 flex items-center justify-center font-bold text-lg shrink-0">
                            📍
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 block text-sm">Office &amp; Showroom Address:</span>
                            <span class="text-slate-600 block mt-1">2nd Floor, Opp. Aryabhata University, Mithapur Old Bus Stand Road, Patna-01, Bihar</span>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-lg shrink-0">
                            📞
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 block text-sm">Call &amp; WhatsApp:</span>
                            <div class="text-slate-700 mt-1 space-y-0.5">
                                <div>Mobile: <a href="tel:+917061973186" class="font-semibold text-blue-900 hover:underline">+91 7061973186</a></div>
                                <div>Helpline: <a href="tel:+917858945066" class="font-semibold text-blue-900 hover:underline">+91 7858945066</a></div>
                                <div>Landline: <span class="font-semibold text-slate-900">0612 3171580</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-lg shrink-0">
                            ✉️
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 block text-sm">Email &amp; Tax Registration:</span>
                            <span class="text-slate-600 block mt-1">Email: <a href="mailto:bharatagro02@gmail.com" class="text-blue-900 hover:underline">bharatagro02@gmail.com</a></span>
                            <span class="text-amber-800 font-bold block mt-1">GSTIN: 10CJJPD5303B1Z7</span>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-lg shrink-0">
                            🕒
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 block text-sm">Operating Hours:</span>
                            <span class="text-slate-600 block mt-1">Monday - Saturday: 9:30 AM to 7:30 PM</span>
                            <span class="text-slate-500 text-xs block">Sunday: Open by prior appointment</span>
                        </div>
                    </div>
                </div>

                <!-- Direct WhatsApp Box -->
                <div class="bg-emerald-600 text-white p-6 rounded-2xl shadow-lg space-y-3">
                    <h3 class="text-base font-bold flex items-center gap-2">
                        <span>💬 Chat Directly on WhatsApp</span>
                    </h3>
                    <p class="text-xs text-emerald-100">
                        Request live machinery demonstration videos, catalog brochures, and official quotation PDFs on WhatsApp.
                    </p>
                    <a href="https://wa.me/917061973186?text=Hello%20Bharat%20Agro%20Patna,%20I%20need%20details%20on%20machinery%20and%20government%20subsidies." target="_blank" rel="noopener" class="inline-block px-5 py-2.5 bg-white text-emerald-800 font-bold rounded-xl text-xs shadow hover:bg-emerald-50 transition">
                        Open WhatsApp (+91 7061973186)
                    </a>
                </div>
            </div>

            <!-- Right Form Column -->
            <div class="lg:col-span-7 bg-white rounded-2xl sm:rounded-3xl p-5 sm:p-8 lg:p-12 border border-slate-200 shadow-xl space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-900 bg-blue-100 px-3 py-1 rounded-md">
                        ONLINE INQUIRY FORM
                    </span>
                    <h2 class="text-xl sm:text-2xl font-bold font-['Outfit'] text-slate-900 mt-2">
                        Contact &amp; Machinery Quotation Form
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Fill in your details below and our technical officers will connect with you via phone or WhatsApp.
                    </p>
                </div>

                <form action="{{ route('inquiry.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Full Name *</label>
                            <input type="text" name="name" required placeholder="Enter your full name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Mobile / WhatsApp No. *</label>
                            <input type="tel" name="phone" required placeholder="10-digit mobile number" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Email Address</label>
                            <input type="email" name="email" placeholder="example@gmail.com" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">City / District *</label>
                            <input type="text" name="city" required placeholder="e.g. Patna, Muzaffarpur, Ranchi" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Select Machine</label>
                            <select name="machine_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="">-- Please select machine --</option>
                                @foreach($products as $p)
                                    <option value="{{ $p['name'] }}">{{ $p['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Government Scheme</label>
                            <select name="scheme" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none bg-white">
                                <option value="Mukhyamantri Udyami Yojana">Mukhyamantri Udyami Yojana (Bihar - ₹10 Lakhs)</option>
                                <option value="Mukhyamantri Laghu Udyami Yojana">Mukhyamantri Laghu Udyami Yojana (₹2 Lakhs Grant)</option>
                                <option value="PMEGP">PMEGP (Up to 35% Capital Subsidy)</option>
                                <option value="PMFME">PMFME (Food Processing Scheme)</option>
                                <option value="Private / Self-Investment">Self-Investment / Non-Subsidy</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase mb-1">Message or Requirements</label>
                        <textarea name="message" rows="4" placeholder="Specify required capacity, power setup, delivery timeline, or questions..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-blue-900 outline-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-amber-500 via-amber-600 to-amber-700 hover:from-amber-600 hover:to-amber-800 text-slate-950 font-bold rounded-xl text-base shadow-lg transition-transform hover:scale-[1.01]">
                        Submit Inquiry
                    </button>
                </form>
            </div>
        </div>

        <!-- Find us on The Map -->
        <div class="mt-16 space-y-4">
            <div class="text-center">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-100 px-3 py-1 rounded-md">
                    LOCATION ON GOOGLE MAP
                </span>
                <h3 class="text-2xl font-bold font-['Outfit'] text-slate-900 mt-2">
                    Find us on The Map
                </h3>
            </div>
            <div class="rounded-3xl overflow-hidden border border-slate-200 shadow-xl h-96 bg-slate-200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.2238472481356!2d85.1275!3d25.5975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed585c54d3d8db%3A0xa1b2c3d4e5f60718!2sAryabhatta%20Knowledge%20University%2C%20Mithapur%2C%20Patna%2C%20Bihar%20800001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Bharat Agro Location Patna">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection
