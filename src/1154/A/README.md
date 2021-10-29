# A. Восстановление трех чисел

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

Поликарп загадал три целых положительных числа a, b и c. Эти числа он держит в секрете, но он выписал на доску в
случайном порядке четыре числа — их попарные суммы (три числа) и сумму всех трех чисел (одно число). Таким образом, на
доске в случайном порядке записаны четыре числа: a + b, a + c, b + c и a + b + c. По заданным числам восстановите три
загаданных Поликарпом числа a, b и c. Выведите три загаданные числа в любом порядке. Обратите внимание, что среди
загаданных чисел a ,b и c могут быть одинаковые значения (в том числе допустимо, что a = b = c).

## Входные данные

В единственной строке входных данных записаны четыре целых положительных числа x1, x2, x3, x4 (2 ≤ x i ≤ 10^9) — числа
на доске, заданные в случайном порядке. Гарантируется, что для заданных чисел x1, x2, x3, x4 ответ существует.

## Выходные данные

Выведите такие целые положительные a, b и c, что четыре числа на доске — это записанные в некотором порядке значения a +
b, a + c, b + c и a + b + c. Выведите a, b и c в любом порядке. Если ответов несколько, то выведите любой из них.
Гарантируется, что ответ существует.

## Примеры
### входные данные
```
3 6 5 4
```
### выходные данные
```
2 1 3
```

### входные данные
```
40 40 40 60
```
### выходные данные
```
20 20 20
```

### входные данные
```
201 101 101 200
```
### выходные данные
```
1 100 100
```