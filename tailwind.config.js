/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        kobi: {
          50: '#fcf3f6',
          100: '#fbe8f0',
          200: '#f8d2e1',
          300: '#f5b6cd',
          400: '#ec7aa2',
          500: '#e15380',
          600: '#cf335c',
          700: '#b32345',
          800: '#94203a',
          900: '#7c1f33',
          950: '#4b0c1a',
        },
      },
    },
  },
  plugins: [],
};
