const actionBtn = document.getElementsByClassName("deleteBtn")

for (var i = 0; i < actionBtn.length; i++) {
     
     actionBtn[i].addEventListener('click', confirmDelete)

     function confirmDelete(event) {

          event.preventDefault()

          var res = confirm("Tem certeza?")
      
          if(res) {
           window.location.href = this.getAttribute('href');
          }
      
      }

}




$(function(){

   var open = true;
   var windowSize = $(window)[0].innerWidth

   var targetSize = (windowSize < 580) ? 200 : 250

   const sidebarSize = 250

   if (windowSize <= 768)
   {

        $('.sidebar').css({'width':'0', 'padding':'0'})
        open = false;

   }

   $('.menuBtn').click(function(){

       if(open) {

            $('.sidebar').animate({'width':'0', 'padding':'0'})
            $('header, main').animate({'width':'100%', 'left':'0'})
           // $('main').animate({'width':'100%', 'left':'0'})
            //$('header .center').animate({'max-width':'99%'})

            open = false

       }
       else
       {

            $('.sidebar').css('display', 'block')

            $('.sidebar').animate({'width':targetSize+'px', 'padding':'10px 0'})
            $('header, main').css('width', 'calc(100% - '+targetSize+'px)')
            $('header, main').animate({'left':targetSize+'px'})
           // $('main').animate({'width':'calc(100% - 250px)', 'left':`${sidebarSize}`})
           // $('header .center').animate({'max-width':'1200px'})

            open = true

       }

   })

  $(window).resize(function(){

     windowSize = $(window)[0].innerWidth

     if(windowSize <= 768) {

          $('.sidebar').animate({'width':'0px', 'padding':'0'})
          $('header, main').css({'width':'100%', 'left':'0'})
          open = false

     }
     else
     {

          $('.sidebar').animate({'width':targetSize+'px', 'padding':'10px 0'})
          $('header, main').css({'width':'calc(100% - '+targetSize+'px)', 'left':targetSize+'px'})

     }

   })

})


