package main

import (
	"fmt"
	"bufio"
	"os"
)

func main() {

    var n, k, n2, nm2, a int64

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &n)
    fmt.Fscan(in, &k)

    n2 = n / 2
    nm2 = n % 2

    if ((k - nm2) > n2) {
        a = (k - n2 - nm2) * 2
    } else {
        a = k * 2 - 1
    }

    fmt.Println(a)

}
