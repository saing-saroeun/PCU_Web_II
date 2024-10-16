import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
      extend: {
            fontFamily: {
                "default-sans": ["Roboto", "Hanuman", "sans-serif"],
            },
            fontWeight: {
                normal: "400",
                medium: "500",
                bold: "700",
            },
            height: {
                "38px": "38px",
            },
            borderWidth: {
                1.5: "1.5px",
            },

            colors: {
                primaryColor: "#24303F",
                onFocusPrimaryColor: "#0D294F",
                scaffoldBackground: "#F7F7F7",
                danger: "#FF0000",
                warning: "#FC6510",
                focusColor: "#bcbcbc",
                placeholderColor: "#C9C9C9",
                whiteHover: "#F8F8F8",
                greyColor: "#7D7D7D",
                lightGreyColor: "#F5F7FA",
                lightGreyHoverColor: "#E8EAED",
                greyBorderColor: "#E5E5E5",
                lightBlueHover: "#1C2530",
                secondaryColor: "#EAEAEA",
            },
        },
    },

    plugins: [forms],
};
