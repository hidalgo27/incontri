module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: {
        beetle:
          "linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/banner_1.png')",
        beetle2:
          "linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/banner_2.png')",
        beetle3:
          "linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/banner_3.png')",
        banner:"url('/images/pattern_menu.jpg')",
        main:"linear-gradient(to right bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/incontri-991.jpg')",
        main2:"linear-gradient(to right bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/slider2.png')",
        main3:"linear-gradient(to right bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/slider3.png')",
        banner2:"url('/images/banner.png')", 
        coverAbout:
          "linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/incontri-94.jpg')",
        banner3:"url('/images/incontri-96.jpg')", 
        coverShop:
          "linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/incontri-106.jpg')",
        coverBlog:
          "linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/incontri-50.jpg')",
        coverMenu:
        "linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/menu-cover.png')",
        bannerMenu:"linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/incontri-15.jpg')",
      }, 
      colors: {
        crema:"#978667",
        black2:"#262626"
      },
      fontFamily: {
          sans: ['Poppins','Helvetica', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {
      fontWeight: ['hover', 'focus'],
        scale: ['group-hover'],
        translate: ['group-hover'],
    },
  },
  plugins: [],
}
