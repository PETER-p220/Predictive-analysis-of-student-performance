/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php', // Scan all Blade files
    './resources/js/**/*.js',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

