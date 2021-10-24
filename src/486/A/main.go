package main

import (
	"fmt"
	"bufio"
	"os"
)

func main() {

    var n int64

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &n)

    var result int64

    if 0 == n % 2 {
        result = n / 2
    } else {
        result = -((n + 1) / 2)
    }

    fmt.Println(result)

}
