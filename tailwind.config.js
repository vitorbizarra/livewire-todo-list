/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/wire-elements/modal/resources/views/*.blade.php',
    './storage/framework/views/*.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

