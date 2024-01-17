const initBtn = document.querySelector("button.init")
const endBtn = document.querySelector("button.end")
const pauseBtn = document.querySelector("button.pause")

const timer = document.querySelector(".timer")
const timerInput = document.querySelector("input#timerName")
const timerName = document.querySelector(".timerName")

let interval
let time = {
    init,
    end
}

let seconds = 0
let minutes = 0
let hours = 0

initBtn.addEventListener("click", init)
endBtn.addEventListener("click", end)

pauseBtn.addEventListener("click", (e) => {

    let state = e.target.attributes.state.value

    switch (state) {

        case "pause":

            pauseBtn.innerText = "Resume"
            pauseBtn.setAttribute("state", "resume")

            clearInterval(interval)
            break
        case "resume":
            
            pauseBtn.innerText = "Pause"
            pauseBtn.setAttribute("state", "pause")

            init("continue")
            break

    }

})

function init(status) {

    if (status !== "continue") {

        const date = new Date()
        time.init = date.toLocaleTimeString()

    }

    timerName.innerText = timerInput.value

    endBtn.removeAttribute("disabled")
    pauseBtn.removeAttribute("disabled")
    initBtn.setAttribute("disabled", "")

    interval = setInterval(() => {
        
        seconds += 1

        if(seconds == 59) {

            seconds = 0
            minutes += 1

        }

        if (minutes == 59) {

            minutes = 0
            hours += 1

        }

        let sample = `${hours.toString.length == 1 ? "0"+hours : hours}:${minutes.toString().length == 1 ? "0"+minutes : minutes}:${seconds.toString().length == 1 ? "0"+seconds : seconds}`

        timer.innerText = sample

    }, 1000);

    

}

function end() {

    var answer = confirm("Are you sure? The timer will reset")

    if (answer) {

        const date = new Date()
        time.end = date.toLocaleTimeString()

        endBtn.setAttribute("disabled", "")
        pauseBtn.setAttribute("disabled", "")
        initBtn.removeAttribute("disabled")
        
        clearInterval(interval)

        const data = [
            {
                init: time.init,
                end: time.end,
                name: timerName.innerText,
                duration: {
                    hours,
                    minutes,
                    seconds
                }
            }
        ]

        seconds = 0
        minutes = 0
        hours = 0

        sendXML(data)

    }

}

function sendXML(data) {

    var xmlhttp

    if (window.XMLHttpRequest) {

        xmlhttp = new XMLHttpRequest()

    }else {

        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")

    }

    xmlhttp.onreadystatechange = () => {

        if(xmlhttp.readyState === 4 && xmlhttp.status === 200) {

            console.log(xmlhttp)

        }

    }

    xmlhttp.open("GET", "inc/timerAdd.php?data="+JSON.stringify(data))
    xmlhttp.send()

}

