package main

import (
	"fmt"
	"bufio"
	"os"
)

func main() {

    var s1, s2, s3, s4 int64

    a := map[int64]int{}

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &s1)
    fmt.Fscan(in, &s2)
    fmt.Fscan(in, &s3)
    fmt.Fscan(in, &s4)

    a[s1]++
    a[s2]++
    a[s3]++
    a[s4]++

    res := 0

    for  _, value := range a {
        if (value > 1) {
            res += value - 1
        }
    }

    fmt.Println(res)

}
