/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html, js}'],
  theme: {
    extend: {
      fontFamily: {
        playfair: "Playfair Display",
        plusJakarta: "Plus Jakarta Sans",
        jetbrains: "JetBrains Mono"
      },
      colors: {
        primary: "#1D267D",
        secondary: "#0C134F",
        tertiary: "#D25380"
      },
    },
  },
  plugins: [],
}
