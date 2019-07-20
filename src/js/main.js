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
var sectionLoginForCommentButton = document.getElementById("section__login-for-commetn");
var loginForm = document.getElementById("login-form-container");

sidebarOpenLoginFormButton.addEventListener('click', function () {
    loginForm.classList.remove('login-form-container_hidden');
});

closeLoginFormButton.addEventListener('click', function () {
    loginForm.classList.add("login-form-container_hidden");
});

headerOpenLoginFormButton.addEventListener('click', function () {
    loginForm.classList.remove("login-form-container_hidden");
});

sectionLoginForCommentButton.addEventListener('click', function () {
    loginForm.classList.remove("login-form-container_hidden");
});