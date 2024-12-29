const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  purge: {
    mode: 'layers',
    content: [
      'function.php',
      'index.php',
      'header.php',
      '404.php',
      'footer.php',
      'page.php',
      'page.php',
      'template-parts/content.php',

      'partails/tpl-abautus.php',
      'partails/tpl-callback.php',
      'partails/tpl-map.php',
      'partails/tpl-teams_loop.php',
      'partails/tpl-services.php',
      'partails/tpl-welcome.php',
      'partails/tpl-welcome_services.php',
      'partails/tpl-content_block.php',
      'partails/tpl-services_loop_othes.php',

      'team-partails/tpl-welcome.php',
      'team-partails/tpl-teams_loop.php',
      'team-partails/tpl-services.php',
      'team-partails/tpl-map.php',
      'team-partails/tpl-content_block.php',
      'team-partails/tpl-callback.php',
    ],
  },
  darkMode: false,
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Inter', ...defaultTheme.fontFamily.sans],
      },
      container: {
        center: true,
        padding: '1rem',
        screens: {
          'xs': '100%',
          'sm': '885px',
          'md': '992px',
          'lg': '1024px',
          'xl': '1140px',
          '2xl': '1140px',
        }
      },
      screens: {
        'xs': '640px',
        'sm': '768px',
        'md': '992px',
        'lg': '1024px',
        'xl': '1180px',
        '2xl': '1440px',
      },
      colors: {
        accent: '#cca670',
        white: {
          800: '#f3f3f3',
          900: '#ffffff'
        },
        gray:{
          300: '#404040',
          400: '#bfbfbf',
          500: '#808080',
          600: '#2b332c',
          700: '#666666',
          800: '#d9d9d9',
        },
        black:{
          400: '#1a1f1b',
          500: '#001202',
          600: '#1a1f1b',
          700: '#1a1a1a',
          800: '#001202',
          900: '#000000'
        }
      },
      boxShadow: {
        'icon': '0 0 5px #cca670',
        'input': '0 0 10px #cca670',
      },
      backgroundImage: {
        'bg-gradient': "linear-gradient(180deg, #1a1f1b 0%, #001202 100%);",
        'bg-link': 'linear-gradient(90deg, #0ecccf 0%, #086b6d 100%)',
      }
    },
  },
  variants: {
    variants: {
      extend: {
        visible: [ 'group-hover', 'hover'],
        invisible: ['group-hover', 'hover'],
      },
    },
  },
  plugins: [],
}
