package main

import (
	"fmt"
)

func main() {

	var x int
	var c int

	fmt.Scanf("%d", &x)

	for ; x >= 5; {
	    x -= 5
	    c++
	}

	for ; x >= 4; {
	    x -= 4
	    c++
	}

	for ; x >= 3; {
        x -= 3
	    c++
	}

	for ; x >= 2; {
	    x -= 2
	    c++
	}

    c += x

//     fmt.Printf("%d: %d, %d, %d, %d, %d\n", c, counter5, counter4, counter3, counter2, x)

	fmt.Println(c)

}
