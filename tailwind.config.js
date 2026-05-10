import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/Filament/**/*.php',
        './app/Livewire/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Manrope', 'system-ui', 'sans-serif'],
                display: ['Manrope', 'system-ui', 'sans-serif'],
            },
            colors: {
                biird: {
                    primary: '#4A1D96',    // Deep purple
                    secondary: '#7C3AED',  // Bright purple
                    accent: '#F97316',     // Orange accent
                    dark: '#1E1B4B',       // Dark purple
                    light: '#F5F3FF',      // Light purple background
                    cream: '#FFFBF5',      // Cream background
                }
            },
            backgroundImage: {
                'gradient-purple': 'linear-gradient(135deg, #4A1D96 0%, #7C3AED 100%)',
                'gradient-hero': 'linear-gradient(135deg, #FFFBF5 0%, #F5F3FF 100%)',
            },
            animation: {
                'fade-in': 'fadeIn 0.5s ease-out',
                'slide-up': 'slideUp 0.5s ease-out',
                'float': 'float 6s ease-in-out infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
