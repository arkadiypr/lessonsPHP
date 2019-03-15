"use strict";

let operand1Element = document.getElementById('op1');
let operand2Element = document.getElementById('op2');
let signElement = document.getElementById('sign');
let resultElement = document.getElementById('result');
let buttons = document.querySelectorAll('.operator');

buttons.forEach(function (button) {

    button.addEventListener('click', function () {
        let operand1 = +operand1Element.value;
        let operand2 = +operand2Element.value;
        let result;

        switch (this.innerHTML) {
            case '+':
                result = operand1 + operand2;
                break;
            case '-':
                result = operand1 - operand2;
                break;
            case '*':
                result = operand1 * operand2;
                break;
            case '/':
                result = operand1 / operand2;
                break;

        }

        signElement.innerHTML = this.innerHTML;
        resultElement.innerHTML = result;
    })

});