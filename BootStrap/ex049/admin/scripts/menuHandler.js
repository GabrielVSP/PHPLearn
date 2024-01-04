const menuButtons = document.querySelectorAll('a.menuBtn')
const utilities = document.querySelectorAll('.marker')
const mobileButton = document.querySelector('.navbar-toggler')

menuButtons.forEach(element => {
    
    element.addEventListener('click', (event) => {

        event.preventDefault()

        if(element !== null || element !== undefined) {

            element.classList.add('active')

            menuButtons.forEach(btn => {

                if (btn.innerText === element.innerText) {
                    btn.classList.add('active')
                }else {
                    btn.classList.remove('active')
                }

            })

            utilities.forEach(utility => {
                
                if(utility.classList.contains(element.innerText)) {

                    utility.scrollIntoView()

                    /*window.scroll({
                        top: pos.top + window.screenY,
                        behavior: 'smooth'
                    })*/

                }

            })

            if(mobileButton.getAttribute('aria-expanded') === 'true') {
                console.log(123123)
                mobileButton.click()
            }

            //mobileButton.click()

        }
    
    })

});
