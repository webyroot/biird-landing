@if($section)
<section id="{{ $section->section_anchor_id }}" class="relative pt-24 pb-16 lg:pt-28 lg:pb-24 overflow-hidden bg-[#FAF5FF]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-start">
            <!-- Left Content -->
            <div class="pt-4">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border border-purple-200 rounded-full mb-6">
                    <span class="w-2 h-2 bg-biird-primary rounded-full"></span>
                    <span class="text-xs font-semibold text-biird-primary tracking-wide uppercase">{{ $section->badge_text }}</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl font-serif sm:text-5xl lg:text-[66px] font-bold leading-[1.1] mb-6 tracking-tight text-gray-900">
                    {!! nl2br(e($section->main_title)) !!}
                </h1>

                <!-- Subtext -->
                <p class="text-base text-gray-600 mb-8 max-w-md leading-relaxed">
                    {{ $section->description }}
                </p>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-3 mb-8">
                    <a href="{{ $section->primary_cta_link }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-biird-primary text-white font-medium rounded-3xl hover:bg-biird-dark transition-colors">
                        {{ $section->primary_cta_text }}
                    </a>
                    <a href="{{ $section->secondary_cta_link }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-gray-700 font-medium rounded-3xl border border-gray-200 hover:bg-gray-50 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        {{ $section->secondary_cta_text }}
                    </a>
                </div>

                <!-- Avatar Stack -->
                <div class="flex items-center gap-3">
                    <div class="flex -space-x-2">
                        <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=100&h=100&fit=crop&crop=face" class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop&crop=face" class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&crop=face" class="w-8 h-8 rounded-full border-2 border-white object-cover" alt="">
                        <div class="w-8 h-8 rounded-full bg-biird-primary border-2 border-white flex items-center justify-center text-white text-xs font-semibold">+2K</div>
                    </div>
                    <div class="text-xs text-gray-500">
                        <span class="font-semibold text-gray-700">{{ $section->member_count_text }}</span> {{ $section->member_subtitle }}<br>
                        <span class="text-gray-400">{{ $section->location_text }}</span>
                    </div>
                </div>
            </div>

            <!-- Right Content - Dashboard Mockup -->
            <div class="relative lg:pl-4">
                <div class="space-y-4">
                    <!-- Card 1: WILAN Cohort -->
                    <div class="bg-white rounded-2xl shadow-lg shadow-purple-100/50 p-5 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-biird-primary flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-sm font-semibold text-gray-900">WILAN Cohort — Leadership Circle</h3>
                                <p class="text-xs text-gray-500 mt-0.5">12 members • Week 4 of 8</p>
                                <div class="mt-3 bg-purple-50 rounded-lg p-3">
                                    <p class="text-xs text-gray-600 italic">"This week's reflection hit different. The negotiation framework changed how I see my worth 💜"</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Your Mentor Match -->
                    <div class="bg-white rounded-2xl shadow-lg shadow-purple-100/50 p-5 border border-gray-100">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-4 h-4 text-biird-accent" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <h3 class="text-sm font-semibold text-gray-900">Your Mentor Match</h3>
                            <span class="text-xs text-gray-400">Available for sessions</span>
                        </div>
                        <div class="grid grid-cols-3 gap-3">
                            <!-- Mentor 1 -->
                            <div class="text-center">
                                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=100&h=100&fit=crop&crop=face" class="w-12 h-12 rounded-full mx-auto mb-2 object-cover" alt="">
                                <p class="text-xs font-medium text-gray-900">Zain K.</p>
                                <p class="text-[10px] text-gray-500">VC Partner</p>
                            </div>
                            <!-- Mentor 2 -->
                            <div class="text-center">
                                <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?w=100&h=100&fit=crop&crop=face" class="w-12 h-12 rounded-full mx-auto mb-2 object-cover" alt="">
                                <p class="text-xs font-medium text-gray-900">Fatima O.</p>
                                <p class="text-[10px] text-gray-500">Tech Leader</p>
                            </div>
                            <!-- Mentor 3 -->
                            <div class="text-center">
                                <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=100&h=100&fit=crop&crop=face" class="w-12 h-12 rounded-full mx-auto mb-2 object-cover" alt="">
                                <p class="text-xs font-medium text-gray-900">Nia C.</p>
                                <p class="text-[10px] text-gray-500">CEO</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Chat with Norah -->
                    <div class="bg-white rounded-2xl shadow-lg shadow-purple-100/50 p-5 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <img src="https://skit-safe-84381466.figma.site/_components/v2/7c80917fb6118a19486fb53e443e1623731215c9/Norah_Avatar.ffa360e7.png" class="w-10 h-10 rounded-full object-cover flex-shrink-0" alt="">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="text-sm font-semibold text-gray-900">Chat with Norah</h3>
                                    <span class="px-1.5 py-0.5 bg-green-100 text-green-600 text-[10px] font-medium rounded">AI</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-2">Your AI companion</p>
                                <div class="bg-gray-50 rounded-lg p-3">
                                    <p class="text-xs text-gray-600">Hi! I'm here to support your leadership journey. Ask me anything 💜</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
