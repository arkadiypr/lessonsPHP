1. Выбрать работника с id = 3.
<br>
SELECT * FROM workers WHERE id = 3;
<br>
2. Выбрать работников с зарплатой 1000$.
<br>
SELECT * FROM workers WHERE salary = 1000;
<br>
3. Выбрать работников в возрасте 23 года.
<br>
SELECT * FROM workers WHERE age = 23;
<br>
4. Выбрать работников с зарплатой более 400$.
<br>
SELECT * FROM workers WHERE salary > 400;
<br>
5. Выбрать работников с зарплатой равной или большей 500$.
<br>
SELECT * FROM workers WHERE salary >= 500;
<br>
6. Выбрать работников с зарплатой НЕ равной 500$.
<br>
SELECT * FROM workers WHERE salary != 500;
<br>
7. Выбрать работников с зарплатой равной или меньшей 900$.
<br>
SELECT * FROM workers WHERE salary <= 900;
<br>
8. Узнайте зарплату и возраст Васи.
<br>
SELECT salary, age FROM workers WHERE name = 'Вася';
<br>
9. Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
<br>
SELECT * FROM workers WHERE age > 25 AND age <=28;
<br>
10. Выбрать работника Петю.
<br>
SELECT * FROM workers WHERE name = 'Петя';
<br>
11. Выбрать работников Петю и Васю.
<br>
SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася';
<br>
12. Выбрать всех, кроме работника Петя.
<br>
SELECT * FROM workers WHERE name != 'Петя';
<br>
13. Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
<br>
SELECT * FROM workers WHERE age = 27 OR salary = 1000;
<br>
14. Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.
<br>
SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000;
<br>
15. Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.
<br>
SELECT * FROM workers WHERE (age > 23 AND age < 27) OR (salary > 400 AND salary < 1000);
<br>
16. Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
<br>
SELECT * FROM workers WHERE age = 27 OR salary != 400;
<br>
17. Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.
<br>
INSERT INTO workers (name, age, salary) VALUE ('Никита', 26, 300);
<br>
18. Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.
<br>
INSERT INTO workers SET name = 'Светлана', salary = 1200;
<br>
19. Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.
<br>
INSERT INTO workers (name, age, salary) VALUE ('Ярослав', 30, 1200),('Петр', 31, 1000);
<br>
20. Удалите работника с id=7.
<br>
DELETE FROM workers WHERE id = 7;
<br>
21. Удалите Колю.
<br>
DELETE FROM workers WHERE name = 'Коля';
<br>
22. Удалите всех работников, у которых возраст 23 года.
<br>
DELETE FROM workers WHERE age = 23;
<br>
23. Поставьте Васе зарплату в 200$.
<br>
UPDATE workers SET salary = 200 WHERE name = 'Вася';
<br>
24. Работнику с id=4 поставьте возраст 35 лет.
<br>
UPDATE workers SET age = 35 WHERE id = 4;
<br>
25. Всем, у кого зарплата 500$ сделайте ее 700$.
<br>
UPDATE workers SET salary = 700 WHERE salary = 500;
<br>
26. Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
<br>
UPDATE workers SET age = 23 WHERE id > 2 AND id <= 5;
<br>
27. Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.
<br>
UPDATE workers SET name = 'Женя', salary = 900 WHERE name = 'Вася';
