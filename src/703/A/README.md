# A. Мишка и игра

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

Мишка — маленький белый медвежонок. А как известно, маленькие медвежата в свободное время любят играть в кости на
шоколадки. Одним замечательным солнечным утром, гуляя по льдинам, Мишка встретила своего друга Криса, которому и
предложила сыграть в эту занимательную игру.

Правила её очень просты: сначала определяется значение n — количество раундов игры. В очередном раунде каждый из игроков
один раз бросает стандартный игральный кубик, на грани которого нанесены различные числа от 1 до 6. Игрок, выбросивший
большее значение, становится победителем в раунде. В случае, если выпавшие значения равны, победа не засчитывается
никому.

В самой же игре побеждает участник, выигравший в большем количестве раундов. Если же количества побед, заслуженных
игроками, равны, то объявляется ничья.

Мишка ещё совсем маленькая и плохо умеет вести счёт, а потому попросила Вас понаблюдать за ходом игры и сообщить ей
результат. Помогите ей!

## Входные данные

В первой строке входных данных содержится число n (1 ≤ n ≤ 100) — количество раундов игры.

Следующие n строк содержат описание раундов. В i-й из них содержится пара целых чисел mi и ci (1 ≤ mi, ci ≤ 6) —
результаты бросков Мишки и Криса в i-ом раунде соответственно.

## Выходные данные

В случае победы Мишки в единственной строке выведите "Mishka" (без кавычек), а в случае победы Криса выведите "Chris" (
без кавычек). Если же игра сведётся к ничьей, то выведите "Friendship is magic!^^" (без кавычек).

## Примеры
### входные данные
```
3
3 5
2 1
4 2
```
### выходные данные
```
Mishka
```

### входные данные
```
2
6 1
1 6
```
### выходные данные
```
Friendship is magic!^^
```

### входные данные
```
3
1 5
3 3
2 2
```
### выходные данные
```
Chris
```

## Примечание

В первом примере Мишка проигрывает в первом раунде, однако выигрывает во втором и третьем, а потому становится
победителем.

Во втором примере Мишка выигрывает в первом раунде, Крис выигрывает во втором раунде, и игра со счётом 1:1 сводится к
ничьей.

В третьем примере первый раунд выигрывает Крис, а два последующих раунда играются вничью. Победитель — Крис.