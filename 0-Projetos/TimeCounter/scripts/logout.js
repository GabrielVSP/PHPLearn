const logoutBtn = document.querySelector("#logout")
const base = document.querySelector("base")

logoutBtn.addEventListener("click", () => {

    var xmlhttp

    if (window.XMLHttpRequest) {

        xmlhttp = new XMLHttpRequest()

    }else {

        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")

    }

    xmlhttp.onreadystatechange = () => {

        if(xmlhttp.readyState === 4 && xmlhttp.status === 200) {

            location.href = base.href

        }

    }

    xmlhttp.open("GET", "inc/logout.php")
    xmlhttp.send()

})