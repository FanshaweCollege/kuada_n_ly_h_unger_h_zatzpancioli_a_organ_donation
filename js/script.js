(function () {
    'use strict';

    let 
        btButton        = document.querySelector('.back-top'),
        animatedObject  = document.querySelectorAll('.js-animation'),
        animatedObject2  = document.querySelectorAll('.js-animation2'),
        animatedObject3  = document.querySelectorAll('.js-animation3'),
        windowHeight    = window.innerHeight;


    window.addEventListener('scroll', function () {
        let offset    = 800,
            scrollpos = window.scrollY;

        if (scrollpos > offset) {
            btButton.classList.add('visible');
        } else {
            btButton.classList.remove('visible');
        }
    });

    animatedObject.forEach(el => {
        window.addEventListener('scroll', function () {
            let posTop = el.getBoundingClientRect().top;
            if (posTop - windowHeight <= 0) {
                el.className = el.className.replace('js-animation', 'fade-in');
            }
        });
    });


})();