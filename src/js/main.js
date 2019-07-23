var mobileNavigationButton = document.getElementById("main-navigation__mobile-open-button");
var mobileNavigationDownArrow = document.getElementById("main-navigation__mobile-down-arrow");
var mobileNavigationUpArrow = document.getElementById("main-navigation__mobile-up-arrow");
var mobileNavigationList = document.getElementById("main-navigation__list");

mobileNavigationButton.addEventListener('click', function () {
    mobileNavigationUpArrow.classList.toggle("main-navigation__button_hidden");
    mobileNavigationDownArrow.classList.toggle("main-navigation__button_hidden");
    mobileNavigationList.classList.toggle("main-navigation__list_hidden");
});


var sidebarOpenLoginFormButton = document.getElementById("sidebar-login__login-button");
var headerOpenLoginFormButton = document.getElementById("header-login__login-button");
var closeLoginFormButton = document.getElementById("login-form__close-button");
var sectionLoginForCommentButton = document.getElementById("section__login-for-comment");
var loginForm = document.getElementById("login-form-container");

sidebarOpenLoginFormButton.addEventListener('click', function () {
    loginForm.classList.remove("full-screen-form-container_hidden");
});

closeLoginFormButton.addEventListener('click', function () {
    loginForm.classList.add("full-screen-form-container_hidden");
});

headerOpenLoginFormButton.addEventListener('click', function () {
    loginForm.classList.remove("full-screen-form-container_hidden");
});

if (sectionLoginForCommentButton) {
    sectionLoginForCommentButton.addEventListener('click', function () {
        loginForm.classList.remove("full-screen-form-container_hidden");
    });
}


var sidebarOpenRegistrationFormButton = document.getElementById("sidebar-login__registartion-button");
var headerOpenRegistrationFormButton = document.getElementById("header-login__registration-button");
var closeRegistrationFormButton = document.getElementById("registration-form__close-button");
var sectionRegisterForCommentButton = document.getElementById("section__register-for-comment");
var registrationForm = document.getElementById("registration-form-container");

sidebarOpenRegistrationFormButton.addEventListener('click', function () {
    registrationForm.classList.remove("full-screen-form-container_hidden");
});

headerOpenRegistrationFormButton.addEventListener('click', function () {
    registrationForm.classList.remove("full-screen-form-container_hidden");
});

closeRegistrationFormButton.addEventListener('click', function () {
    registrationForm.classList.add("full-screen-form-container_hidden");
});

if (sectionRegisterForCommentButton) {
    sectionRegisterForCommentButton.addEventListener('click', function () {
        registrationForm.classList.remove("full-screen-form-container_hidden");
    });
}