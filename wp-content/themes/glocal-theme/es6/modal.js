import {$, w} from './constants';
import Swiper from 'swiper';

w.load(() => {

	$('.slider').slick({
        dots: true,
        arrows: false
    });

	const close = $(".modal-closer");
    const item  = $(".modal-opener");

    // Abre un modal en especifico.
    function openModal(modal, index){
        
        $('#' + modal).addClass('open');
        $('.slider').slick('setPosition', 0);
        $('.slider').slick('slickGoTo', index);
    }
    
    // Cierra todos los modales.
    function closeModal(){
        $('.modal').removeClass('open');
        $('body').removeClass("modal-open");
    }

    // Event handler para abrir el modal.
    item.click(function() {

        let index = $(this).data('index');
        let modal = $(this).data('modal');

        openModal(modal, index);
    });

    // Event handler para cerrar el modal
	close.click(function() {

        closeModal();
    });

});
