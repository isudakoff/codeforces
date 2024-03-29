# A. Командная олимпиада

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

В школе №0 столицы Берляндии учатся n школьников. Все ребята в этой школе способные: у кого-то склонность к
программированию, у кого-то склонность к математике, а у остальных — к физкультуре. Таким образом, для каждого школьника
известна величина ti:

- ti = 1, если i-й школьник имеет склонность к программированию,
- ti = 2, если i-й школьник имеет склонность к математике,
- ti = 3, если i-й школьник имеет склонность к физкультуре

Так сложилось, что каждый школьник имеет склонность ровно к одному из этих трех предметов.

На командную олимпиаду по научному многоборью требуются команды по три человека. Учителя школы решили, что команды будут
составлены из трех школьников со склонностями к разным предметам. Иными словами, в каждой команде должен быть один
математик, один программист и один спортсмен. Разумеется, каждый учащийся может быть членом не более чем одной команды.

Какое наибольшее количество команд школа сможет выставить на олимпиаду? Как для этого следует формировать команды?

## Входные данные

В первой строке записано целое число n (1 ≤ n ≤ 5000) — количество учащихся в школе. Во второй строке записаны n целых
чисел t1, t2, ..., tn (1 ≤ ti ≤ 3), где ti описывает склонность i-го школьника.

## Выходные данные

В первой строке выведите целое число w — искомое наибольшее количество команд.

Далее выведите w строк по три числа в каждой строке. Каждая такая тройка должна обозначать номера школьников, образующих
команду. Как команды, так и числа в тройках можно выводить в любом порядке. Школьники пронумерованы целыми числами от 1
до n в порядке их описания во входных данных. Каждый школьник должен участвовать не более чем в одной команде. Если
решений несколько, выведите любое.

Если ни одну команду невозможно составить, то выведите единственную строку со значением w равным 0.

## Примеры
### входные данные
```
7
1 3 1 3 2 1 2
```
### выходные данные
```
2
3 5 2
6 7 4
```

### входные данные
```
4
2 1 1 2
```
### выходные данные
```
0
```
