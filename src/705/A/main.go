package main

import (
	"fmt"
	"bufio"
	"os"
)

func main() {

    const I_HATE = "I hate"
    const I_LOVE = "I love"
    const GLUE = " that "
    const SUFFIX = " it"

    var n int
    var s string

    in := bufio.NewReader(os.Stdin)

    fmt.Fscan(in, &n)

    s += I_HATE

    for i := 1; i < n; i++ {
        if (i % 2) == 0 {
            s += GLUE + I_HATE
        } else {
            s += GLUE + I_LOVE
        }
    }

    fmt.Println(s + SUFFIX)

}
