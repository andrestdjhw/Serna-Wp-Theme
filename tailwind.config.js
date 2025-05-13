/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './src/**/*.{js,jsx,ts,tsx}',
    './template-parts/**/*.php',
    './inc/**/*.php',
    './blocks/**/*.php',
  ],

  // ... existing config ...
  theme: {
    extend: {
      fontFamily: {
        // Replace or add to your existing fontFamily configuration
        custom: ['"Pluto"', 'sans-serif'],
        // Or if you want to keep PT Sans as fallback:
        pluto: ['"Pluto"', '"PT Sans"', 'sans-serif']
      }
    }
  },
    
    plugins: [
    require('@tailwindcss/typography'),
  ],
  // Explicitly enable the gradient utilities
  corePlugins: {
    gradientColorStops: true,
  },
}