const { forEach } = require("lodash");

const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function() {
    nav.classList.toggle('slide')
});

const studyProgress = document.getElementsByClassName('.study-cards-progress');
const studyPercentageValue = document.getElementsByClassName('.study-class-percentage');
const studyPercentageLength = document.getElementsByClassName('.study-class-percentage').length;

for (let i = 0; i <= studyPercentageLength; i++) {
    if (parseFloat(studyPercentageValue[i].innerText) >= 8.0) {
        studyProgress[i].classList.add('study-cards-progress-finished');
    }
}
