import 'bootstrap/scss/bootstrap.scss'
import './styles/scss/main.scss'
import 'owl.carousel/dist/assets/owl.carousel.css'
import 'owl.carousel'
import 'jquery/dist/jquery'

import { gsap } from "gsap";
import { CSSRulePlugin } from "gsap/CSSRulePlugin";
import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";


gsap.registerPlugin(CSSRulePlugin, TextPlugin, ScrollTrigger);

import { TimelineMax } from 'gsap';

const tl = new TimelineMax();
const tlScrolling1 = gsap.timeline({scrollTrigger: {
        trigger: '#sectionAbout',
        start: '-100px center',
        end: 'center center',
        markers: false
    }});
const tlScrolling2 = gsap.timeline({scrollTrigger: {
        trigger: '#sectionSkills',
        start: '-300px center',
        end: 'center center',
        markers: true
    }});
const tlScrolling3 = gsap.timeline({scrollTrigger: {
        trigger: '#sectionWorks',
        start: '-200px center',
        end: 'center center',
        markers: true
    }});
const tlScrolling4 = gsap.timeline({scrollTrigger: {
        trigger: '#sectionExperience',
        start: '-300px center',
        end: 'center center',
        markers: true
    }});
const tlScrolling5 = gsap.timeline({scrollTrigger: {
        trigger: '#sectionContact',
        start: '-200px center',
        end: 'center center',
        markers: true
    }});
import { startAnimation, aboutAnimation,
    skillsAnimation, worksAnimation,
    contactsAnimation, experienceAnimation } from './js/gsapAnimation'


window.onload = function () {
    const preloader = document.querySelector('.preloader');
    preloader.classList.add('preloader-animation');

    setTimeout(() => {
        preloader.classList.remove('preloader-animation');
        preloader.classList.add('preloader-hidden');
    }, 3000);
    setTimeout(() => {
        preloader.classList.add('preloader-none');
        startAnimation(tl);
        aboutAnimation(tlScrolling1);
        skillsAnimation(tlScrolling2);
        worksAnimation(tlScrolling3);
        experienceAnimation(tlScrolling4);
        contactsAnimation(tlScrolling5);
    }, 3200);
};

window.addEventListener("scroll", () => {
    document.querySelector('.header').classList.toggle("sticky", window.scrollY > 0);
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true, //Зацикливаем слайдер
        margin: 10, //Отступ от картино если выводите больше 1
        nav: true, //Отключил навигацию
        autoplay: true, //Автозапуск слайдера
        smartSpeed: 2000, //Время движения слайда
        autoplayTimeout: 3000, //Время смены слайда
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});