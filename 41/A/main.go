package main

import (
	"fmt"
)

func reverse(s string) string {
    rs := []rune(s)

    for i, j := 0, len(rs) - 1; i < j; i, j = i+1, j-1 {
        rs[i], rs[j] = rs[j], rs[i]
    }

    return string(rs)
}

func main() {

	var s, t string

	fmt.Scanf("%s\n", &s)
	fmt.Scanf("%s", &t)

    if (s == reverse(t)) {
	    fmt.Println("YES")
    } else {
	    fmt.Println("NO")
    }
}
