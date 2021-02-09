package main

import (
	"fmt"
	"strings"
)

func intScanln(n int) ([]int, error) {
    x := make([]int, n)
    y := make([]interface{}, len(x))

    for i := range x {
        y[i] = &x[i]
    }

    n, err := fmt.Scanln(y...)

    x = x[:n]

    return x, err
}

func arrayToString(a []int, delim string) string {
    return strings.Trim(strings.Replace(fmt.Sprint(a), " ", delim, -1), "[]")
    //return strings.Trim(strings.Join(strings.Split(fmt.Sprint(a), " "), delim), "[]")
    //return strings.Trim(strings.Join(strings.Fields(fmt.Sprint(a)), delim), "[]")
}

func main() {

	var n int

	fmt.Scanf("%d\n", &n)

    p, _ := intScanln(n)

    r := make([]int, n)

    for i := 0; i < n; i++ {
        r[p[i] - 1] = i + 1
    }

    fmt.Println(arrayToString(r, " "))

}
