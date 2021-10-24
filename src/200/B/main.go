package main

import (
	"fmt"
	"bufio"
	"os"
)

func main() {

    var n, p int
    var res float32

    c := 0

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &n)

    for i := 0; i < n; i++ {
        fmt.Fscan(in, &p)

        c += p
    }

    res = (float32(c)/(float32(n)*100.0))*100.0

    fmt.Printf("%.5f", res)
}
