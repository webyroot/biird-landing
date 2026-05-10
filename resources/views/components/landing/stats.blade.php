@if($section)
<section id="{{ $section->section_anchor_id }}" class="bg-[#FBF9F4] py-[90px] px-[5%]">
    <div class="max-w-[1200px] mx-auto">
        <!-- Header & Stats Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[60px] items-center mb-[56px]">
            <div>
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-1.5 border-[1px] border-[#3A206B] rounded-full text-[#3A206B] font-semibold text-xs tracking-widest uppercase mb-5">
                    {{ $section->badge_text }}
                </div>

                <!-- Headline -->
                <h2 class="font-serif text-[clamp(34px,3.5vw,50px)] font-bold leading-tight text-[#1A0F3A] mb-5">
                    {!! nl2br(e($section->headline)) !!}
                </h2>

                <!-- Description -->
                <p class="font-light text-[17px] text-[rgba(58,32,107,0.8)] leading-relaxed mb-7">
                    {{ $section->description }}
                </p>

                <!-- Buttons -->
                <div class="flex gap-3 flex-wrap">
                    <a href="#" class="px-7 py-3.5 bg-[#3A206B] text-white rounded-3xl font-semibold text-[15px] hover:bg-[#2d1854] transition-colors">
                        {{ $section->primary_cta_text }}
                    </a>
                    <a href="#" class="px-7 py-3.5 border-2 border-[#3A206B] text-[#3A206B] rounded-3xl font-semibold text-[15px] hover:bg-[#F4EEF9] transition-colors">
                        {{ $section->secondary_cta_text }}
                    </a>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 gap-5">
                @foreach($section->stats ?? [] as $stat)
                <div class="bg-white rounded-2xl p-6 border border-[rgba(107,82,200,0.15)] text-center">
                    <div class="font-serif text-[40px] font-bold text-[#3A206B] leading-none mb-2">{{ $stat['value'] ?? '' }}</div>
                    <div class="text-[13px] text-[rgba(58,32,107,0.6)]">{{ $stat['label'] ?? '' }}</div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Mentor Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($section->mentors ?? [] as $mentor)
            <div class="bg-white rounded-3xl p-6 border border-[rgba(107,82,200,0.15)] text-center hover:shadow-[0_8px_64px_rgba(43,24,87,0.18)] hover:-translate-y-1 transition-all cursor-pointer relative overflow-hidden group">
                <div class="absolute top-0 left-0 right-0 h-1 bg-[#3A206B] scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
                <div class="w-16 h-16 rounded-full mx-auto mb-3.5 flex items-center justify-center text-white font-bold text-[22px]" style="background: linear-gradient(135deg, rgb(123, 94, 167), rgba(123, 94, 167, 0.867));">
                    {{ $mentor['initials'] ?? '' }}
                </div>
                <div class="font-semibold text-base text-[#1A0F3A] mb-1">{{ $mentor['name'] ?? '' }}</div>
                <p class="text-[13px] text-[rgba(58,32,107,0.6)] leading-snug mb-3.5">{{ $mentor['role'] ?? '' }}</p>
                <div class="flex flex-wrap gap-1.5 justify-center mb-4">
                    @foreach($mentor['tags'] ?? [] as $tag)
                    <span class="px-2.5 py-1 bg-[#EDE8FF] rounded-full font-semibold text-[11px] text-[#3D2680]">{{ $tag }}</span>
                    @endforeach
                </div>
                <div class="flex items-center justify-center gap-1 text-[13px] text-[rgba(58,32,107,0.6)]">
                    <span class="text-[#D4A843]">★</span> {{ $mentor['rating'] ?? '' }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
