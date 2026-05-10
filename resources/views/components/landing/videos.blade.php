@if($section)
<section id="{{ $section->section_anchor_id }}" class="bg-white py-[90px] px-[5%]">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-[400px_1fr] gap-12 items-center">
            <!-- Left Content -->
            <div>
                <div class="inline-flex items-center px-4 py-1.5 border border-[#3A206B] rounded-full text-[#3A206B] font-semibold text-xs tracking-widest uppercase mb-5">
                    {{ $section->badge_text }}
                </div>
                <h2 class="font-serif text-[clamp(34px,3.5vw,50px)] font-bold leading-tight text-[#1A0F3A] mb-5">
                    {!! nl2br(e($section->headline)) !!}
                </h2>
                <p class="font-light text-[17px] text-[rgba(58,32,107,0.8)] leading-relaxed">
                    {{ $section->description }}
                </p>
            </div>

            <!-- Right Content - Video Slider -->
            <div class="relative min-w-0">
                <div id="video-slider" class="flex gap-6 overflow-x-auto pb-4 snap-x snap-mandatory scrollbar-hide min-w-0 touch-pan-x" style="-webkit-overflow-scrolling: touch; scroll-behavior: smooth;">
                    @foreach($section->videos ?? [] as $video)
                    <div class="video-card relative w-[300px] sm:w-[360px] lg:w-[420px] aspect-video rounded-[20px] overflow-hidden shadow-[0_4px_16px_rgba(43,24,87,0.15)] flex-shrink-0 snap-start">
                        <iframe src="{{ $video['url'] ?? '' }}" class="absolute inset-0 w-full h-full" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        <div class="absolute top-4 right-4 w-12 h-12 rounded-full overflow-hidden border-2 border-white/80 shadow-lg pointer-events-none z-10">
                            <img src="{{ $section->norah_avatar }}" alt="Norah" class="w-full h-full object-cover">
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Scroll Indicator Dots -->
                <div class="flex justify-center gap-2 mt-4">
                    @foreach($section->videos ?? [] as $index => $video)
                    <button onclick="document.getElementById('video-slider').scrollTo({left: {{ $index }} * (document.querySelector('.video-card').offsetWidth + 24), behavior: 'smooth'})" class="w-2 h-2 rounded-full {{ $index === 0 ? 'bg-[#3A206B]' : 'bg-[#3A206B]/30' }} hover:bg-[#6B52C8] transition-colors"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
