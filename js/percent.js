"use strict";

window.onload = function() {
let btnw = document.getElementById('write');
let btnc = document.getElementById('confirm');
let text = document.getElementById('input-text');
let p = document.getElementById('confirm-text');
let submit = document.getElementById('save');
let iconw = document.getElementById('Icon_awesome-pencil-alt');
let iconc = document.getElementById('Icon_feather-check-circle');
let path20 = document.getElementById('패스_20');
let path21 = document.getElementById('패스_21');


    btnw.onclick = function() {
        p.style.display = 'none';
        text.style.display = 'block';
        btnc.style.backgroundColor = '#E6E6E6';
        btnw.style.backgroundColor = '#F7F7F7';
        btnw.style.boxShadow = "4px -1px 3px #707070";
        btnc.style.boxShadow = "4px 1px 3px #707070 inset";
        submit.style.display = 'inline';
        iconw.style.fill = "#386138";
        path20.style.stroke = "#000";
        path21.style.stroke = "#000";
        iconc.style.opacity = "0.1";
    }
    btnc.onclick = function() {
        text.style.display = 'none';
        p.style.display = 'block';
        btnw.style.backgroundColor = '#E6E6E6';
        btnc.style.backgroundColor = '#F7F7F7';
        btnc.style.boxShadow = "4px 1px 3px #707070";
        btnw.style.boxShadow = "4px -1px 3px #707070 inset";
        submit.style.display = 'none';
        iconw.style.fill = "#CDCDCD";
        path20.style.stroke = "#386138";
        path21.style.stroke = "#386138";
        iconc.style.opacity = "1";
    }
}