/*jshint esversion: 6 */

let count = 0;
let rAF_ID;

var rAFCallback = function(callback) {
    let count = callback;

    let ms = Math.floor(count % 1000);
    let s = Math.floor(count / 1000) % 60;
    let m = Math.floor(count / 60000) % 60;

    let time = m + ":" + s + ":" + ms;

    // Storing time in sessions.
    sessionStorage.setItem("time", time);


    $("#timer").text(m + ":" + s + ":" + ms);
    rAF_ID = requestAnimationFrame(rAFCallback);
};

// request animation frame on render
rAF_ID = requestAnimationFrame(rAFCallback);