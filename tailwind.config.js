/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    colors: {
        primary : '#7D7EE6',  
        black : '#000',
        white : '#fff',
        transparent : 'transparent',
        current: 'currentColor'
    },
    
  },
  plugins: [],
};

export default config;
