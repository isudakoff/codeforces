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

    var c, max, value, prev uint64 = uint64(0), uint64(0), uint64(0), uint64(0)

    for i := int64(0); i < n; i++ {
        fmt.Fscan(in, &value)

        if value >= prev {
            c++

            if (c > max) {
                max = c
            }
        } else {
            c = 1
        }

        prev = value
    }

    fmt.Println(max)

}
