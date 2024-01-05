const buttons = document.querySelectorAll("button.delete")
const base = document.querySelector("base")

buttons.forEach((btn) => {

    btn.addEventListener('click', (e) => {

        var xmlhttp;

        if(window.XMLHttpRequest) {

            xmlhttp = new XMLHttpRequest()

        }else {

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")

        }

        xmlhttp.onreadystatechange = () => {

            if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
               console.log(xmlhttp)
               location.href = base.href
            }

        }

        xmlhttp.open("GET", "inc/delete.php?id="+e.target.id)
        xmlhttp.send()


    })

})


