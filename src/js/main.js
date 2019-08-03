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

function show(element) {
    element.classList.remove("full-screen-form-container_hidden");
}

sidebarOpenLoginFormButton.addEventListener('click', function () { show(loginForm) });
headerOpenLoginFormButton.addEventListener('click', function () { show(loginForm) });
if (sectionLoginForCommentButton) {
    sectionLoginForCommentButton.addEventListener('click', function () { show(loginForm) });
}

function hide(element) {
    element.classList.add("full-screen-form-container_hidden");
}

closeLoginFormButton.addEventListener('click', function () { hide(loginForm) });


var sidebarOpenRegistrationFormButton = document.getElementById("sidebar-login__registartion-button");
var headerOpenRegistrationFormButton = document.getElementById("header-login__registration-button");
var closeRegistrationFormButton = document.getElementById("registration-form__close-button");
var sectionRegisterForCommentButton = document.getElementById("section__register-for-comment");
var registrationForm = document.getElementById("registration-form-container");

sidebarOpenRegistrationFormButton.addEventListener('click', function () { show(registrationForm) });
headerOpenRegistrationFormButton.addEventListener('click', function () { show(registrationForm) });
if (sectionRegisterForCommentButton) {
    sectionRegisterForCommentButton.addEventListener('click', function () { show(registrationForm) });
}

closeRegistrationFormButton.addEventListener('click', function () { hide(registrationForm) });


var confirmationOfRegistrationForm = document.getElementById("confirmation-of-registration-form-container");
var confirmationOfRegistrationFormCloseButton = document.getElementById("confirmation-of-registration-form__close-button");

confirmationOfRegistrationFormCloseButton.addEventListener('click', function () {hide(confirmationOfRegistrationForm)});