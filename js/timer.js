let hr = 0;
let min = 0;
let sec = 0;
let t;
let start_img = document.getElementById("start");
let stop_img = document.getElementById("stop");
let reset_img = document.getElementById("reset");

function startTimer() {
    if (sec < 59) {
        sec++;
        document.getElementById('sec').innerHTML = print(sec);
    } else {
        sec = 0;
        min++;
        document.getElementById('sec').innerHTML = print(sec);
    }
    if (min <= 59) {
        document.getElementById('min').innerHTML = print(min);
    } else {
        min = 0;
        hr++
        document.getElementById('min').innerHTML = print(min);
    }
    if (hr < 24) {
        document.getElementById('hr').innerHTML = print(hr);
    } else {
        stop();
    }
}

function print(val) {
    if (val <= 9) {
        return '0' + val;
    } else {
        return val
    }
}

function start() {
    t = setInterval(startTimer, 1000);
    document.getElementById('start').disabled = true;

    start_img.src = "image/start_on.svg";
    stop_img.src = "image/stop_off.svg";
}

//stop 
function stop() {
    clearInterval(t);
    document.getElementById('start').disabled = false;

    start_img.src = "image/start_off.svg";
    stop_img.src = "image/stop_on.svg";
}

//reset
function reset() {
    clearInterval(t);
    min = 0;
    sec = 0;
    hr = 0;
    document.getElementById('sec').innerHTML = '00';
    document.getElementById('min').innerHTML = '00';
    document.getElementById('hr').innerHTML = '00';

    start_img.src = "image/start_off.svg";
    stop_img.src = "image/stop_off.svg";

}