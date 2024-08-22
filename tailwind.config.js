/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        kobi: {
          50: "#fbf4f7",
          100: "#f8ebf0",
          200: "#f4d6e3",
          300: "#e6a2bd",
          400: "#de88a8",
          500: "#d06489",
          600: "#bd4568",
          700: "#a23452",
          800: "#862e44",
          900: "#712a3d",
          950: "#441320",
        },
      },
    },
  },
  plugins: [],
};
