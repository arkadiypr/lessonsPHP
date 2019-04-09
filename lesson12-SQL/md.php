skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql -p
[sudo] пароль для skillup:
Попробуйте ещё раз.
[sudo] пароль для skillup:
Попробуйте ещё раз.
[sudo] пароль для skillup:
Enter password:
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql -p
Enter password:
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql -p
Enter password:
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: NO)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql -p
Enter password:
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo -u mysql mysql
ERROR 1045 (28000): Access denied for user 'mysql'@'localhost' (using password: NO)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo apt purge mysql-server*
Чтение списков пакетов… Готово
Построение дерева зависимостей
Чтение информации о состоянии… Готово
Заметьте, выбирается «mysql-server-5.0» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.1» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.5» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.6» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.7» для glob «mysql-server*»
Заметьте, выбирается «mysql-server» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.1» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.5» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.6» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.7» для glob «mysql-server*»
Пакет «mysql-server-core-5.6» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.5» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.6» не установлен, поэтому не может быть удалён
Пакет «mysql-server-core-5.5» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.0» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.1» не установлен, поэтому не может быть удалён
Пакет «mysql-server-core-5.1» не установлен, поэтому не может быть удалён
yСледующий пакет устанавливался автоматически и больше не требуется:
gyp javascript-common libevent-core-2.0-5 libjs-inherits libjs-jquery libjs-node-uuid libjs-underscore libssl-dev libssl-doc libuv1 libuv1-dev linux-headers-4.13.0-36
linux-headers-4.13.0-36-generic linux-headers-4.13.0-37 linux-headers-4.13.0-37-generic linux-headers-4.13.0-38 linux-headers-4.13.0-38-generic linux-headers-4.13.0-39
linux-headers-4.13.0-39-generic linux-headers-4.13.0-41 linux-headers-4.13.0-41-generic linux-headers-4.13.0-43 linux-headers-4.13.0-43-generic linux-headers-4.13.0-45
linux-headers-4.13.0-45-generic linux-headers-4.15.0-24 linux-headers-4.15.0-24-generic linux-headers-4.15.0-29 linux-headers-4.15.0-29-generic linux-headers-4.15.0-32
linux-headers-4.15.0-32-generic linux-headers-4.15.0-33 linux-headers-4.15.0-33-generic linux-headers-4.15.0-34 linux-headers-4.15.0-34-generic linux-headers-4.15.0-36
linux-headers-4.15.0-36-generic linux-headers-4.15.0-39 linux-headers-4.15.0-39-generic linux-headers-4.15.0-43 linux-headers-4.15.0-43-generic
linux-image-4.13.0-36-generic linux-image-4.13.0-37-generic linux-image-4.13.0-38-generic linux-image-4.13.0-39-generic linux-image-4.13.0-41-generic
linux-image-4.13.0-43-generic linux-image-4.13.0-45-generic linux-image-4.15.0-24-generic linux-image-4.15.0-29-generic linux-image-4.15.0-32-generic
linux-image-4.15.0-33-generic linux-image-4.15.0-34-generic linux-image-4.15.0-36-generic linux-image-4.15.0-39-generic linux-image-4.15.0-43-generic
linux-image-extra-4.13.0-36-generic linux-image-extra-4.13.0-37-generic linux-image-extra-4.13.0-38-generic linux-image-extra-4.13.0-39-generic
linux-image-extra-4.13.0-41-generic linux-image-extra-4.13.0-43-generic linux-image-extra-4.13.0-45-generic linux-modules-4.15.0-24-generic linux-modules-4.15.0-29-generic
linux-modules-4.15.0-32-generic linux-modules-4.15.0-33-generic linux-modules-4.15.0-34-generic linux-modules-4.15.0-36-generic linux-modules-4.15.0-39-generic
linux-modules-4.15.0-43-generic linux-modules-extra-4.15.0-33-generic linux-signed-image-4.13.0-36-generic linux-signed-image-4.13.0-37-generic
linux-signed-image-4.13.0-38-generic linux-signed-image-4.13.0-39-generic linux-signed-image-4.13.0-41-generic linux-signed-image-4.13.0-43-generic
linux-signed-image-4.13.0-45-generic python-pkg-resources zlib1g-dev
Для его удаления используйте «sudo apt autoremove».
Пакеты, которые будут УДАЛЕНЫ:
mysql-server* mysql-server-5.7* mysql-server-core-5.7*
обновлено 0, установлено 0 новых пакетов, для удаления отмечено 3 пакетов, и 234 пакетов не обновлено.
После данной операции, объём занятого дискового пространства уменьшится на 94,7 MB.
Хотите продолжить? [Д/н] y
(Чтение базы данных … 65%
(Чтение базы данных … 70%
(Чтение базы данных … 75%..................................................................................................................................................]
(Чтение базы данных … на данный момент установлено 745773 файла и каталога.)...............................................................................................]
Удаляется mysql-server (5.7.25-0ubuntu0.16.04.2) ….........................................................................................................................]

Ход выполнения: [ 14%] [####################..................................................................................................................]
Удаляется mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …#########...............................................................................................]
^[[Aupdate-alternatives: используется /etc/mysql/my.cnf.fallback для предоставления /etc/mysql/my.cnf (my.cnf) в автоматическом режиме

Вычищаются файлы настройки пакета mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …####............................................................................]

Удаляется mysql-server-core-5.7 (5.7.25-0ubuntu0.16.04.2) …##########################################.........................................................]

Ход выполнения: [ 71%] [################################################################################################......................................]
Обрабатываются триггеры для man-db (2.7.5-1) …#############################################################################################...................]
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo apt install mysql-server
mysql-server           mysql-server-5.7       mysql-server-core-5.7
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo apt install mysql-server
Чтение списков пакетов… Готово
Построение дерева зависимостей
Чтение информации о состоянии… Готово
Следующие пакеты устанавливались автоматически и больше не требуются:
gyp javascript-common libjs-inherits libjs-jquery libjs-node-uuid libjs-underscore libssl-dev libssl-doc libuv1 libuv1-dev linux-headers-4.13.0-36
linux-headers-4.13.0-36-generic linux-headers-4.13.0-37 linux-headers-4.13.0-37-generic linux-headers-4.13.0-38 linux-headers-4.13.0-38-generic linux-headers-4.13.0-39
linux-headers-4.13.0-39-generic linux-headers-4.13.0-41 linux-headers-4.13.0-41-generic linux-headers-4.13.0-43 linux-headers-4.13.0-43-generic linux-headers-4.13.0-45
linux-headers-4.13.0-45-generic linux-headers-4.15.0-24 linux-headers-4.15.0-24-generic linux-headers-4.15.0-29 linux-headers-4.15.0-29-generic linux-headers-4.15.0-32
linux-headers-4.15.0-32-generic linux-headers-4.15.0-33 linux-headers-4.15.0-33-generic linux-headers-4.15.0-34 linux-headers-4.15.0-34-generic linux-headers-4.15.0-36
linux-headers-4.15.0-36-generic linux-headers-4.15.0-39 linux-headers-4.15.0-39-generic linux-headers-4.15.0-43 linux-headers-4.15.0-43-generic
linux-image-4.13.0-36-generic linux-image-4.13.0-37-generic linux-image-4.13.0-38-generic linux-image-4.13.0-39-generic linux-image-4.13.0-41-generic
linux-image-4.13.0-43-generic linux-image-4.13.0-45-generic linux-image-4.15.0-24-generic linux-image-4.15.0-29-generic linux-image-4.15.0-32-generic
linux-image-4.15.0-33-generic linux-image-4.15.0-34-generic linux-image-4.15.0-36-generic linux-image-4.15.0-39-generic linux-image-4.15.0-43-generic
linux-image-extra-4.13.0-36-generic linux-image-extra-4.13.0-37-generic linux-image-extra-4.13.0-38-generic linux-image-extra-4.13.0-39-generic
linux-image-extra-4.13.0-41-generic linux-image-extra-4.13.0-43-generic linux-image-extra-4.13.0-45-generic linux-modules-4.15.0-24-generic linux-modules-4.15.0-29-generic
linux-modules-4.15.0-32-generic linux-modules-4.15.0-33-generic linux-modules-4.15.0-34-generic linux-modules-4.15.0-36-generic linux-modules-4.15.0-39-generic
linux-modules-4.15.0-43-generic linux-modules-extra-4.15.0-33-generic linux-signed-image-4.13.0-36-generic linux-signed-image-4.13.0-37-generic
linux-signed-image-4.13.0-38-generic linux-signed-image-4.13.0-39-generic linux-signed-image-4.13.0-41-generic linux-signed-image-4.13.0-43-generic
linux-signed-image-4.13.0-45-generic python-pkg-resources zlib1g-dev
Для их удаления используйте «sudo apt autoremove».
Будут установлены следующие дополнительные пакеты:
mysql-server-5.7 mysql-server-core-5.7
Предлагаемые пакеты:
mailx tinyca
НОВЫЕ пакеты, которые будут установлены:
mysql-server mysql-server-5.7 mysql-server-core-5.7
обновлено 0, установлено 3 новых пакетов, для удаления отмечено 0 пакетов, и 234 пакетов не обновлено.
Необходимо скачать 9.906 kБ архивов.
После данной операции, объём занятого дискового пространства возрастёт на 94,7 MB.
Хотите продолжить? [Д/н] y
Пол:1 http://ua.archive.ubuntu.com/ubuntu xenial-updates/main amd64 mysql-server-core-5.7 amd64 5.7.25-0ubuntu0.16.04.2 [7.272 kB]
Пол:2 http://ua.archive.ubuntu.com/ubuntu xenial-updates/main amd64 mysql-server-5.7 amd64 5.7.25-0ubuntu0.16.04.2 [2.623 kB]
Пол:3 http://ua.archive.ubuntu.com/ubuntu xenial-updates/main amd64 mysql-server all 5.7.25-0ubuntu0.16.04.2 [10,8 kB]
Получено 9.906 kБ за 9с (1.098 kБ/c)
Предварительная настройка пакетов ...
Выбор ранее не выбранного пакета mysql-server-core-5.7.
(Чтение базы данных … на данный момент установлено 745586 файлов и каталогов.)
Подготовка к распаковке …/mysql-server-core-5.7_5.7.25-0ubuntu0.16.04.2_amd64.deb …

Ход выполнения: [  0%] [......................................................................................................................................]
Распаковывается mysql-server-core-5.7 (5.7.25-0ubuntu0.16.04.2) ….............................................................................................]

Ход выполнения: [ 12%] [#################.....................................................................................................................]
Выбор ранее не выбранного пакета mysql-server-5.7.............................................................................................................]
Подготовка к распаковке …/mysql-server-5.7_5.7.25-0ubuntu0.16.04.2_amd64.deb …

Распаковывается mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …..................................................................................................]

Ход выполнения: [ 31%] [##########################################............................................................................................]
Выбор ранее не выбранного пакета mysql-server.#############################...................................................................................]
Подготовка к распаковке …/mysql-server_5.7.25-0ubuntu0.16.04.2_all.deb …

Распаковывается mysql-server (5.7.25-0ubuntu0.16.04.2) …###########################...........................................................................]

Ход выполнения: [ 50%] [###################################################################...................................................................]
Обрабатываются триггеры для man-db (2.7.5-1) …######################################################..........................................................]
Обрабатываются триггеры для systemd (229-4ubuntu21.16) …
Обрабатываются триггеры для ureadahead (0.100.0-19) …
ureadahead will be reprofiled on next reboot
Настраивается пакет mysql-server-core-5.7 (5.7.25-0ubuntu0.16.04.2) …

Ход выполнения: [ 62%] [####################################################################################..................................................]
Настраивается пакет mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …#####################################################.........................................]

update-alternatives: используется /etc/mysql/mysql.cnf для предоставления /etc/mysql/my.cnf (my.cnf) в автоматическом режиме#.................................]
Renaming removed key_buffer and myisam-recover options (if present)
Checking if update is needed.
This installation of MySQL is already upgraded to 5.7.25, use --force if you still need to run mysql_upgrade

Настраивается пакет mysql-server (5.7.25-0ubuntu0.16.04.2) …#########################################################################.........................]

Ход выполнения: [ 87%] [######################################################################################################################................]
Обрабатываются триггеры для systemd (229-4ubuntu21.16) …##############################################################################################........]
Обрабатываются триггеры для ureadahead (0.100.0-19) …
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql_s
mysql_secure_installation  mysql_ssl_rsa_setup
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql_s
mysql_secure_installation  mysql_ssl_rsa_setup
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql_secure_installation

Securing the MySQL server deployment.

Enter password for user root:
Error: Access denied for user 'root'@'localhost' (using password: YES)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo apt purge mysql-server*
Чтение списков пакетов… Готово
Построение дерева зависимостей
Чтение информации о состоянии… Готово
Заметьте, выбирается «mysql-server-5.0» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.1» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.5» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.6» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-5.7» для glob «mysql-server*»
Заметьте, выбирается «mysql-server» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.1» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.5» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.6» для glob «mysql-server*»
Заметьте, выбирается «mysql-server-core-5.7» для glob «mysql-server*»
Пакет «mysql-server-core-5.6» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.5» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.6» не установлен, поэтому не может быть удалён
Пакет «mysql-server-core-5.5» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.0» не установлен, поэтому не может быть удалён
Пакет «mysql-server-5.1» не установлен, поэтому не может быть удалён
Пакет «mysql-server-core-5.1» не установлен, поэтому не может быть удалён
Следующий пакет устанавливался автоматически и больше не требуется:
gyp javascript-common libevent-core-2.0-5 libjs-inherits libjs-jquery libjs-node-uuid libjs-underscore libssl-dev libssl-doc libuv1 libuv1-dev linux-headers-4.13.0-36
linux-headers-4.13.0-36-generic linux-headers-4.13.0-37 linux-headers-4.13.0-37-generic linux-headers-4.13.0-38 linux-headers-4.13.0-38-generic linux-headers-4.13.0-39
linux-headers-4.13.0-39-generic linux-headers-4.13.0-41 linux-headers-4.13.0-41-generic linux-headers-4.13.0-43 linux-headers-4.13.0-43-generic linux-headers-4.13.0-45
linux-headers-4.13.0-45-generic linux-headers-4.15.0-24 linux-headers-4.15.0-24-generic linux-headers-4.15.0-29 linux-headers-4.15.0-29-generic linux-headers-4.15.0-32
linux-headers-4.15.0-32-generic linux-headers-4.15.0-33 linux-headers-4.15.0-33-generic linux-headers-4.15.0-34 linux-headers-4.15.0-34-generic linux-headers-4.15.0-36
linux-headers-4.15.0-36-generic linux-headers-4.15.0-39 linux-headers-4.15.0-39-generic linux-headers-4.15.0-43 linux-headers-4.15.0-43-generic
linux-image-4.13.0-36-generic linux-image-4.13.0-37-generic linux-image-4.13.0-38-generic linux-image-4.13.0-39-generic linux-image-4.13.0-41-generic
linux-image-4.13.0-43-generic linux-image-4.13.0-45-generic linux-image-4.15.0-24-generic linux-image-4.15.0-29-generic linux-image-4.15.0-32-generic
linux-image-4.15.0-33-generic linux-image-4.15.0-34-generic linux-image-4.15.0-36-generic linux-image-4.15.0-39-generic linux-image-4.15.0-43-generic
linux-image-extra-4.13.0-36-generic linux-image-extra-4.13.0-37-generic linux-image-extra-4.13.0-38-generic linux-image-extra-4.13.0-39-generic
linux-image-extra-4.13.0-41-generic linux-image-extra-4.13.0-43-generic linux-image-extra-4.13.0-45-generic linux-modules-4.15.0-24-generic linux-modules-4.15.0-29-generic
linux-modules-4.15.0-32-generic linux-modules-4.15.0-33-generic linux-modules-4.15.0-34-generic linux-modules-4.15.0-36-generic linux-modules-4.15.0-39-generic
linux-modules-4.15.0-43-generic linux-modules-extra-4.15.0-33-generic linux-signed-image-4.13.0-36-generic linux-signed-image-4.13.0-37-generic
linux-signed-image-4.13.0-38-generic linux-signed-image-4.13.0-39-generic linux-signed-image-4.13.0-41-generic linux-signed-image-4.13.0-43-generic
linux-signed-image-4.13.0-45-generic python-pkg-resources zlib1g-dev
Для его удаления используйте «sudo apt autoremove».
Пакеты, которые будут УДАЛЕНЫ:
mysql-server* mysql-server-5.7* mysql-server-core-5.7*
обновлено 0, установлено 0 новых пакетов, для удаления отмечено 3 пакетов, и 234 пакетов не обновлено.
После данной операции, объём занятого дискового пространства уменьшится на 94,7 MB.
Хотите продолжить? [Д/н] y
(Чтение базы данных … на данный момент установлено 745773 файла и каталога.)
Удаляется mysql-server (5.7.25-0ubuntu0.16.04.2) …

Ход выполнения: [  0%] [......................................................................................................................................]
Ход выполнения: [ 14%] [####################..................................................................................................................]
Удаляется mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …#########...............................................................................................]
update-alternatives: используется /etc/mysql/my.cnf.fallback для предоставления /etc/mysql/my.cnf (my.cnf) в автоматическом режиме

Вычищаются файлы настройки пакета mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …####............................................................................]

Удаляется mysql-server-core-5.7 (5.7.25-0ubuntu0.16.04.2) …##########################################.........................................................]

Ход выполнения: [ 71%] [################################################################################################......................................]
Обрабатываются триггеры для man-db (2.7.5-1) …#############################################################################################...................]
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo rm -R /var/lib/mysql
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo apt install mysql-server
Чтение списков пакетов… Готово
Построение дерева зависимостей
Чтение информации о состоянии… Готово
Следующие пакеты устанавливались автоматически и больше не требуются:
gyp javascript-common libjs-inherits libjs-jquery libjs-node-uuid libjs-underscore libssl-dev libssl-doc libuv1 libuv1-dev linux-headers-4.13.0-36
linux-headers-4.13.0-36-generic linux-headers-4.13.0-37 linux-headers-4.13.0-37-generic linux-headers-4.13.0-38 linux-headers-4.13.0-38-generic linux-headers-4.13.0-39
linux-headers-4.13.0-39-generic linux-headers-4.13.0-41 linux-headers-4.13.0-41-generic linux-headers-4.13.0-43 linux-headers-4.13.0-43-generic linux-headers-4.13.0-45
linux-headers-4.13.0-45-generic linux-headers-4.15.0-24 linux-headers-4.15.0-24-generic linux-headers-4.15.0-29 linux-headers-4.15.0-29-generic linux-headers-4.15.0-32
linux-headers-4.15.0-32-generic linux-headers-4.15.0-33 linux-headers-4.15.0-33-generic linux-headers-4.15.0-34 linux-headers-4.15.0-34-generic linux-headers-4.15.0-36
linux-headers-4.15.0-36-generic linux-headers-4.15.0-39 linux-headers-4.15.0-39-generic linux-headers-4.15.0-43 linux-headers-4.15.0-43-generic
linux-image-4.13.0-36-generic linux-image-4.13.0-37-generic linux-image-4.13.0-38-generic linux-image-4.13.0-39-generic linux-image-4.13.0-41-generic
linux-image-4.13.0-43-generic linux-image-4.13.0-45-generic linux-image-4.15.0-24-generic linux-image-4.15.0-29-generic linux-image-4.15.0-32-generic
linux-image-4.15.0-33-generic linux-image-4.15.0-34-generic linux-image-4.15.0-36-generic linux-image-4.15.0-39-generic linux-image-4.15.0-43-generic
linux-image-extra-4.13.0-36-generic linux-image-extra-4.13.0-37-generic linux-image-extra-4.13.0-38-generic linux-image-extra-4.13.0-39-generic
linux-image-extra-4.13.0-41-generic linux-image-extra-4.13.0-43-generic linux-image-extra-4.13.0-45-generic linux-modules-4.15.0-24-generic linux-modules-4.15.0-29-generic
linux-modules-4.15.0-32-generic linux-modules-4.15.0-33-generic linux-modules-4.15.0-34-generic linux-modules-4.15.0-36-generic linux-modules-4.15.0-39-generic
linux-modules-4.15.0-43-generic linux-modules-extra-4.15.0-33-generic linux-signed-image-4.13.0-36-generic linux-signed-image-4.13.0-37-generic
linux-signed-image-4.13.0-38-generic linux-signed-image-4.13.0-39-generic linux-signed-image-4.13.0-41-generic linux-signed-image-4.13.0-43-generic
linux-signed-image-4.13.0-45-generic python-pkg-resources zlib1g-dev
Для их удаления используйте «sudo apt autoremove».
Будут установлены следующие дополнительные пакеты:
mysql-server-5.7 mysql-server-core-5.7
Предлагаемые пакеты:
mailx tinyca
НОВЫЕ пакеты, которые будут установлены:
mysql-server mysql-server-5.7 mysql-server-core-5.7
обновлено 0, установлено 3 новых пакетов, для удаления отмечено 0 пакетов, и 234 пакетов не обновлено.
Необходимо скачать 9.906 kБ архивов.
После данной операции, объём занятого дискового пространства возрастёт на 94,7 MB.
Хотите продолжить? [Д/н] y
Пол:1 http://ua.archive.ubuntu.com/ubuntu xenial-updates/main amd64 mysql-server-core-5.7 amd64 5.7.25-0ubuntu0.16.04.2 [7.272 kB]
Пол:2 http://ua.archive.ubuntu.com/ubuntu xenial-updates/main amd64 mysql-server-5.7 amd64 5.7.25-0ubuntu0.16.04.2 [2.623 kB]
Пол:3 http://ua.archive.ubuntu.com/ubuntu xenial-updates/main amd64 mysql-server all 5.7.25-0ubuntu0.16.04.2 [10,8 kB]
Получено 9.906 kБ за 16с (599 kБ/c)
Предварительная настройка пакетов ...
Выбор ранее не выбранного пакета mysql-server-core-5.7.
(Чтение базы данных … на данный момент установлено 745586 файлов и каталогов.)
Подготовка к распаковке …/mysql-server-core-5.7_5.7.25-0ubuntu0.16.04.2_amd64.deb …

Ход выполнения: [  0%] [......................................................................................................................................]
Распаковывается mysql-server-core-5.7 (5.7.25-0ubuntu0.16.04.2) ….............................................................................................]

Ход выполнения: [ 12%] [#################.....................................................................................................................]
Выбор ранее не выбранного пакета mysql-server-5.7.............................................................................................................]
Подготовка к распаковке …/mysql-server-5.7_5.7.25-0ubuntu0.16.04.2_amd64.deb …

Распаковывается mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …..................................................................................................]

Ход выполнения: [ 31%] [##########################################............................................................................................]
Выбор ранее не выбранного пакета mysql-server.#############################...................................................................................]
Подготовка к распаковке …/mysql-server_5.7.25-0ubuntu0.16.04.2_all.deb …

Распаковывается mysql-server (5.7.25-0ubuntu0.16.04.2) …###########################...........................................................................]

Ход выполнения: [ 50%] [###################################################################...................................................................]
Обрабатываются триггеры для man-db (2.7.5-1) …######################################################..........................................................]
Обрабатываются триггеры для systemd (229-4ubuntu21.16) …
Обрабатываются триггеры для ureadahead (0.100.0-19) …
Настраивается пакет mysql-server-core-5.7 (5.7.25-0ubuntu0.16.04.2) …

Ход выполнения: [ 62%] [####################################################################################..................................................]
Настраивается пакет mysql-server-5.7 (5.7.25-0ubuntu0.16.04.2) …#####################################################.........................................]

update-alternatives: используется /etc/mysql/mysql.cnf для предоставления /etc/mysql/my.cnf (my.cnf) в автоматическом режиме#.................................]
Renaming removed key_buffer and myisam-recover options (if present)

Настраивается пакет mysql-server (5.7.25-0ubuntu0.16.04.2) …#########################################################################.........................]

Ход выполнения: [ 87%] [######################################################################################################################................]
Обрабатываются триггеры для systemd (229-4ubuntu21.16) …##############################################################################################........]
Обрабатываются триггеры для ureadahead (0.100.0-19) …
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: NO)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ sudo mysql -p
Enter password:
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 5
Server version: 5.7.25-0ubuntu0.16.04.2 (Ubuntu)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> SELECT user,authentication_string,plugin,host FROM mysql.user;
+------------------+-------------------------------------------+-----------------------+-----------+
| user             | authentication_string                     | plugin                | host      |
+------------------+-------------------------------------------+-----------------------+-----------+
| root             | *81F5E21E35407D884A6CD4A731AEBFB6AF209E1B | mysql_native_password | localhost |
| mysql.session    | *THISISNOTAVALIDPASSWORDTHATCANBEUSEDHERE | mysql_native_password | localhost |
| mysql.sys        | *THISISNOTAVALIDPASSWORDTHATCANBEUSEDHERE | mysql_native_password | localhost |
| debian-sys-maint | *1D3FEBD5FEC672502996F7337923FA48876175AB | mysql_native_password | localhost |
+------------------+-------------------------------------------+-----------------------+-----------+
4 rows in set (0,00 sec)

mysql> CREATE USER 'arkadiy'@'localhost' IDENTIFIED BY 'password';
Query OK, 0 rows affected (0,00 sec)

mysql> SELECT user,authentication_string,plugin,host FROM mysql.user;
+------------------+-------------------------------------------+-----------------------+-----------+
| user             | authentication_string                     | plugin                | host      |
+------------------+-------------------------------------------+-----------------------+-----------+
| root             | *81F5E21E35407D884A6CD4A731AEBFB6AF209E1B | mysql_native_password | localhost |
| mysql.session    | *THISISNOTAVALIDPASSWORDTHATCANBEUSEDHERE | mysql_native_password | localhost |
| mysql.sys        | *THISISNOTAVALIDPASSWORDTHATCANBEUSEDHERE | mysql_native_password | localhost |
| debian-sys-maint | *1D3FEBD5FEC672502996F7337923FA48876175AB | mysql_native_password | localhost |
| arkadiy          | *2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19 | mysql_native_password | localhost |
+------------------+-------------------------------------------+-----------------------+-----------+
5 rows in set (0,00 sec)

mysql> create database 'test902';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test902'' at line 1
mysql> CREATE DATABASE 'test902';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test902'' at line 1
mysql> CREATE DATABASE 'test';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'' at line 1
mysql> CREATE DATABASE 'test'
-> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'' at line 1
mysql> CREATE DATABASE test902;
Query OK, 1 row affected (0,00 sec)

mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| sys                |
| test902            |
+--------------------+
5 rows in set (0,00 sec)

mysql> GRANT ALL PRIVILEGES ON test.* TO 'arkadiy'@'localhost' WITH GRANT OPTION;
Query OK, 0 rows affected (0,00 sec)

mysql> FLUSH PRIVILEGES;
Query OK, 0 rows affected (0,00 sec)

mysql> mysql>
mysql> mysql -h localhost -u arkadiy -p test902
-> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mysql -h localhost -u arkadiy -p test902' at line 1
mysql> mysql -h localhost -u arkadiy -p test902;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mysql -h localhost -u arkadiy -p test902' at line 1
mysql> use test902
Database changed
mysql> mysql -h localhost -u arkadiy -ppassword
-> test902
-> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mysql -h localhost -u arkadiy -ppassword
test902' at line 1
mysql> GRANT ALL PRIVILEGES ON test902.* TO 'arkadiy'@'localhost' WITH GRANT OPTION;
Query OK, 0 rows affected (0,00 sec)

mysql> FLUSH PRIVILEGES;
Query OK, 0 rows affected (0,00 sec)

mysql>
