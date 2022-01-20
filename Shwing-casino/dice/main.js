var slider = document.getElementById("slider");
var selector = document.getElementById("selector");
var SelectValue = document.getElementById("SelectValue");
var ProgressBar = document.getElementById("ProgressBar");
const playBtn = document.querySelector("button");
var slumptal = 0;
var gissning = 0;

SelectValue.innerHTML = slider.value;

slider.oninput = function() {
    SelectValue.innerHTML = this.value;
    gissning = parseInt(SelectValue.innerHTML);
    selector.style.left = this.value + "%";
    ProgressBar.style.width = this.value + "%";
}

playBtn.addEventListener("click", function () {
    slumptal = Math.ceil(Math.random() *100);
    console.log(slumptal);

    if (slumptal <gissning) {
        alert ("Vinst");
    } else {
        alert ("Torsk");
    }
})
