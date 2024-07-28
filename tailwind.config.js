import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        darkMode: "media",
        extend: {
            colors: {
                primary: {
                    50: "#fff1f2",
                    100: "#ffe4e6",
                    200: "#fdced3",
                    300: "#fca5b1",
                    400: "#f97387",
                    500: "#f24161",
                    600: "#df1f4b",
                    700: "#bc143f",
                    800: "#9d143b",
                    900: "#871438",
                    950: "#340412",
                },
            },
            fontFamily: {
                body: ["Roboto"],
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography, require("flowbite/plugin")],
};
