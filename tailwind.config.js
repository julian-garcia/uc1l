/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./templates/**/*.{html,php}", "./**/*.{html,php}"],
  theme: {
    extend: {
      backgroundImage: {
        contact: "url('../images/contact.svg')",
        back: "url('../images/back.svg')",
        uc1l: "url('../images/uc1l.png')",
      },
      colors: {
        primary: "var(--primary)",
        secondary: "var(--secondary)",
        light: "var(--light)",
        "light-primary": "var(--light-primary)",
      },
      fontFamily: {
        "sans-bold": ["bold", "sans-serif"],
        "sans-regular": ["regular", "sans-serif"],
        "sans-italic": ["italic", "sans-serif"],
        "sans-demi-bold": ["demibold", "sans-serif"],
        icons: ["icons"],
      },
      fontSize: {
        base: "18px",
      },
      width: {
        content: "1040px",
      },
      maxWidth: {
        "screen-fill": "100vw",
      },
      screens: {
        "2xs": "380px",
        xs: "480px",
        sm: "600px",
        md: "782px",
        lg: "960px",
        xl: "1080px",
        "2xl": "1280px",
        "3xl": "1440px",
      },
    },
  },
  safelist: ["relative"],
  plugins: [],
};
