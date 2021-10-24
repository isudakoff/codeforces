package main

import (
	"fmt"
	"bufio"
	"os"
)

func main() {

	var n, c int
	var s, p string

	fmt.Scanf("%d\n", &n)

    scanner := bufio.NewScanner(os.Stdin)

    for i := 0; i < n; i++ {
        scanner.Scan()

        s = scanner.Text()

        if (s != p) {
            p = s
            c++
        }
    }

    fmt.Println(c)

}
