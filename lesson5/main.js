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

// var a = 1, b = 8;
//
// var result;
// result = (a + b < 4) ? 'Мало' : 'Много';
// alert(result);

// Перепишите код, заменив цикл for на while, без изменения поведения цикла.
//
// for (var i = 0; i < 3; i++) {
//     alert("номер " + i + "!"); // номер 0!, номер 1!, номер 2!
// }
//
// document.write("номер " + i + "!");


// var i = 0;
// while (i < 3) {
//     alert( "номер " + i + "!" ); // номер 0!, номер 1!, номер 2!
//     i++;
// }
//
// document.write( "номер " + i + "!" ); // номер 3!

/*
Напишите цикл, который предлагает prompt ввести число, большее 100. Если посетитель ввёл другое число – попросить ввести ещё раз, и так далее.

    Цикл должен спрашивать число пока либо посетитель не введёт число, большее 100, либо не нажмёт кнопку Cancel (ESC).

    Предполагается, что посетитель вводит только числа. Предусматривать обработку нечисловых строк в этой задаче необязательно.
*/

// var value = prompt('Введите число больше 100:');
//
// while (value < 100 && value != null) {
//     value = prompt('Введите число больше 100:');
// }
//
// var num;
//
// do {
//     num = prompt("Введите число больше 100?", 0);
// } while (num <= 100 && num != null);

/*
Натуральное число, большее 1, называется простым, если оно ни на что не делится, кроме себя и 1.
Другими словами, n>1 – простое, если при делении на любое число от 2 до n-1 есть остаток.
Создайте код, который выводит все простые числа из интервала от 2 до 10. Результат должен быть: 2,3,5,7.
P.S. Код также должен легко модифицироваться для любых других интервалов. (http://qaru.site/questions/14424/how-to-find-prime-numbers-between-0-100) */


// for (var i=2; i<=10; i++){
//     for(var j=2; j<=i; j++){
//         if (i%j === 0) break;
//     }
//     if(j === i) console.log(i);
// }

// nextPrime:
//     for (var i = 2; i < 10; i++) {
//         console.log('i = ' + i);
//         for (var j = 2; j < i; j++) {
//
//             console.log('i = ' + i+ ' j = ' + j);
//
//             if (i % j == 0) continue nextPrime;
//         }
//
//         console.log( i ); // простое
//     }

// function getPrimes(max) {
//     var sieve = [], i, j, primes = [];
//     for (i = 2; i <= max; ++i) {
//         if (!sieve[i]) {
//             // i has not been marked -- it is prime
//             primes.push(i);
//             for (j = i << 1; j <= max; j += i) {
//                 sieve[j] = true;
//             }
//         }
//     }
//     return primes;
// }
//
// console.log(getPrimes(10));

// Следующая функция возвращает true, если параметр age больше 18. В ином случае она задаёт вопрос confirm и возвращает его результат. Перепишите функцию, чтобы она делала то же самое, но без if, в одну строку. Сделайте два варианта функции checkAge:
//
// Используя оператор '?'
// Используя оператор ||

// var age = prompt('Ваш возраст?');

// function checkAge(age) {
//     return age > 18 ? true : confirm('Родители разрешили?');
//
// }
// checkAge(age);

// function checkAge2(age) {
//     return age > 18 || confirm('Родители разрешили?');
//
// }
// checkAge2(age);

// Напишите функцию min(a,b), которая возвращает меньшее из чисел a,b.
//
//     Пример вызовов:
//
// min(2, 5) == 2
// min(3, -1) == -1
// min(1, 1) == 1

function min(a, b) {
    if (a === b) {
        return ('a=b');
    }
    if (a < b) {
        return a;
    } else {
        return b;
    }
}

alert(min(4,4));