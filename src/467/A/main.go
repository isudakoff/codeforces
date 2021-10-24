package main

import (
	"fmt"
)

func main() {

	var n, p, q, c int

	fmt.Scanf("%d\n", &n)

    for i := 0; i < n ; i++ {
        fmt.Scanf("%d %d\n", &p, &q)

        if (q - p >= 2) {
            c++
        }
    }

    fmt.Println(c)

}
