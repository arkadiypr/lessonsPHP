"use strict";

//Lesson 6

// let user = {};
//
// user.name = 'Вася';
// user.surname = 'Петров';
// user.name = 'Сергей';
// delete user.name;
// console.log(user);

// Есть объект salaries с зарплатами. Напишите код, который выведет сумму всех зарплат.
// Если объект пустой, то результат должен быть 0.

// var salaries = {
//     "Вася": 100,
//     "Петя": 300,
//     "Даша": 250
// };
//
// let sum = 0;
//
// for (let name in salaries) {
//     sum += salaries[name];
// }
//
// alert(sum);

// Есть объект salaries с зарплатами. Напишите код, который выведет имя сотрудника, у которого самая большая зарплата.
// Если объект пустой, то пусть он выводит «нет сотрудников».

// var salaries = {
//     "Вася": 100,
//     "Петя": 300,
//     "Даша": 250
// };
//
// let summ = -Infinity;
// let maxName;
//
// for (let name in salaries) {
//     if (salaries[name] > summ) {
//         summ = salaries[name];
//         maxName = name;
//     }
// }
//
// if (!maxName) {
//     alert('нет сотрудников');
// } else {
//     alert(maxName);
// }

// Создайте функцию multiplyNumeric, которая получает объект и умножает все численные свойства на 2. Например:


let menu = {
        width: 200,
        height: 300,
        title: "My menu"
    };

multiplyNumeric(menu);
console.log(menu);

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n)

}
function multiplyNumeric(obj) {
    for (let prop in obj) {
        if (isNumeric(obj[prop])) {
            obj[prop] *=2;
        }
    }

}
