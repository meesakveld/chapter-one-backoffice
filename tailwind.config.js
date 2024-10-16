/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './views/**/*.{php,html}',
    './partials/**/*.{php,html}',
    './public/**/*.php',
  ],  
  theme: {
    extend: {
      colors: {
        'c-blue': '#1E65B8',
        'c-blue-light': '#D7E1ED',
        'c-blue-very-light': '#eff6ff',
        'c-blue-dark': '#1A4F7D',
        'c-gray': '#6D747D',
        'c-gray-light': '#D7DCE0',
        'c-black': '#1B2128',
        'c-background': '#FBFCFE',
      },
    },
  },
  plugins: [],
}

