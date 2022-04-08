'use strict';

const erase = text => {
    return text.replace('(', '').replace(')', '');
};

const paint = (element, color) => {
    element.getElementsByTagName('p')[0].style = `color: ${color};`;
    return element;
};

const highlight = () => {
    const matches = document.body.querySelectorAll('.box__match__main');
    return matches.forEach(element => {
        const scores = element.querySelectorAll('.score');
        const b1 = scores[0]; const b2 = scores[1];
        const b1Value = Number(erase(b1.innerText));
        const b2Value = Number(erase(b2.innerText));
        if(b1Value === b2Value) return;
        if(b1Value > b2Value) return (paint(b1, '#006600'), paint(b2, '#990033'));
        return (paint(b1, '#990033'), paint(b2, '#006600'));
    });
};

document.addEventListener('DOMContentLoaded', () => {
    return highlight();
});
