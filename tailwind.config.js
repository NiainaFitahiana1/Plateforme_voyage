/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('preline/plugin'),
    // require("@tailwindcss/forms")({
    //   strategy: 'base', // only generate global styles
    //   strategy: 'class', // only generate classes
    // }),
  ],
}

