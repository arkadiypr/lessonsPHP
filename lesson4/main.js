"use strict";
//alert('Hello, world');
//alert('Hello');// comment 1
console.log('Hello, console');

/*
comment 2
 */
// var messageP;
// var count = 2;
// var message1 = 'fff', label, message2 = 'kkk';
//
//
// messageP = 'Текс сообщения';


// var num1, num2, result;
//
// num1 = +prompt('Введите первое число, 0');
// num2 = +prompt('Введите второе число, 0');
//
// result = num1 + num2;
//
// alert('Результат сложения: ' + result);

// var a=true;
//
// if (a) alert('Yes'); else alert('No');
//
// var a = +prompt('Введите число a');
// var b = +prompt('Введите число b');
//
// if ((a > 2 && a <11) || (b >= 2 && b < 14)) {
//     alert('Верно');
// } else {
//     alert('Неверно')
// }

// var num = +prompt();
//
// switch (num) {
//     case 1:
//         var result = 'zima';
//         break;
//     case 2:
//         var result = 'vesna';
//         break;
//     case 3:
//         var result = 'leto';
//         break;
//     case 4:
//         var result = 'osen';
//         break;
//     default:
//         var result = 'error';
// }
//
// alert(result);
//
// var day = +prompt();
//
// if (day >=1 && day < 10) {
//     alert('Part 1');
// }
// if (day >=10 && day < 20) {
//     alert('Part 2');
// }
// if (day >=20 && day <= 31) {
// }
// alert('Part 3');

// Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'. Показать решение.

// var str = 'bcde';
//
// if (str[0] === 'a') {
//     alert('Yes');
// } else {
//     alert('No');
// }

// var i = 1; //счетчик цикла
// while (i <= 5) {
//     alert(i);
//     i++;
// }
//
// var i = 0; //счетчик цикла
// while (i < 5) {
//     /*
//         С помощью оператора ++ увеличиваем i на единицу
//         при каждом проходе цикла.
//     */
//     i++;
//     alert(i);
// }

// for (var i = 1; i <=5; i++) {
//     alert(i);
// }

// for (var i = 0, j = 2; i < 10; i++, j++,  i = i + j) {
//     alert('i = ' + i + '\nj = ' +j);
// }

// var arr = [1, 2, 3, 4, 5];
// for (var i = 0; i < arr.length; i++) {
//     alert(arr[i]); //выведет 1, 2, 3, 4, 5
// }

// var obj = {Коля: 200, Вася: 300, Петя: 400};
// for (var key in obj) {
//     alert(key);
// }

// var obj = {Коля: 200, Вася: 300, Петя: 400};
// for (var key in obj) {
//     alert(obj[key]); //выведет 200, 300, 400
//     document.write(obj[key]+ ' ');
// }

// var arr = [1, 2, 3, 4, 5];
// for (var i = 0; i <= arr.length - 1; i++) {
//     if (arr[i] === 6) {
//         alert('Number 3!!!')
//         break; //выходим из цикла
//     } else {
//         alert(arr[i]);
//     }
// }


// Выведите столбец чисел от 1 до 100.

// var i = 1;
// while (i <= 100) {
//     document.write(i + '<br>');
//     i++;
// }
//
// for (var i = 1; i <= 100; i++) {
//     document.write(i + '<br>');
// }

//     Выведите столбец чисел от 11 до 33. Показать решение.

// var i = 11;
// while (i <= 33) {
//     document.write(i + '<br>');
//     i++;
// }
//
// for (var i = 11; i <= 33; i++) {
//     document.write(i + '<br>');
// }

//     Выведите столбец четных чисел в промежутке от 0 до 100. Показать решение.

// var i = 0;
// while (i <= 100) {
//     document.write(i + '<br>');
//     i += 2;
// }
//
// for (var i = 0; i <= 100; i +=2) {
//     document.write(i + '<br>');
// }

//     С помощью цикла найдите сумму чисел от 1 до 100.

// var result = 0;
//
// var i = 1;
// while (i <= 100) {
//     result += i;
//     i++;
// }
// document.write(result);

// var result = 0;
// for (var i = 1; i <= 100; i++) {
//     result += i;
// }
// document.write(result);

// Дан массив с элементами [1, 2, 3, 4, 5]. С помощью цикла for выведите все эти элементы на экран.

// var arr = [1, 2, 3, 4, 5];
//
// for (var i = 0; i < arr.length; i++) {
//     document.write(arr[i] + '<br>')
// }


//     Дан массив с элементами [1, 2, 3, 4, 5]. С помощью цикла for найдите сумму элементов этого массива. Запишите ее в переменную result.

// var arr = [1, 2, 3, 4, 5];
// var result = 0;
//
// for (var i = 0; i < arr.length; i++) {
//     result += arr[i];
// }
// document.write(result);

// Дан объект obj. С помощью цикла for-in выведите на экран ключи и элементы этого объекта.

// var obj = {green: 'зеленый', red: 'красный', blue: 'голубой'};
// for (var key in obj) {
//     document.write(key + '->' + obj[key] + '<br>');
// }

//     Дан объект obj с ключами Коля, Вася, Петя с элементами '200', '300', '400'. С помощью цикла for-in выведите на экран строки такого формата: 'Коля - зарплата 200 долларов.'.

// var obj = {Коля: '200', Вася: '300', Петя: '400'};
// for (var key in obj) {
//     document.write(key + ' - зарплата ' + obj[key] + ' долларов<br>');
// }

// Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла for и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.

// var arr = [2, 5, 9, 15, 0, 4];
//
// for (var i = 0; i < arr.length; i++) {
//     if (arr[i] > 3 && arr[i] < 10) {
//         document.write(arr[i] + '<br>');
//     }
// }

//     Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов массива.

// var arr = [1, 4, -8, 2, -1, 3];
// var result = 0;
// for (var i = 0; i < arr.length; i++) {
//     if (arr[i] > 0) {
//         result += arr[i];
//     }
// }
// document.write(result);


//     Дан массив с элементами 1, 2, 5, 9, 4, 13, 4, 10. С помощью цикла for и оператора if проверьте есть ли в массиве элемент со значением, равным 4. Если есть - выведите на экран 'Есть!' и выйдите из цикла. Если нет - ничего делать не надо.

// var arr = [1, 2, 5, 9, 4, 13, 4, 10];
//
// for (var i = 0; i < arr.length; i++) {
//     if (arr[i] == 4) {
//         alert('Есть!');
//         break;
//     }
// }

// Дан массив числами, например: [10, 20, 30, 50, 235, 3000]. Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.
// var arr = [10, 20, 30, 50, 235, 3000];
//
// for (var i = 0; i < arr.length; i++) {
//     if (String(arr[i])[0] === '1' || String(arr[i])[0] === '2' || String(arr[i])[0] === '5') {
//         document.write(arr[i] + '<br>');
//     }
// }

//
//     Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла for создайте строку '-1-2-3-4-5-6-7-8-9-'.
// var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// var str = '';
// for (var i = 0; i < arr.length; i++) {
//     str += arr[i] + '-';
// }
// document.write('-' + str);

// Составьте массив дней недели. С помощью цикла for выведите все дни недели, а выходные дни выведите жирным.

// var week = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
//
// for (var i = 0; i < week.length; i++) {
//     if (week[i] === 'ср' || week[i] === 'вс') {
//         document.write('<strong>' + week[i] + '</strong>' + ' ');
//     } else document.write(week[i] + ' ');
// }


//     Составьте массив дней недели. С помощью цикла for выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной day.


// var week = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
// for (var i = 0; i < week.length; i++) {
//     if (week[i] == 'пт') {
//         document.write('<em>' + week[i] + '</em>' + ' ');
//     } else document.write(week[i] + ' ');
// }

//     Дано число n=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла), и запишите его в переменную num.

// for (var n = 1000, num = 0; n > 50;n /= 2, num++) {
// }
// document.write(n + '<br>');
// document.write(num);

var n = 1000;
var num = 0;

while (n > 50) {
    n /= 2;
    num++;
}

document.write(n + '<br>');
document.write(num);