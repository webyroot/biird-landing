@if($section)
<footer class="bg-[#1A0F3A] text-[rgba(255,255,255,0.6)] py-[60px] px-[5%]">
    <div class="max-w-[1200px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            <!-- Brand Column -->
            <div>
                <p class="font-semibold text-[10px] text-[#F4D35E] tracking-wide px-2.5 py-1 border-2 border-[#F4D35E]/30 rounded-md bg-white/5 inline-block mb-3">
                    {{ $section->badge_text }}
                </p>
                <img src="{{ $section->logo_image ?? 'https://skit-safe-84381466.figma.site/_components/v2/7c80917fb6118a19486fb53e443e1623731215c9/Biird_white.a3b16302.png' }}" alt="Biird" class="h-[40px] w-auto mb-3">
                <p class="text-[14px] text-[rgba(255,255,255,0.5)] leading-relaxed mb-6">
                    {{ $section->description }}
                </p>
                <div class="flex gap-3">
                    @foreach($section->social_links ?? [] as $social)
                    <a href="{{ $social['url'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="w-[38px] h-[38px] rounded-[10px] bg-[rgba(255,255,255,0.08)] border border-[rgba(255,255,255,0.12)] flex items-center justify-center text-[rgba(255,255,255,0.6)] hover:bg-[rgba(255,255,255,0.15)] hover:text-white transition-colors">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02"/>
                        </svg>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Platform Column -->
            <div>
                <div class="font-semibold text-[13px] text-white tracking-wide uppercase mb-[18px]">Platform</div>
                <ul class="space-y-[10px]">
                    @foreach($section->platform_links ?? [] as $link)
                    <li><a href="#" class="text-[14px] text-[rgba(255,255,255,0.5)] hover:text-white transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Company Column -->
            <div>
                <div class="font-semibold text-[13px] text-white tracking-wide uppercase mb-[18px]">Company</div>
                <ul class="space-y-[10px]">
                    @foreach($section->company_links ?? [] as $link)
                    <li><a href="#" class="text-[14px] text-[rgba(255,255,255,0.5)] hover:text-white transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Support Column -->
            <div>
                <div class="font-semibold text-[13px] text-white tracking-wide uppercase mb-[18px]">Support</div>
                <ul class="space-y-[10px]">
                    @foreach($section->support_links ?? [] as $link)
                    <li><a href="#" class="text-[14px] text-[rgba(255,255,255,0.5)] hover:text-white transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-[rgba(255,255,255,0.08)] pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-[13px]">
            <span class="text-[rgba(255,255,255,0.5)]">
                © {{ $section->copyright_text }}
            </span>
            <div class="flex gap-6">
                <a href="#" class="text-[rgba(255,255,255,0.4)] hover:text-[rgba(255,255,255,0.7)] transition-colors">Privacy</a>
                <a href="#" class="text-[rgba(255,255,255,0.4)] hover:text-[rgba(255,255,255,0.7)] transition-colors">Terms</a>
                <a href="#" class="text-[rgba(255,255,255,0.4)] hover:text-[rgba(255,255,255,0.7)] transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>
@endif
