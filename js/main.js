var mobileNavigationButton=document.getElementById("main-navigation__mobile-open-button"),mobileNavigationDownArrow=document.getElementById("main-navigation__mobile-down-arrow"),mobileNavigationUpArrow=document.getElementById("main-navigation__mobile-up-arrow"),mobileNavigationList=document.getElementById("main-navigation__list");mobileNavigationButton.addEventListener("click",function(){mobileNavigationUpArrow.classList.toggle("main-navigation__button_hidden"),mobileNavigationDownArrow.classList.toggle("main-navigation__button_hidden"),mobileNavigationList.classList.toggle("main-navigation__list_hidden")});