package main

import (
	"fmt"
	"bufio"
	"os"
	"strings"
	"strconv"
)

func removeZero(x int) (int, error) {
    var s = strconv.Itoa(x)

    s = strings.Replace(s, "0", "", -1)

    return strconv.Atoi(s)
}

func main() {

    const NO = "NO"
    const YES = "YES"

    var a, b, c int
    var res string

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &a)
    fmt.Fscan(in, &b)

    c = a + b

    a, _ = removeZero(a)
    b, _ = removeZero(b)
    c, _ = removeZero(c)

    if c == a + b {
        res = YES
    } else {
        res = NO
    }

    fmt.Println(res)

}
