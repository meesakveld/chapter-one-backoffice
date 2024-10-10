/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        'c-blue': '#1E65B8',
        'c-blue-light': '#D7E1ED',
        'c-gray': '#6D747D',
        'c-gray-light': '#D7DCE0',
        'c-background': '#FBFCFE',
      },
    },
  },
  plugins: [],
}

