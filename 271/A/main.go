package main

import (
	"fmt"
	"strings"
	"strconv"
)

func main() {

	var y int
    var str string

	fmt.Scanf("%d", &y)

    for i := y + 1; str == "" ; i++ {
        str = strconv.Itoa(i)

        for _, r := range str {
            c := string(r)

            if (strings.Count(str, c) > 1) {
                str = ""

                break
            }
        }
    }

    fmt.Println(str)

}
