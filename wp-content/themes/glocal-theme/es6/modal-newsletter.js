import {$, w} from './constants';

w.load(() => {

    const close = $(".modal-newsletter__close_JS");
    const abrirModal  = $('a[href*="#newsletter"]');
    const modal_newsletter = $('.modal-newsletter__JS');
    let open = false;

    function openModal(){
        open = true;
        modal_newsletter.addClass('showModalNewsletter');
    }

    function closeModal(){
        open = false;
        modal_newsletter.removeClass('showModalNewsletter');
    }

    abrirModal.click(function(e) {
        $('#menu__JS').removeClass('view');
        //Se ocupa para esconder #newsletter al dar click
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            e.preventDefault();
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        }
        openModal();

    });

    close.click(function() {
        closeModal();
    });

    // const abrirModal  = $('a[href=#newsletter]');
    // function abrirModal() {
    //     $(html).appendTo('body').modal();
    // }

});
