$(function(){

    $('body').on('submit', 'form', function(){

        var form = $(this)

        $.ajax({

            beforeSend:function(){

                $('.overlayLoad').fadeIn()

            },

            url: include_path + "ajax/forms.php",
            method: 'post',
            dataType: 'json',
            data: form.serialize()

        }).done(function(data){

            if(data.success)
            {

                console.log("Email enviado com sucesso")

                setTimeout(() => {
                    $('.success').slideToggle()
                }, 2000);

                setTimeout(() => {
                    $('.success').slideToggle()
                }, 4000);
            }
            else
            {

                console.log("Email não foi enviado")

                setTimeout(() => {
                    $('.error').slideToggle()
                }, 2000);

                setTimeout(() => {
                    $('.error').slideToggle()
                }, 4000);

            }

            $('.overlayLoad').fadeOut(2000)

        })

        return false

    })

})