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
                white:  '#FFFFFF',
                sun:    '#F2C30E',
                pink:   '#FF6B9D',
                aqua:   '#00D4E8',
                violet: '#C084FC',
                ink:    '#1A1A2E',
                muted:  '#5B5B7A',
            },
            fontFamily: {
                display: ['"Syne"', 'sans-serif'],
                body:    ['"Plus Jakarta Sans"', 'sans-serif'],
                mono:    ['"JetBrains Mono"', 'monospace'],
            },
            animation: {
                'float':    'float 6s ease-in-out infinite',
                'fadeUp':   'fadeUp .7s ease forwards',
                'blobDrift':'blobDrift 15s ease-in-out infinite alternate',
                'spin-slow':'spin 28s linear infinite',
            },
            keyframes: {
                float:     { '0%,100%':{ transform:'translateY(0)' }, '50%':{ transform:'translateY(-14px)' } },
                fadeUp:    { from:{ opacity:'0', transform:'translateY(28px)' }, to:{ opacity:'1', transform:'translateY(0)' } },
                blobDrift: { '0%':{ transform:'translate(0,0) rotate(0deg) scale(1)' }, '100%':{ transform:'translate(24px,18px) rotate(7deg) scale(1.07)' } },
            },
        },
    },
    plugins: [],
};
