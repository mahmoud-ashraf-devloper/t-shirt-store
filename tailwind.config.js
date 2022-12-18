
const defaultTheme = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        themeVariants: ['dark'],
        customForms: (theme) => ({
          default: {
            'input, textarea': {
              '&::placeholder': {
                color: theme('colors.gray.400'),
              },
            },
          },
        }),

        extend: {
          maxHeight: {
            '0': '0',
            xl: '36rem',
          },
          fontFamily: {
            sans: ['Inter', ...defaultTheme.fontFamily.sans],
          },
        },
      },

    variants: {
        backgroundColor: [
          'hover',
          'focus',
          'active',
          'odd',
          'dark',
          'dark:hover',
          'dark:focus',
          'dark:active',
          'dark:odd',
        ],
        display: ['responsive', 'dark'],
        textColor: [
          'focus-within',
          'hover',
          'active',
          'dark',
          'dark:focus-within',
          'dark:hover',
          'dark:active',
        ],
        placeholderColor: ['focus', 'dark', 'dark:focus'],
        borderColor: ['focus', 'hover', 'dark', 'dark:focus', 'dark:hover'],
        divideColor: ['dark'],
        boxShadow: ['focus', 'dark:focus'],
      },

      plugins: [
        require('@tailwindcss/forms'),
        
      ],
   
}
