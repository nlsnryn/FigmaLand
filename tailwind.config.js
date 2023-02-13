/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#4452FE",
                secondaryGreen: "#02E4C0",
                secondaryBlue: "#112D57",
                whiteText: "#FFFFFF",
                grayText: "#5C5C5C",
                darkBackground: "#181818",
                black: "#000000",
            },
            fontFamily: {
                projectFont: ["Inter", "sans-serif"],
            },
        },
    },
    plugins: [],
};
