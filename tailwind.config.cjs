/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/Http/Controllers/**/*.php",
    "./app/View/Components/**/*.php",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#4F46E5',
          dark: '#4338CA',
        },
        secondary: {
          DEFAULT: '#10B981',
          dark: '#059669',
        },
        danger: {
          DEFAULT: '#EF4444',
          dark: '#DC2626',
        },
        warning: {
          DEFAULT: '#F59E0B',
          dark: '#D97706',
        },
        info: {
          DEFAULT: '#3B82F6',
          dark: '#2563EB',
        },
      },
    },
  },
  plugins: [],
}
