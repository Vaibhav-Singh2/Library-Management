document.addEventListener('DOMContentLoaded', () => {

    const currentTheme = localStorage.getItem("userTheme");
    if (currentTheme == "dark-theme") {
        const root = document.documentElement;
        root.style.setProperty('--bg-color-1', '#352F44');
        root.style.setProperty('--bg-color-2', '#5C5470');
        root.style.setProperty('--bg-color-3', '#B9B4C7');
        root.style.setProperty('--bg-color-4', '#FAF0E6');
        const icon = document.querySelector(".theme-btn img");
        icon.src = "./assets/dark-theme.svg";
    }

    // If user try to change theme
    const changeTheme = document.querySelector(".theme-btn");
    changeTheme.addEventListener("click", () => {
        const userTheme = localStorage.getItem("userTheme");
        if (userTheme == "dark-theme") {
            const root = document.documentElement;
            root.style.setProperty('--bg-color-1', '#9681EB');
            root.style.setProperty('--bg-color-2', '#45CFDD');
            root.style.setProperty('--bg-color-3', '#A7EDE7');
            root.style.setProperty('--bg-color-4', '#0000EE');
            const icon = document.querySelector(".theme-btn img");
            icon.src = "./assets/light-theme.svg";
            localStorage.setItem("userTheme", "light-theme");
        }
        else {
            const root = document.documentElement;
            root.style.setProperty('--bg-color-1', '#352F44');
            root.style.setProperty('--bg-color-2', '#5C5470');
            root.style.setProperty('--bg-color-3', '#B9B4C7');
            root.style.setProperty('--bg-color-4', '#FAF0E6');
            const icon = document.querySelector(".theme-btn img");
            icon.src = "./assets/dark-theme.svg";
            localStorage.setItem("userTheme", "dark-theme");
        }
    }
    );


    // For Hamburger functunality
    let hamburger = document.querySelector("#hamburger");
    hamburger.addEventListener("click", () => {
        let divider = document.querySelector(".divider").classList;
        divider.toggle("remove-sidebar");
    }
    );
}
)

