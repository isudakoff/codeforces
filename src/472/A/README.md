# A. Уроки дизайна задач: учимся у математики

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

Один из способов придумать новую задачу: использовать математику. Например, можно придумать какое-нибудь рандомное
математическое утверждение или модифицировать некоторые теоремы, чтобы получить что-то новое. Используя такие методы,
можно придумать новую задачу.

Например, есть утверждение под названием «Гипотеза Гольдбаха». Оно гласит: «каждое четное число не менее четырех можно
представить в виде суммы двух простых чисел». Давайте модифицируем его следующим образом: «каждое целое число не менее
12 можно представить в виде суммы двух составных чисел». В отличие от гипотезы Гольдбаха, я могу доказать эту гипотезу.

Вам дано целое число n не менее 12, представьте его в виде суммы двух составных чисел.

## Входные данные

В единственной строке записано целое число n (12 ≤ n ≤ 1000000).

## Выходные данные

Выведите два таких составных целых числа x и y (1 < x, y < n), что x + y = n. Если есть несколько правильных ответов,
можно вывести любой из них.

## Примеры
### входные данные
```
12
```
### выходные данные
```
4 8
```

### входные данные
```
15
```
### выходные данные
```
6 9
```

### входные данные
```
23
```
### выходные данные
```
8 15
```

### входные данные
```
1000000
```
### выходные данные
```
500000 500000
```

## Примечание

В первом примере 12 = 4 + 8. Числа 4 и 8 составные. Можно также вывести «6 6» или «8 4».

Во втором примере 15 = 6 + 9. Обратите внимание на то, что нельзя вывести «1 14», так как 1 — это не составное число.
