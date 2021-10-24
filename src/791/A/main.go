package main

import (
	"fmt"
)

func main() {

	const AK = 3
	const BK = 2

	var a int
	var b int
	var c int

	fmt.Scanf("%d %d", &a, &b)

	for i := 0; a <= b; i++ {
	    c++
		a *= AK
		b *= BK
	}

	fmt.Println(c)

}
