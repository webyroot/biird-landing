@if($section)
<section id="{{ $section->section_anchor_id }}" class="relative bg-gradient-to-br from-[#3A206B] to-[#4A1F9A] py-[90px] px-[5%] overflow-hidden text-center">
    <!-- Background Decorations -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_50%,rgba(232,113,74,0.15)_0%,transparent_50%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_50%,rgba(107,82,200,0.3)_0%,transparent_50%)]"></div>

    <div class="max-w-[800px] mx-auto relative z-10">
        <!-- Headline -->
        <h2 class="font-serif text-[clamp(38px,4.5vw,58px)] font-bold leading-tight text-white mb-6">
            If you're an African woman<br>
            <em class="italic text-[#D4A843]">ready to grow</em> —<br>
            this is your place.
        </h2>

        <!-- Description -->
        <p class="font-light text-[18px] text-[rgba(255,255,255,0.72)] leading-relaxed mb-12">
            {{ $section->description }}
        </p>

        <!-- Tag Pills -->
        <div class="flex flex-wrap gap-6 justify-center mb-12">
            @foreach($section->tags ?? [] as $tag)
            <div class="px-6 py-4 bg-[rgba(255,255,255,0.08)] border border-[rgba(255,255,255,0.16)] rounded-full text-white font-semibold text-[15px] flex items-center gap-2.5">
                <div class="w-2 h-2 rounded-full bg-[#F5A586]"></div>
                {{ $tag }}
            </div>
            @endforeach
        </div>

        <!-- CTA Button -->
        <a href="{{ $section->cta_link }}" class="inline-block px-11 py-4 bg-white text-[#3A206B] rounded-full font-semibold text-[17px] hover:bg-[#EDE8FF] hover:shadow-[0_8px_32px_rgba(0,0,0,0.25)] transition-all">
            {{ $section->cta_text }}
        </a>
    </div>
</section>
@endif
