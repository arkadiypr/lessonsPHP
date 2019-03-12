"use strict";
//alert('Hello, world');
//alert('Hello');// comment 1
// console.log('Hello, console');

/*
comment 2
 */
// var messageP;
// var count = 2;
// var message1 = 'fff', label, message2 = 'kkk';
//
//
// messageP = 'Текс сообщения';


/*
var num1, num2, result;

num1 = +prompt('Введите первое число, 0');
num2 = +prompt('Введите второе число, 0');

result = num1 + num2;

alert('Результат сложения: ' + result);*/

/*var name = prompt('Каково официальное название JavaScript?');

if (name === 'ECMAScript') {
    alert('Верно');
} else {
    alert('Не знаете? ECMAScript!');
}*/

/*let number = prompt('Введите число');

if (number > 0) {
    alert('1');
} else if (number < 0) {
    alert('-1');
} else {
    alert('0');
}*/

// Проверка входа

/*let login = prompt('Введите логин');
let password;*/

//Через if

/*if (login === 'Админ') {
    password = prompt('Введите пароль');
    if (password === 'Черный Властелин') {
        alert('Добро пожаловать!');
    } else if (password === null) {
        alert('Вход отменен');
    } else {
        alert('Пароль неверен');
    }
} else if (login === null) {
    alert('Вход отменен');
} else {
    alert('Я вас не знаю');
}*/

// Через switch

/*switch (login) {
    case 'Админ':
        password = prompt('Введите пароль');

        switch (password) {
            case 'Черный Властелин':
                alert('Добро пожаловать!');
                break;
            case null:
                alert('Вход отменен');
                break;
            default:
                alert('Пароль неверен');
        }

        break;
    case null:
        alert('Вход отменен');
        break;
    default:
        alert('Я вас не знаю');
}*/

// Перепишите if с использованием оператора '?':

var a = 1, b = 8;

var result = (a + b < 4) ? 'Мало' : 'Много';
alert(result);