module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#3c8dbc',
            },
            textColors: {
                primary: '#5A67D8'
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography')
    ],
};
