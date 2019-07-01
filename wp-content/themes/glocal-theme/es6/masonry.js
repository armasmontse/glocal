import {$, w} from './constants';
import Masonry from 'masonry-layout';

w.load(() => {

	const masonry = document.querySelectorAll('.masonry');

	if(masonry) {
		masonry.forEach(element => {
			new Masonry(element, {
				itemSelector: '.masonry-item',
				columnWidth: '.masonry-sizer',
				percentPosition: true
			});
		});
	}

});