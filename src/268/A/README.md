# A. Матчи

- ограничение по времени на тест: **1 second**
- ограничение по памяти на тест: **256 megabytes**
- ввод: стандартный ввод
- вывод: стандартный вывод

---

Манао работает на спортивном телевидении. Он долгое время наблюдал за футбольными матчами чемпионата одной страны и
начал замечать разные закономерности. Например, у каждой команды есть две формы: домашняя и выездная. Когда команда
проводит матч на своем стадионе, футболисты надевают домашнюю форму, а когда на чужом — выездную. Единственное
исключение из этого правила — когда цвет домашней формы принимающей команды совпадает с цветом формы гостей. В таком
случае домашняя команда облачается в свою выездную форму. Цвета домашней и выездной формы для каждой команды различны.

В чемпионате страны участвует n команд и он состоит из n·(n - 1) матчей: каждая из команд принимает каждую другую
команду на своем стадионе. Манао задумался, а сколько раз в течение одного чемпионата случится, что команда, играющая на
своем стадионе, оденет выездную форму? Обратите внимание, что для подсчета этого количества порядок матчей не играет
никакого значения.

Вам даны цвета домашней и выездной формы каждой команды. Для удобства эти цвета пронумерованы целыми числами таким
образом, что никакие два разных цвета не имеют одинаковый номер. Помогите Манао найти ответ на его вопрос.

## Входные данные

В первой строке содержится целое число n (2 ≤ n ≤ 30). В каждой из следующих n строк записана пара разделенных одним
пробелом различных целых чисел hi, ai (1 ≤ hi, ai ≤ 100) — номер цвета домашней и выездной форм i-ой команды
соответственно.

## Выходные данные

В единственной строке выведите количество матчей, в которых домашняя команда выступит в выездной форме.

## Примеры

### входные данные

3 1 2 2 4 3 4

### выходные данные

1

### входные данные

4 100 42 42 100 5 42 100 5

### выходные данные

5

### входные данные

2 1 2 1 2

### выходные данные

0

## Примечание

В первом тестовом примере чемпионат состоит из 6 матчей. Единственный поединок, в котором произойдет интересное нам
событие — матч между командами 2 и 1 на стадионе команды 2.

Во втором тестовом примере домашней команде придется сменить форму в матчах между командами: 1 и 2, 2 и 1, 2 и 3, 3 и 4,
4 и 2 (первой написана принимающая команда).
