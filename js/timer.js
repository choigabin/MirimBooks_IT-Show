let hr = 0;
let min = 0;
let sec = 0;
let t;  

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

let start_icon = document.getElementById('start_off');
let start_circle = document.getElementById('start_circle');
let start_line_1 = document.getElementById('start_line_1');
let start_line_2 = document.getElementById('start_line_2');
let start_circle_in = document.getElementById('start_circle_in');
function start() {
    t = setInterval(startTimer, 1000);
    document.getElementById('start').disabled = true;
    start_circle.style.stroke = "transparent";
    start_circle_in.style.fill = "#386138";
    start_line_1.style.stroke = "#fff";
    start_line_2.style.stroke = "#fff";
}

let stop_icon = document.getElementById('stop_off');
let stop_circle = document.getElementById('stop_circle');
let stop_square = document.getElementById('stop_square');
let stop_circle_in = document.getElementById('stop_circle_in');
function stop() {
    clearInterval(t);
    document.getElementById('start').disabled = false;
    stop_circle.style.stroke = "transparent";
    stop_circle_in.style.fill = "#386138";
    stop_square.style.fill = "#fff";
}

let reset_icon = document.getElementById('reset_off');
let reset_circle = document.getElementById('reset_circle');
let reset_square = document.getElementById('reset_square');
let reset_circle_in = document.getElementById('reset_circle_in');
let reset_in_1 = document.getElementById('reset_in_1');
let reset_in_2 = document.getElementById('reset_in_2');
let reset_in_3 = document.getElementById('reset_in_3');
function reset() {
    clearInterval(t);
    min = 0;
    sec = 0;
    hr = 0;
    document.getElementById('sec').innerHTML = '00';
    document.getElementById('min').innerHTML = '00';
    document.getElementById('hr').innerHTML = '00';
    reset_circle.style.stroke = "transparent";
    reset_circle_in.style.fill = "#386138";
    reset_in_1.style.stroke = "#fff";
    reset_in_2.style.stroke = "#fff";
    reset_in_3.style.fill = "#fff";

}