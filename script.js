'USE STRICT';

/* DOM selectors */
const backBtn = document.getElementById('back');

const aboutTab = document.querySelector('.aboutTab');
const aboutText = document.querySelector('.aboutText');

const adoptTab = document.querySelector('.adoptTab');
const adoptText = document.querySelector('.adoptText');

const donateTab = document.querySelector('.donateTab');
const donateText = document.querySelector('.donateText');

const contactTab = document.querySelector('.contactTab');
const contactText = document.querySelector('.contactText');

/* Event listeners */
aboutText.addEventListener('click', function () {
    aboutTab.classList.toggle('activeTab');
    this.classList.toggle('activeText');
})

adoptText.addEventListener('click', function () {
    adoptTab.classList.toggle('activeTab');
    this.classList.toggle('activeText');
})

donateText.addEventListener('click', function () {
    donateTab.classList.toggle('activeTab');
    this.classList.toggle('activeText');
})

contactText.addEventListener('click', function () {
    contactTab.classList.toggle('activeTab');
    this.classList.toggle('activeText');
})

