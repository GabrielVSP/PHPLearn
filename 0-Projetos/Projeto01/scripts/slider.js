$(function(){


    var curSlide = 0;
    
    const cooldown = 3
    const maxSlide = $(".banner").length - 1

    initSlide()
    changeSlide()

    function initSlide()
    {

        $(".banner").hide()
        $(".banner").eq(0).show()

        for(var i = 0; i < maxSlide + 1; i++)
        {

            var content = $('.circles').html()
            content += '<span></span>'
            $('.circles').html(content)

        }

        $('.circles span').eq(0).addClass("activeSlider")

    }

    function changeSlide()
    {

        setInterval(() => {

            //$(".banner").eq(curSlide).fadeOut(2000)
            $(".banner").eq(curSlide).hide()
            //$('.circles span').eq(curSlide).removeClass("activeSlider")

            curSlide++

            if (curSlide > maxSlide)
            {

                curSlide = 0;
                
            }

            $(".banner").eq(curSlide).stop().fadeIn(2000, function(){
                //console.log("Animação completa")
            })

            $('.circles span').removeClass('activeSlider')
            $('.circles span').eq(curSlide).addClass("activeSlider")
            
        }, cooldown * 1000);

    }

    $('body').on('click', '.circles span', function() {

        $(".banner").eq(curSlide).hide()

        var currentCircle = $(this)
        curSlide = currentCircle.index()

        $(".banner").eq(curSlide).stop().fadeIn(1000)

        $('.circles span').removeClass('activeSlider')

        currentCircle.addClass('activeSlider')

    })

})