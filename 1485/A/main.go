package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

var scanner *bufio.Scanner
var writer *bufio.Writer

func getInt64() int64 {
	scanner.Scan()

	x, _ := strconv.ParseInt(scanner.Text(), 10, 64)

	return x
}

func getInt() int {
	return int(getInt64())
}

func getFloat() float64 {
	scanner.Scan()

	x, _ := strconv.ParseFloat(scanner.Text(), 64)

	return x
}

func getString() string {
	scanner.Scan()
	return scanner.Text()
}

func main() {

	scanner = bufio.NewScanner(os.Stdin)
	writer = bufio.NewWriter(os.Stdout)

	scanner.Split(bufio.ScanWords)
	defer writer.Flush()

	t := getInt()

	for i := 0; i < t; i++ {
		var c int

		a, b := getInt(), getInt()

		for a > 0 {
			c++

			if (a == b || b % 3 > 0) && (a / b > 0){
				b++
			} else {
				a /= b
			}

			_, _ = fmt.Fprintf(os.Stderr, "%d %d %d\n", a, b, c)
		}

		_, _ = writer.WriteString(fmt.Sprintf("%d\n", c))
	}
}
