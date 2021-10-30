# B. Сбалансированный массив

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

Вам задано положительное целое число n, гарантируется, что n четное (то есть делится на 2). Вы хотите построить такой
массив a длины n, что: Первые n2 элементов a четные (делятся на 2); вторые n2 элементов a нечетные (не делятся на 2);
все элементы в a различны и положительны; сумма элементов первой половины равна сумме элементов второй половины (
∑𝑖=1𝑛2𝑎𝑖=∑𝑖=𝑛2+1𝑛𝑎𝑖). Если есть несколько ответов, вы можете вывести любой. Не гарантируется, что ответ
существует. Вам нужно ответить на t независимых наборов тестовых данных.

## Входные данные

Первая строка теста содержит одно целое число t (1 ≤ t ≤ 10^4) — количество наборов тестовых данных. Затем следуют t
наборов тестовых данных. Единственная строка набора тестовых данных содержит одно целое число n (2 ≤ n ≤ 2*10^5) — длину
массива. Гарантируется, что n четное (то есть делится на 2). Гарантируется, что сумма чисел n по всем наборам тестовых
данных не превосходит 2*10^5(∑n ≤ 2 * 10^5).

## Выходные данные

Для каждого набора тестовых данных выведите ответ на него — «NO» (без кавычек), если не существует подходящего ответа
для заданного набора, или «YES» первой строкой и любой подходящий массив a1, a2, …, an (1 ≤ a i ≤ 10^9), удовлетворяющий
условиям из условия задачи, второй строкой.

## Примеры
### входные данные
```
5
2
4
6
8
10
```
### выходные данные
```
NO
YES
2 4 1 5
NO
YES
2 4 6 8 1 3 5 11
NO
```