import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#eefbf3",
                    100: "#d6f5e1",
                    200: "#b0eac8",
                    300: "#7cd9a9",
                    400: "#46c185",
                    500: "#23a66a",
                    600: "#168555",
                    700: "#116b46",
                    800: "#11593c",
                    900: "#0e4630",
                    950: "#07271b",
                },
                secondary: {
                    100: "##ff9c3c",
                    200: "#ff9022",
                    300: "#ff8308",
                    400: "#ee7600",
                    500: "#d56900",
                    600: "#bb5d00",
                    700: "#a25000",
                    800: "#5f2f00",
                    900: "#472300",
                },
            },
        },
    },
};
