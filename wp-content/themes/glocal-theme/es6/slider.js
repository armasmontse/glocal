import {$, w} from './constants';
import Swiper from 'swiper';

w.ready(() => {

	new Swiper('#swiper-home', {
		centeredSlides: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 8000,
		},
	});

	new Swiper('.swiper-three-columns', {
		slidesPerView: 3,
		slidesPerGroup: 3,
		spaceBetween: 50,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
		    480: {
		      slidesPerView: 1,
		      slidesPerGroup: 1,
		      spaceBetween: 10
		    },

		    768: {
		      slidesPerView: 2,
		      slidesPerGroup: 2,
		      spaceBetween: 30
		    }
		}
    });

    new Swiper('#single__slider', {
			spaceBetween: 0,
			pagination: {
				el: '.swiper-pagination',
					clickable: true,
				},
    });

})
