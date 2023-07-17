/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "*.{html,js,php}",
    "./components/*.{php, html}",
    "./views/*.{php, html}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
