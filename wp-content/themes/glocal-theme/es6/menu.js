import {$, w} from './constants';

$(document).ready(function() {


     const sticky = $('.section-one');
     const sticky_category = $('.section-category');
     const header = $('#header');
     var stickyHeight;
     var headerHeight;

     function loadSticky() {
          stickyHeight = sticky.height();
          // console.log(stickyHeight);
          headerHeight = header.height();

     }

     loadSticky();

     w.resize(function() {
          loadSticky();
     })

     w.scroll(function() {

          makeSticky();
          makeStickyCatergory();

     })

     function makeSticky() {

          if (sticky.lenght != 0) {

               if (w.scrollTop() > (stickyHeight + 57)) {
                    header.addClass('menu-fixed');
               }else {
                    header.removeClass('menu-fixed');
               }

          }

     }

     function makeStickyCatergory() {
          if (sticky_category.lenght == 0) {

               if (w.scrollTop() > 70) {
                    header.addClass('menu-fixed');
               }else {
                    header.removeClass('menu-fixed');
               }

          }
     }



     var btnAbrir = $(".header__menu_JS");
     var btnCerrar = $("#menu__close_JS");
     var menu = $("#menu__JS");

     //Abrir menu lateral
     btnAbrir.on("click", function() {
     menu.addClass('view');
     btnAbrir.addClass('opacity');

     });

     //Cerrar menu lateral, dando click en button
     btnCerrar.on("click", function() {
     menu.removeClass('view');
     btnAbrir.removeClass('opacity');
     });

});
