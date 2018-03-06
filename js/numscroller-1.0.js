/**
* jQuery scroroller Plugin 1.0
*
* http://www.tinywall.net/
* 
* Developers: Arun David, Boobalan
* Copyright (c) 2014 
*/
(function($){
    $(window).on("load",function(){
        $(document).scrollzipInit();
        $(document).rollerInit();
    });
    $(window).on("load scroll resize", function(){
        $('.numscroller').scrollzip({
            showFunction    :   function() {
                                    numberRoller($(this).attr('data-slno'));
                                },
            wholeVisible    :     false,
        });
    });
    $.fn.scrollzipInit=function(){
        $('body').prepend("<div style='position:fixed;top:0px;left:0px;width:0;height:0;' id='scrollzipPoint'></div>" );
    };
    $.fn.rollerInit=function(){
        var i=0;
        $('.numscroller').each(function() {
            i++;
           $(this).attr('data-slno',i); 
           $(this).addClass("roller-title-number-"+i);
        });        
    };
    $.fn.scrollzip = function(options){
        var settings = $.extend({
            showFunction    : null,
            hideFunction    : null,
            showShift       : 0,
            wholeVisible    : false,
            hideShift       : 0,
        }, options);
        return this.each(function(i,obj){
            $(this).addClass('scrollzip');
            if ( $.isFunction( settings.showFunction ) ){
                if(
                    !$(this).hasClass('isShown')&&
                    ($(window).outerHeight()+$('#scrollzipPoint').offset().top-settings.showShift)>($(this).offset().top+((settings.wholeVisible)?$(this).outerHeight():0))&&
                    ($('#scrollzipPoint').offset().top+((settings.wholeVisible)?$(this).outerHeight():0))<($(this).outerHeight()+$(this).offset().top-settings.showShift)
                ){
                    $(this).addClass('isShown');
                    settings.showFunction.call( this );
                }
            }
            if ( $.isFunction( settings.hideFunction ) ){
                if(
                    $(this).hasClass('isShown')&&
                    (($(window).outerHeight()+$('#scrollzipPoint').offset().top-settings.hideShift)<($(this).offset().top+((settings.wholeVisible)?$(this).outerHeight():0))||
                    ($('#scrollzipPoint').offset().top+((settings.wholeVisible)?$(this).outerHeight():0))>($(this).outerHeight()+$(this).offset().top-settings.hideShift))
                ){
                    $(this).removeClass('isShown');
                    settings.hideFunction.call( this );
                }
            }
            return this;
        });
    };
    function numberRoller(slno){
            var min=$('.roller-title-number-'+slno).attr('data-min');
            var max=$('.roller-title-number-'+slno).attr('data-max');
            var timediff=$('.roller-title-number-'+slno).attr('data-delay');
            var increment=$('.roller-title-number-'+slno).attr('data-increment');
            var numdiff=max-min;
            var timeout=(timediff*1000)/numdiff;
            //if(numinc<10){
                //increment=Math.floor((timediff*1000)/10);
            //}//alert(increment);
            numberRoll(slno,min,max,increment,timeout);
            
    }
    function numberRoll(slno,min,max,increment,timeout){//alert(slno+"="+min+"="+max+"="+increment+"="+timeout);
        if(min<=max){
            $('.roller-title-number-'+slno).html(min);
            min=parseInt(min)+parseInt(increment);
            setTimeout(function(){numberRoll(eval(slno),eval(min),eval(max),eval(increment),eval(timeout))},timeout);
        }else{
            $('.roller-title-number-'+slno).html(max);
        }
    }
})(jQuery);


/*marquee section*/

$( document ).ready(
    function () {

        function marquee ( bar, speed, direction ) { //main marquee function

            //marquee text width
            var initWidth = $( bar + " .marquee-message" ).width();

            //initial position
            $( bar + " .marquee-message" ).css( 'margin-left', function () {
                return ( $( bar ).width() - initWidth ) / 2;
            } );

            if ( direction == 'left' ) { //from left to right
                //resetting the marquee element
                function resMarquee_left () {
                    var left = -1 * initWidth;
                    $( bar + " .marquee-message" ).css( 'margin-left', left );
                }

                //marquee function
                function marquee_left () {
                    $( bar + " .marquee-message" ).css( 'margin-left', function ( index, val ) {
                        return parseInt( val, 10 ) + speed + 'px';
                    } );

                    //reset the element if it's out of it's container
                    if ( parseInt ( $( bar + " .marquee-message" ).css( 'margin-left' ) ) > $( bar ).width() ) {
                        resMarquee_left ();
                    }

                }

                setInterval( marquee_left, 10 );

            } else { //default: from right to left
                //marquee text width
                var initWidth = $( bar + " .marquee-message" ).width();

                //initial position
                $( bar + " .marquee-message" ).css( 'margin-left', function () {
                    return ( $( bar ).width() - initWidth ) / 2;
                } );

                //resetting the marquee element
                function resMarquee_right () {
                    $( bar + " .marquee-message" ).css( 'margin-left', $( bar ).width() );
                }

                //marquee function
                function marquee_right () {
                    $( bar + " .marquee-message" ).css( 'margin-left', function ( index, val ) {
                        return parseInt( val, 10 ) - speed + 'px';
                    } );

                    //reset the element if it's out of it's container
                    if ( parseInt ( $( bar + " .marquee-message" ).css( 'margin-left' ) ) < -1 * $( bar + " .marquee-message" ).width() ) {
                        resMarquee_right ();
                    }

                }

                setInterval( marquee_right, 10 );

            }



        }


        marquee( ".marquee", 1, 'left' );
        marquee( ".marquee2", 3, 'right' );

    }
);












