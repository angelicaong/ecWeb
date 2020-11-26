const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],

  darkMode: false, // or 'media' or 'class'

  theme: {
    colors: {
      gray: colors.coolGray,
      blue: colors.lightBlue,
      red: colors.rose,
      pink: colors.fuchsia,
      green: colors.emerald,
      yellow: colors.amber,
      indigo: colors.indigo,
      purple: colors.violet,
      pink: colors.pink,
      eclightblue: "var(--color-eclightblue)",
      ecdarkblue: "var(--color-ecdarkblue)",
      ecwhite: "var(--color-ecwhite)",
      ecgray: "var(--color-ecgray)",
    },

  },


  variants: {
    extend: {
      
    },
  },

  plugins: [
    
  ],
}
