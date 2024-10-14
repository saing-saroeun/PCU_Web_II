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
                sans: ['Exo', ...defaultTheme.fontFamily.sans],
            },

            colors:{
                primaryColor: "#24303F",
                onFocusPrimaryColor: "#0D294F",
                scaffoldBackground: "#F7F7F7",
                scaffoldMemberBackground: "#151D32",
                danger: "#F34141",
                dangerHover: "#ce3838",
                warning: "#FC6510",
                orangeColor: "#FF9900",
                orangeHoverColor: "#e68b01",
                focusColor: "#bcbcbc",
                placeholderColor: "#E1E1E1",
                whiteHover: "#F8F8F8",
                greyColor: "#7D7D7D",
                greyColorBorder: "#C9C9C9",
                lightGreyColor: "#F5F7FA",
                lightGreyHoverColor: "#E8EAED",
                greyBorderColor: "#E5E5E5",
                lightBlueHover: "#244F8B",
                secondaryColor: "#EAEAEA",
                greenColor: "#46C25F",
                greenHoverColor: "#36a84d",
                yellowColor: "#FFD363",
                toTalTableColor: "#F8FAFD",
                blueColor: "#2980FF",
                blueHoverColor: "#216edf",
                defaultColor: "#293046",
            }
        },
    },

    plugins: [forms],
};
