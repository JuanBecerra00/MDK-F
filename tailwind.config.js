/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        'views/**/*.{html,js}',
        './components/**/*.{html,js}',
      ],
darkMode: 'class',
theme: {
    fontSize: {
        'header': '.75rem'
    },
    extend: {
        spacing: {
            '23.25': '6rem',
            'themew': '4.4rem',
            'selected': '13.9rem',
            '39': '9.75rem',
            '40': '10rem',
            '57': '14.4rem',
            '96': '24rem',
            'export': '20.7rem',
            'exporttop': '8rem',
            '112': '28rem',
            '100': '25rem',
            '123.2': '31rem',
            '128': '32rem',
            '152': '38rem',
            '160': '40rem',
            '212': '53rem',
            '286': '71.5rem',
            'table': '26rem',
            'custom': '30rem',
            'aside': '37.7rem',
            '312': '78rem',

        },
        height: {
          'body': 'calc(100vh - 96px)'
        },
        colors: {
            redl: '#e50914',
            redd: '#b81d28',
            grayl: '#443939',
            grayd: '#221e1e',
            darkredl: '#e50914',
            darkredd: '#8a0000',
            darkgrayl: '#303030',
            darkgrayd: '#242424',
        },
        borderWidth: {
            DEFAULT: '1px',
            '1': '1px'
        },
        inset: {
            '1111': '50px'

        },
        boxShadow: {
            'list': '0 3px 10px rgba(0, 0, 0, 0.6);',
            'cards': '0 8px 20px rgba(0, 0, 0, 0.6);',
            'custom': '0 0 5px 0px rgba(0, 0, 0, 0.6);',
            '5xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25);'
        },
        
        fontSize: {
          card: ['80px', '38px']
        }
    }
},
plugins: [],
}
