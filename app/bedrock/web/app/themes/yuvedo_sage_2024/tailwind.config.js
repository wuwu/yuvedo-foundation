/** @type {import('tailwindcss').Config} config */

const plugin = require('tailwindcss/plugin');

const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      fontFamily: { 
        "bree": ['Bree Serif', 'serif'] 
    } 
    },
  },
  plugins: [
    plugin(function({ addBase }) {
     addBase({
        'html': { fontSize: "16px" },
      })
    }),
  ],
};

export default config;
