/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './*.php',
      './src/**/*.{js,jsx,ts,tsx}',
      './template-parts/**/*.php',
      './inc/**/*.php',
      './blocks/**/*.php',
    ],
    theme: {
      extend: {
        colors: {
          // Simplified naming to work better with Tailwind v4
          'primary-text': '#ffffff',
          'secondary-bg': '#333333',
          'default-bg': '#f5f5f7',
          'primary': '#87cede',
          'secondary': '#7dbb5c',
          'third': '#00903b',
          'naranja': '#ee3725',
          'paragraph': '#868385',
        },
      },
    },
    plugins: [
      require('@tailwindcss/typography'),
    ],
    // Explicitly enable the gradient utilities
    corePlugins: {
      gradientColorStops: true,
    },
  }