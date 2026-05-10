<nav class="fixed top-0 left-0 right-0 z-50 bg-[#FAF5FF]/80 backdrop-blur-md border-b border-purple-100/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2">
               <img src="https://skit-safe-84381466.figma.site/_components/v2/7c80917fb6118a19486fb53e443e1623731215c9/Biird_64_.73ae252e.png" class="h-16" alt="Biird Logo">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#community" class="text-gray-600 hover:text-biird-primary text-sm font-medium transition-colors">Community</a>
                <a href="#mentorship" class="text-gray-600 hover:text-biird-primary text-sm font-medium transition-colors">Mentorship</a>
                <a href="#features" class="text-gray-600 hover:text-biird-primary text-sm font-medium transition-colors">Features</a>
                <a href="#norah" class="text-gray-600 hover:text-biird-primary text-sm font-medium transition-colors">Norah</a>
            </div>

            <!-- CTA Buttons -->
            <div class="hidden md:flex items-center gap-3">
                <a href="#signin" class="px-4 py-2 text-biird-primary text-sm font-medium rounded-3xl border border-biird-primary hover:bg-biird-light transition-colors">
                    Sign In
                </a>
                <a href="#join" class="px-4 py-2 bg-biird-primary text-white text-sm font-medium rounded-3xl hover:bg-biird-dark transition-colors">
                    Join Free
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-5 h-5 text-biird-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col gap-3">
                <a href="#community" class="text-gray-600 hover:text-biird-primary text-sm font-medium py-2">Community</a>
                <a href="#mentorship" class="text-gray-600 hover:text-biird-primary text-sm font-medium py-2">Mentorship</a>
                <a href="#features" class="text-gray-600 hover:text-biird-primary text-sm font-medium py-2">Features</a>
                <a href="#norah" class="text-gray-600 hover:text-biird-primary text-sm font-medium py-2">Norah</a>
                <div class="flex gap-2 pt-2">
                    <a href="#signin" class="flex-1 px-4 py-2 text-biird-primary text-sm font-medium rounded-lg border border-biird-primary text-center hover:bg-biird-light transition-colors">
                        Sign In
                    </a>
                    <a href="#join" class="flex-1 px-4 py-2 bg-biird-primary text-white text-sm font-medium rounded-lg text-center hover:bg-biird-dark transition-colors">
                        Join Free
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
