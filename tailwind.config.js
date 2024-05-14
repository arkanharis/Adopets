/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'sans': ['Inter', 'ui-sans-serif', 'system-ui'],      
    },
    colors: {
      primary: {
        100: '#FFF2D7',
        200: '#FFE0B5',
        300: '#F8C794',
        400: '#D8AE7E',
      },
    },
    extend: {},
  },
  plugins: [],
}