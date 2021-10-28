# C. Система регистрации

- ограничение по времени на тест: **5 seconds**
- ограничение по памяти на тест: **64 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

В скором времени в Берляндии откроется новая почтовая служба "Берляндеск".
Администрация сайта хочет запустить свой проект как можно быстрее, поэтому они попросили Вас о помощи.
Вам предлагается реализовать прототип системы регистрации сайта.

Система должна работать по следующему принципу.
Каждый раз, когда новый пользователь хочет зарегистрироваться, он посылает системе запрос name со своим именем.
Если данное имя не содержится в базе данных системы, то оно заносится туда и пользователю возвращается ответ OK,
подтверждающий успешную регистрацию. Если же на сайте уже присутствует пользователь с именем name,
то система формирует новое имя и выдает его пользователю в качестве подсказки,
при этом подсказка также добавляется в базу данных. Новое имя формируется по следующему правилу.
К name последовательно приписываются числа, начиная с единицы (name1, name2, ...),
и среди них находят такое наименьшее i, что namei не содержится в базе данных сайта.

## Входные данные
В первой строке входных данных задано число n (1 ≤ n ≤ 105).
Следующие n строк содержат запросы к системе.
Каждый запрос представляет собой непустую строку длиной не более 32 символов,
состоящую только из строчных букв латинского алфавита.

## Выходные данные
В выходных данных должно содержаться n строк — ответы системы на запросы:
ОК в случае успешной регистрации, или подсказку с новым именем,
если запрашиваемое уже занято.

## Примеры
### входные данные
4
abacaba
acaba
abacaba
acab
### выходные данные
OK
OK
abacaba1
OK

### входные данные
6
first
first
second
second
third
third
### выходные данные
OK
first1
OK
second1
OK
third1