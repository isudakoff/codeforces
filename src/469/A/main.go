package main

import (
	"fmt"
	"bufio"
	"os"
)

func main() {

    var n, p, q, pi, qi int

    a := map[int]int{}

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &n)
    fmt.Fscan(in, &p)

    for i := 0; i < p; i++ {
        fmt.Fscan(in, &pi)
        a[pi]++
    }

    fmt.Fscan(in, &q)

    for i := 0; i < q; i++ {
        fmt.Fscan(in, &qi)
        a[qi]++
    }

    if (len(a) == n) {
        fmt.Println("I become the guy.")
    } else {
        fmt.Println("Oh, my keyboard!")
    }

}
