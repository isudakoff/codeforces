package main

import (
	"fmt"
	"strings"
)

func main() {

    const A_WIN = "Anton"
    const D_WIN = "Danik"
    const F_WIN = "Friendship"

	var n int
	var s string
    var cA, cD int

	fmt.Scanf("%d\n", &n)
	fmt.Scanf("%s", &s)

    cA = strings.Count(s, "A")
    cD = strings.Count(s, "D")

    if (cA > cD) {
        fmt.Println(A_WIN)
    }

    if (cD > cA) {
        fmt.Println(D_WIN)
    }

    if (cA == cD) {
        fmt.Println(F_WIN)
    }
}
