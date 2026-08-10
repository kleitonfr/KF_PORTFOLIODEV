/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                // Identidade (mantida — acento único, usado com moderação)
                sun:    '#FFBE00',
                pink:   '#FF6B9D',
                aqua:   '#00D4E8',
                violet: '#C084FC',

                // Tema escuro
                bg:       '#0B0B10',
                surface:  '#131318',
                surface2: '#1A1A22',
                border:   'rgba(242,241,236,.08)',
                ink:      '#F2F1EC',
                muted:    '#8D8DA0',
                mutedDim: '#5F5F70',
            },
            fontFamily: {
                display: ['"Syne"', 'sans-serif'],
                body:    ['"Plus Jakarta Sans"', 'sans-serif'],
                mono:    ['"JetBrains Mono"', 'monospace'],
            },
            animation: {
                'fadeUp':    'fadeUp .7s ease forwards',
                'marquee':   'marquee 32s linear infinite',
            },
            keyframes: {
                fadeUp:  { from:{ opacity:'0', transform:'translateY(28px)' }, to:{ opacity:'1', transform:'translateY(0)' } },
                marquee: { from:{ transform:'translateX(0)' }, to:{ transform:'translateX(-50%)' } },
            },
        },
    },
    plugins: [],
};
