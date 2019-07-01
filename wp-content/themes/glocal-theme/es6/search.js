import {$, w} from './constants';

$(document).ready(function() {

	// S E A R C H
    var $searchlink = $('#header__icon__JS');
    var $searchbar  = $('#header__searchbar__JS');
    var $navbar  = $('#header__navbar__JS');

    $searchlink.on('click', function(e){
        e.preventDefault();
        if($(this).attr('id') == 'header__icon__JS') {
            if(!$searchbar.is(":visible")) { 
                $searchlink.removeClass('open').addClass('close');
            } else {
                $searchlink.removeClass('close').addClass('open');
            } 
            $searchbar.slideToggle(500, function(){
            });
        }
    });
});