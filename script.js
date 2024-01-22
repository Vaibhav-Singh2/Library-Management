const currentTheme = localStorage.getItem("userTheme");
if (currentTheme == "dark-theme") {
    const root = document.documentElement;
    root.setAttribute('data-theme', 'dark')
    const icon = document.querySelector(".theme-btn img");
    icon.src = "./assets/dark-theme.svg";
}

// If user try to change theme
const changeTheme = document.querySelector(".theme-btn");
changeTheme.addEventListener("click", () => {
    const userTheme = localStorage.getItem("userTheme");
if (userTheme == "dark-theme") {
    const root = document.documentElement;
    root.setAttribute('data-theme', 'light')

    const icon = document.querySelector(".theme-btn img");
    icon.src = "./assets/light-theme.svg";
    localStorage.setItem("userTheme", "light-theme");
}
else {
    const root = document.documentElement;
        root.setAttribute('data-theme', 'dark')
        const icon = document.querySelector(".theme-btn img");
        icon.src = "./assets/dark-theme.svg";
        localStorage.setItem("userTheme", "dark-theme");
    }
}
);

document.addEventListener('DOMContentLoaded', () => {
    // For Hamburger functunality
    let hamburger = document.querySelector("#hamburger");
    hamburger.addEventListener("click", () => {
        let divider = document.querySelector(".divider").classList;
        divider.toggle("remove-sidebar");
    }
    );
}
)

