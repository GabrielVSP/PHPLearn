$(function(){

    var cur = -1
    var timer;

    const max = $(".habsBox").length - 1
    const animdelay = 2

    $('.habsBox').hide()

    doAnim()

    function doAnim()
    {

        timer = setInterval(() => {
            
            logicAnim()

        }, animdelay * 1000);

        function logicAnim() {

            cur++

            if (cur > max)
            {

                clearInterval(timer)
                return false

            }

            $('.habsBox').eq(cur).fadeIn()

        }

    }

})