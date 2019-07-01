import {$, w} from './constants'

var controller = new ScrollMagic.Controller({addIndicators: false})

const renderYoutube = function () {

    console.log('Rendering youtube.')
    
    $('div.youtube-autoplay').each(function(){

        let $this = $(this)
        let divs = $this.find('div')

        if(divs.length){
            new YT.Player(divs[0], {
                height: '360',
                width: '640',
                videoId: $this.data('video-id'),
                playerVars: { 'controls': 0, 'showinfo': 0, 'rel': 0 },
                events: {
                    'onReady': (event) => {
    
                        if ($this.data('autoplay')) {
    
                            let scene = new ScrollMagic.Scene({
                                triggerElement: this,
                                triggerHook: 1,
                                duration: $(window).innerHeight(),
                                reverse: true,
                                offset: $(this).innerHeight() / 2
                            })
                            .on("enter", () => {
                                event.target.playVideo()
                            })
                            .on('leave', () => {
                                event.target.pauseVideo()
                            })
                            .addTo(controller)
    
                        }
    
                    },
                }
            })
        }

    })

}

export {renderYoutube}