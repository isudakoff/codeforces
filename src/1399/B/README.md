# B. Уравнивание подарков

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

У вас есть n подарков, и вы хотите подарить все эти подарки детям. Конечно же, вам не хочется кого-то обидеть,
поэтому все подарки должны быть равны между собой. i-й подарок состоит из ai конфет и bi апельсинов.

За один ход вы можете выбрать некоторый подарок 1 ≤ i ≤ n и совершить одно из следующих действий:

- съесть ровно одну конфету из этого подарка (уменьшить ai на один);
- съесть ровно один апельсин из этого подарка (уменьшить bi на один);
- съесть ровно одну конфету и ровно один апельсин из этого подарка (уменьшить и ai, и bi на один).

Разумеется, вы не можете съесть конфету или апельсин, если их нет в подарке (поэтому ни ai, ни bi не могут стать меньше
нуля).

Как было сказано выше, все подарки должны быть равны. Это означает, что после некоторой последовательности ходов должны
быть выполнены следующие два условия: a1 = a2 = ⋯ = an и b1 = b2 = ⋯ = bn (и равенство ai и bi не является необходимым).

Ваша задача — найти минимальное количество ходов, необходимое, чтобы уравнять все заданные подарки.

Вам необходимо ответить на t независимых наборов тестовых данных.

## Входные данные

Первая строка теста содержит одно целое число t (1 ≤ t ≤ 1000) — количество наборов тестовых данных. Затем следуют t
наборов тестовых данных.

Первая строка набора тестовых данных содержит одно целое число n (1 ≤ n ≤ 50) — количество подарков. Вторая строка
набора тестовых данных содержит n целых чисел a1, a2, …, an (1 ≤ a i ≤ 10^9), где ai — количество конфет в i-м подарке.
Третья строка набора тестовых данных содержит n целых чисел b1, b2, …, bn (1 ≤ b i ≤ 10^9), где bi — количество
апельсинов в i-м подарке.

## Выходные данные

Для каждого набора тестовых данных выведите одно целое число: минимальное количество ходов, необходимое, чтобы уравнять
все заданные подарки.

## Примеры
### входные данные
```
5
3
3 5 6
3 2 3
5
1 2 3 4 5
5 4 3 2 1
3
1 1 1
2 2 2
6
1 1000000000 1000000000 1000000000 1000000000 1000000000
1 1 1 1 1 1
3
10 12 8
7 5 4
```
### выходные данные
```
6
16
0
4999999995
7
```

## Примечание

В первом наборе тестовых данных примера мы можем выполнить следующую последовательность ходов:

- выбрать первый подарок и съесть один апельсин из него, таким образом `a = [3, 5, 6]` и `b = [2, 2, 3]`;
- выбрать второй подарок и съесть одну конфету из него, таким образом `a = [3, 4, 6]` и `b = [2, 2, 3]`;
- выбрать второй подарок и съесть одну конфету из него, таким образом `a =[3, 3, 6]` и `b = [2, 2, 3]`;
- выбрать третий подарок и съесть одну конфету и один апельсин из него, таким образом `a = [3, 3, 5]` и `b = [2, 2, 2]`;
- выбрать третий подарок и съесть одну конфету из него, таким образом `a = [3, 3, 4]` и `b = [2, 2, 2]`;
- выбрать третий подарок и съесть одну конфету из него, таким образом `a = [3, 3, 3]` и `b = [2, 2, 2]`.