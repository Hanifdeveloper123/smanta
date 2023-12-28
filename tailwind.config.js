/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    backgroundImage: {
      'bg1': "url('landing/img/bg1.jpg')",
    },
  },
  plugins: [
    require('flowbite/plugin')
],}

