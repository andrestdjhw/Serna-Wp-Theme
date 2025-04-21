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
          'primary-text-color': '#ffffff',
          'secondary-bg-color': '#333333',
          'default-background': '#f5f5f7',
          'primary-color': '#87cede',
          'secondary-color': '#7dbb5c',
          'third-color': '#00903b',
          'naranja-serna': '#ee3725',
          'paragraph-color': '#868385',
        },
        backgroundImage: {
          'gradient-navbar': 'linear-gradient(to bottom, #00903b, #7dbb5c)',
        },
      },
    },
    plugins: [
      require('@tailwindcss/typography'),
    ],
  }