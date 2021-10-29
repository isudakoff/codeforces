package main

import (
	"bufio"
	"flag"
	"fmt"
	"log"
	"math"
	"os"
	"strconv"
)

var scanner *bufio.Scanner
var writer *bufio.Writer

var (
	localEnv       = flag.Bool("local", false, "Enable Local environment")
	inputFileName  = flag.String("input", "input.txt", "Input filename")
	outputFileName = flag.String("output", "output.txt", "Output filename")
)

func main() {
	flag.Parse()

	setScanner()
	setWriter()

	defer writer.Flush()

	n := getInt()

	for i := 4; i < n-4; i++ {
		x := math.Sqrt(float64(i))
		y := math.Sqrt(float64(n - i))

		if (math.Mod(x, 1.0) == 0.0 || i%2 == 0) && (math.Mod(y, 1.0) == 0 || ((n-i)%2) == 0) {
			writeInts(i, n-i)
			break
		}
	}
}

func getString() string {
	scanner.Scan()

	return scanner.Text()
}

func getInt64() int64 {
	scanner.Scan()

	x, _ := strconv.ParseInt(scanner.Text(), 10, 64)

	return x
}

func getInt() int {
	return int(getInt64())
}

func setScanner() {
	if *localEnv {
		inputFile, err := os.Open(*inputFileName)

		if err != nil {
			log.Fatalf("failed opening file: %s", err)
		}

		scanner = bufio.NewScanner(inputFile)
	} else {
		scanner = bufio.NewScanner(os.Stdin)
	}
}

func setWriter() {
	if *localEnv {
		outputFile, err := os.Create(*outputFileName)

		if err != nil {
			log.Fatalf("failed opening file: %s", err)
		}

		writer = bufio.NewWriter(outputFile)
	} else {
		writer = bufio.NewWriter(os.Stdout)
	}
}

func writeString(str string) {
	_, _ = writer.WriteString(fmt.Sprintf("%s\n", str))
}

func writeInts(d1 int, d2 int) {
	_, _ = writer.WriteString(fmt.Sprintf("%d %d\n", d1, d2))
}

func writeInt64(d int64) {
	_, _ = writer.WriteString(fmt.Sprintf("%d\n", d))
}

func writeFloat64(f float64) {
	_, _ = writer.WriteString(fmt.Sprintf("%.2f\n", f))
}
