/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            // gridTemplateRows: {
            //     layout: "80px 1fr 100px",
            // },
            fontFamily: {
                roboto: ["Roboto Condensed", "sans-serif"],
                varela: ["Varela Round", "sans-serif"],
            },
            colors: {
                gris: "#D9D9D9",
                negro: "#101010",
                blanco: "#EAEAEA",
                rosa: "#f8c9c9",
            },
        },
    },
    plugins: [],
};
