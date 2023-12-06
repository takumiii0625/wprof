import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


window.toggleMenu = function () {
    var hamburger = document.querySelector('.hamburger-menu');
    hamburger.classList.toggle('change');

    var navigation = document.querySelector('.navigation ul');
    navigation.classList.toggle('show');
};

document.addEventListener("scroll", function () {
    var elements = document.querySelectorAll('.slide-in');
    var windowHeight = window.innerHeight;

    elements.forEach(function (element) {
        var elementPosition = element.getBoundingClientRect().top;

        if (elementPosition < windowHeight) {
            element.style.opacity = '1';
            element.style.transform = 'translateX(0)';
        }
    });
});
document.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.fadeInZoom');
    var windowHeight = window.innerHeight;

    elements.forEach(function (element) {
        var elementPosition = element.getBoundingClientRect().top;

        if (elementPosition < windowHeight) {
            element.classList.add('visible');
        }
    });
});
document.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.mask-bg');
    var windowHeight = window.innerHeight;

    elements.forEach(function (element) {
        var elementPosition = element.getBoundingClientRect().top;

        if (elementPosition < windowHeight) {
            element.classList.add('is-animated');
        }
    });
});
document.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.anim');
    var windowHeight = window.innerHeight;

    elements.forEach(function (element) {
        var elementPosition = element.getBoundingClientRect().top;

        if (elementPosition < windowHeight) {
            element.classList.add('is-animated');
        }
    });
}); document.addEventListener('DOMContentLoaded', function () {
    var elements = document.querySelectorAll('.fadeInZooma');

    elements.forEach(function (element) {
        element.classList.add('is-animated');
    });
});
