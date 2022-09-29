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
                brown: {
                    100: "#FFEDD5",
                    900: "#FED7AA",
                },
                coffee: "#995000"
            }
        },
    },
    plugins: [],
}
