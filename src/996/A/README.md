# A. Выиграть в лотерею

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

У Аллена много денег, а именно, на счету в банке у него n долларов. По соображениям безопасности он хочет снять всю
сумму наличными, мы не будет здесь описывать эти соображения. Номиналы долларовых купюр равны 1, 5, 10, 20, 100. Какое
минимальное число купюр должен получить Аллен после того, как снимет все деньги?

## Входные данные

Первая и единственная строка содержит одно целое число n (1 ≤ n ≤ 10^9).

## Выходные данные

Выведите минимальное число купюр, которые должен получить Аллен.

## Примеры

### входные данные
125
### выходные данные
3

### входные данные
43
### выходные данные
5

### входные данные
1000000000
### выходные данные
10000000

## Примечание

В первом примере Аллен может получить одну 100-долларовую купюру, одну купюру в 20 долларов и одну купюру в 5 долларов.
Нельзя получить 125 долларов с помощью одной или двух купюр.

Во втором примере Аллен может получить две 20-долларовые купюры и три купюры в 1 доллар.

В третьем примере Аллен может снять 100000000(десять миллионов!) 100-долларовых купюр.
