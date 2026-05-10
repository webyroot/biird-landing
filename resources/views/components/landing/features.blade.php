@if($section)
<section id="{{ $section->section_anchor_id }}" class="py-16 lg:py-24 bg-gradient-to-br from-biird-primary via-biird-dark to-biird-primary relative overflow-hidden">
    <!-- Background Gradient Decoration -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_30%_40%_at_10%_20%,rgba(232,113,74,0.15)_0%,transparent_60%)]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="mb-12">
            <!-- Badge -->
            <div class="inline-flex items-center px-3 py-1.5 bg-white/10 border border-white/20 rounded-full mb-6">
                <span class="text-[11px] font-semibold text-white/90 tracking-wider uppercase">{{ $section->badge_text }}</span>
            </div>

            <!-- Headline -->
            <h2 class="text-3xl sm:text-4xl lg:text-[50px] font-serif font-bold text-white leading-tight mb-4">
                {!! nl2br(e($section->headline)) !!}
            </h2>

            <!-- Subtext -->
            <p class="text-white/70 text-sm max-w-xl leading-relaxed">
                {{ $section->subtext }}
            </p>
        </div>

        <!-- Feature Cards - 2x2 Grid -->
        <div class="grid md:grid-cols-2 gap-4">
            @foreach($section->features ?? [] as $feature)
            <div class="bg-white/10 backdrop-blur-md rounded-xl flex items-center p-8 border border-white/10 hover:bg-white/15 transition-all duration-300">
                <div class="flex items-start flex-col gap-3">
                    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <iconify-icon icon="{{ $feature['icon'] ?? 'solar:chat-round-line-bold' }}" class="w-5 h-5 text-white" width="20" height="20"></iconify-icon>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-1">{{ $feature['title'] ?? '' }}</h3>
                        <p class="text-white/60 text-md leading-relaxed">{{ $feature['description'] ?? '' }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
