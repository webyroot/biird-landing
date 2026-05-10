@if($section)
<section id="{{ $section->section_anchor_id }}" class="bg-[#F4EEF9] py-[90px] px-[5%]">
    <div class="max-w-[1200px] mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-[56px]">
            <div class="inline-flex items-center px-4 py-1.5 border border-[#3A206B] rounded-full text-[#3A206B] font-semibold text-xs tracking-widest uppercase mb-5">
                {{ $section->badge_text }}
            </div>
            <h2 class="font-serif text-[clamp(34px,3.5vw,50px)] font-bold leading-tight text-[#1A0F3A] mb-5">
                {!! nl2br(e($section->headline)) !!}
            </h2>
            <p class="font-light text-[17px] text-[rgba(58,32,107,0.8)] leading-relaxed max-w-[560px] mx-auto">
                {{ $section->subtext }}
            </p>
        </div>

        <!-- Features Grid - 3x3 -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($section->features ?? [] as $feature)
            <div class="bg-white rounded-[20px] p-6 hover:shadow-[0_4px_16px_rgba(58,32,107,0.08)] transition-all">
                <div class="flex items-start justify-between mb-3">
                    <h3 class="font-bold text-[18px] text-[#1A0F3A] flex-1">{{ $feature['title'] ?? '' }}</h3>
                    <div class="w-12 h-12 rounded-full bg-[#3A206B] flex items-center justify-center flex-shrink-0 ml-3">
                        <svg class="text-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <p class="text-[14px] text-[rgba(58,32,107,0.7)] leading-relaxed">{{ $feature['description'] ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
