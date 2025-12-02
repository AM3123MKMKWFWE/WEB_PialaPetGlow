/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'impact': ['Impact', 'sans-serif'], // Tailwind is case-sensitive, use 'impact' in lowercase
      }
    },
    screens: {
      's': '320px', // 👈 custom breakpoint
      'ss': '425px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    fontFamily: {
      'impact': ['Impact', 'sans-serif'],
      'futura-heavy': ['Futura Heavy', 'sans-serif'],
      'futura-light': ['Futura Light', 'sans-serif'],
      'futura-medium': ['Futura Medium', 'sans-serif'],
      'impacted': ['Impacted', 'sans-serif'],
      'unicode-impact': ['unicode.impact', 'sans-serif'],
  },
  },
  plugins: [],
}
