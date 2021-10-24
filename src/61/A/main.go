package main

import (
	"fmt"
	"bufio"
	"os"
	"strings"
)

func main() {

    var a, b string

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &a)
    fmt.Fscan(in, &b)

    var len int

    len = strings.Count(a, "") - 1

    for i := 0; i < len; i++ {
        if (string(b[i]) == string(a[i])) {
            fmt.Print("0")
        } else {
            fmt.Print("1")
        }
    }

}
