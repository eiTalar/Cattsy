'USE STRICT';

/* DOM selectors */
const backBtn = document.getElementById('back');

const upTab = document.querySelector('.upTab');
const upText = document.querySelector('.upText');

const downTab = document.querySelector('.downTab');
const downText = document.querySelector('.downText');

const leftTab = document.querySelector('.leftTab');
const leftText = document.querySelector('.leftText');

const rightTab = document.querySelector('.rightTab');
const rightText = document.querySelector('.rightText');

/* Event listeners */
upText.addEventListener('click', () => {
    upTab.classList.toggle('activeElement');
})

downText.addEventListener('click', () => {
    downTab.classList.toggle('activeElement');
})

leftText.addEventListener('click', () => {
    leftTab.classList.toggle('activeElement');
})

rightText.addEventListener('click', () => {
    rightTab.classList.toggle('activeElement');
})

