Git
Git
Git

skillup@skillup-Aspire-ES1-511:~$ mkdir pryadko
skillup@skillup-Aspire-ES1-511:~$ cd pry
bash: cd: pry: Нет такого файла или каталога
skillup@skillup-Aspire-ES1-511:~$ cd pryadko
skillup@skillup-Aspire-ES1-511:~/pryadko$ git clone https://github.com/arkadiypr/lessonsPHP.git
Клонирование в «lessonsPHP»…
warning: Похоже, что вы клонировали пустой репозиторий.
Проверка соединения… готово.
skillup@skillup-Aspire-ES1-511:~/pryadko$ cd lessonsPHP
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ gedit README.md
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ ls
README.md
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ ll
итого 16
drwxrwxr-x 3 skillup skillup 4096 Фев 22 19:54 ./
drwxrwxr-x 3 skillup skillup 4096 Фев 22 19:48 ../
drwxrwxr-x 7 skillup skillup 4096 Фев 22 19:48 .git/
-rw-rw-r-- 1 skillup skillup    4 Фев 22 19:54 README.md
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git status
На ветке master

Начальный коммит

Неотслеживаемые файлы:
  (используйте «git add <файл>…», чтобы добавить в то, что будет включено в коммит)

	README.md

ничего не добавлено в коммит, но есть неотслеживаемые файлы (используйте «git add», чтобы отслеживать их)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git add .
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git status
На ветке master

Начальный коммит

Изменения, которые будут включены в коммит:
  (используйте «git rm --cached <файл>…», чтобы убрать из индекса)

	новый файл:    README.md
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git commit -m 'first commit'
[master (корневой коммит) 633f7b5] first commit
 1 file changed, 1 insertion(+)
 create mode 100644 README.md
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git log
commit 633f7b53e4103c049d8962b8ad4808234aabdd9c
Author: Anton <kopanewanton@gmail.com>
Date:   Fri Feb 22 20:03:00 2019 +0200

    first commit
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git config user.name 'Arkadiy Pryadko'
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git config user.email arkadij.pryadko@gmail.com
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ gedit README.md
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git status
На ветке master
Ваша ветка базируется на «origin/master», но вышестоящий репозиторий исчез.
  (для исправления запустите «git branch --unset-upstream»)
Изменения, которые не в индексе для коммита:
  (используйте «git add <файл>…», чтобы добавить файл в индекс)
  (используйте «git checkout -- <файл>…», чтобы отменить изменения
   в рабочем каталоге)

	изменено:      README.md

нет изменений добавленных для коммита
(используйте «git add» и/или «git commit -a»)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git add .
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git commit -m 'second commit'
[master 08105f0] second commit
 1 file changed, 1 insertion(+)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git status
На ветке master
Ваша ветка базируется на «origin/master», но вышестоящий репозиторий исчез.
  (для исправления запустите «git branch --unset-upstream»)
нечего коммитить, нет изменений в рабочем каталоге
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git log
commit 08105f09118286838556785dd9242756aed76073
Author: Arkadiy Pryadko <arkadij.pryadko@gmail.com>
Date:   Fri Feb 22 20:13:08 2019 +0200

    second commit

commit 633f7b53e4103c049d8962b8ad4808234aabdd9c
Author: Anton <kopanewanton@gmail.com>
Date:   Fri Feb 22 20:03:00 2019 +0200

    first commit
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git push
warning: push.default не установлен; его неявное значение было изменено в Git версии 2.0 с «matching» на «simple». Чтобы прекратить вывод этого сообщения и сохранить старое поведение, используйте:

  git config --global push.default matching

Чтобы прекратить вывод этого сообщения и использовать новое поведение, используйте:

  git config --global push.default simple

Когда push.default установлено в «matching», git будет отправлять изменения локальных веток в существующие внешние ветки с таким же именем.

Начиная с Git версии 2.0, по умолчанию используется более консервативное поведение «simple», которое отправляет изменения текущей ветки в соответствующую внешнюю ветку, из которой «git pull» забирает изменения.

Смотрите «git help config» и ищите «push.default» для дополнительной информации.
(режим «simple» появился в Git версии 1.7.11. Используйте похожий режим «current» вместо «simple», если вы иногда используете старые версии Git)

Username for 'https://github.com': arkadiypr
Password for 'https://arkadiypr@github.com': 
remote: Invalid username or password.
fatal: Authentication failed for 'https://github.com/arkadiypr/lessonsPHP.git/'
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git push
warning: push.default не установлен; его неявное значение было изменено в Git версии 2.0 с «matching» на «simple». Чтобы прекратить вывод этого сообщения и сохранить старое поведение, используйте:

  git config --global push.default matching

Чтобы прекратить вывод этого сообщения и использовать новое поведение, используйте:

  git config --global push.default simple

Когда push.default установлено в «matching», git будет отправлять изменения локальных веток в существующие внешние ветки с таким же именем.

Начиная с Git версии 2.0, по умолчанию используется более консервативное поведение «simple», которое отправляет изменения текущей ветки в соответствующую внешнюю ветку, из которой «git pull» забирает изменения.

Смотрите «git help config» и ищите «push.default» для дополнительной информации.
(режим «simple» появился в Git версии 1.7.11. Используйте похожий режим «current» вместо «simple», если вы иногда используете старые версии Git)

Username for 'https://github.com': arkadiypr
Password for 'https://arkadiypr@github.com': 
Подсчет объектов: 6, готово.
Delta compression using up to 2 threads.
Сжатие объектов: 100% (2/2), готово.
Запись объектов: 100% (6/6), 434 bytes | 0 bytes/s, готово.
Total 6 (delta 0), reused 0 (delta 0)
To https://github.com/arkadiypr/lessonsPHP.git
 * [new branch]      master -> master
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ cd ..
skillup@skillup-Aspire-ES1-511:~/pryadko$ git clone https://github.com/arkadiypr/lessonsPHP.git lessonsPHP_clone
Клонирование в «lessonsPHP_clone»…
remote: Enumerating objects: 6, done.
remote: Counting objects: 100% (6/6), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 6 (delta 0), reused 6 (delta 0), pack-reused 0
Распаковка объектов: 100% (6/6), готово.
Проверка соединения… готово.
skillup@skillup-Aspire-ES1-511:~/pryadko$ ls
lessonsPHP  lessonsPHP_clone
skillup@skillup-Aspire-ES1-511:~/pryadko$ cd lessonsPHP_clone
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ git status
На ветке master
Ваша ветка обновлена в соответствии с «origin/master».
Изменения, которые не в индексе для коммита:
  (используйте «git add <файл>…», чтобы добавить файл в индекс)
  (используйте «git checkout -- <файл>…», чтобы отменить изменения
   в рабочем каталоге)

	изменено:      README.md

нет изменений добавленных для коммита
(используйте «git add» и/или «git commit -a»)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ git add .
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ git commit -m 'from clone'
[master f641888] from clone
 1 file changed, 1 insertion(+)
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ git status
На ветке master
Ваша ветка опережает «origin/master» на 1 коммит.
  (используйте «git push», чтобы опубликовать ваши локальные коммиты)
нечего коммитить, нет изменений в рабочем каталоге
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ git log
commit f641888fc143fcaf50f84ab1ca9efeb657df98d7
Author: Anton <kopanewanton@gmail.com>
Date:   Fri Feb 22 20:36:02 2019 +0200

    from clone

commit 08105f09118286838556785dd9242756aed76073
Author: Arkadiy Pryadko <arkadij.pryadko@gmail.com>
Date:   Fri Feb 22 20:13:08 2019 +0200

    second commit

commit 633f7b53e4103c049d8962b8ad4808234aabdd9c
Author: Anton <kopanewanton@gmail.com>
Date:   Fri Feb 22 20:03:00 2019 +0200

    first commit
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ git push
warning: push.default не установлен; его неявное значение было изменено в Git версии 2.0 с «matching» на «simple». Чтобы прекратить вывод этого сообщения и сохранить старое поведение, используйте:

  git config --global push.default matching

Чтобы прекратить вывод этого сообщения и использовать новое поведение, используйте:

  git config --global push.default simple

Когда push.default установлено в «matching», git будет отправлять изменения локальных веток в существующие внешние ветки с таким же именем.

Начиная с Git версии 2.0, по умолчанию используется более консервативное поведение «simple», которое отправляет изменения текущей ветки в соответствующую внешнюю ветку, из которой «git pull» забирает изменения.

Смотрите «git help config» и ищите «push.default» для дополнительной информации.
(режим «simple» появился в Git версии 1.7.11. Используйте похожий режим «current» вместо «simple», если вы иногда используете старые версии Git)

Username for 'https://github.com': arkadiypr
Password for 'https://arkadiypr@github.com': 
Подсчет объектов: 3, готово.
Запись объектов: 100% (3/3), 242 bytes | 0 bytes/s, готово.
Total 3 (delta 0), reused 0 (delta 0)
To https://github.com/arkadiypr/lessonsPHP.git
   08105f0..f641888  master -> master
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ cd lessonsPHP
bash: cd: lessonsPHP: Нет такого файла или каталога
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP_clone$ cd
skillup@skillup-Aspire-ES1-511:~$ cd lessonsPHP
bash: cd: lessonsPHP: Нет такого файла или каталога
skillup@skillup-Aspire-ES1-511:~$ cd
skillup@skillup-Aspire-ES1-511:~$ cd pryadko/lessonsPHP
skillup@skillup-Aspire-ES1-511:~/pryadko/lessonsPHP$ git pull
remote: Enumerating objects: 5, done.
remote: Counting objects: 100% (5/5), done.
remote: Total 3 (delta 0), reused 3 (delta 0), pack-reused 0
Распаковка объектов: 100% (3/3), готово.
Из https://github.com/arkadiypr/lessonsPHP
   08105f0..f641888  master     -> origin/master
Обновление 08105f0..f641888
Fast-forward
 README.md | 1 +
 1 file changed, 1 insertion(+)

