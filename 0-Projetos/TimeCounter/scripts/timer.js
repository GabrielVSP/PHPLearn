const initBtn = document.querySelector("button.init")
const endBtn = document.querySelector("button.end")
const timer = document.querySelector(".timer")

let debounce = false
let interval

let seconds = 0
let minutes = 0
let hours = 0

initBtn.addEventListener("click", init)
endBtn.addEventListener("click", end)

function init() {

    debounce = true

    endBtn.removeAttribute("disabled")

    interval = setInterval(() => {
        
        if(seconds == 60) {

            seconds = 0
            minutes += 1

        }

        if (minutes == 60) {

            minutes = 0
            hours += 1

        }

        seconds += 60

        let sample = `${hours.toString.length == 1 ? "0"+hours : hours}:${minutes.toString().length == 1 ? "0"+minutes : minutes}:${seconds.toString().length == 1 ? "0"+seconds : seconds}`

        timer.innerText = sample

    }, 1000);

    

}

function end() {

    debounce = false

    endBtn.setAttribute("disabled", "")
    clearInterval(interval)


}
