package main

import (
	"fmt"
	"unicode"
	"strings"
)

func main() {

	var s string
	var upper int
	var lower int

	fmt.Scanf("%s", &s)

    for _, r := range s {
        if unicode.IsUpper(r) {
            upper++
        } else {
            lower++
        }
    }

    if (lower >= upper) {
        s = strings.ToLower(s)
    } else {
        s = strings.ToUpper(s)
    }

	fmt.Println(s)

}
