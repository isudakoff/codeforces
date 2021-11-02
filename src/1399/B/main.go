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

	scanner.Split(bufio.ScanWords)

	t := getInt64()

	for j := int64(0); j < t; j++ {
		n := getInt64()

		a := make([]int64, n)
		minA := int64(math.Pow10(9))

		for i := int64(0); i < n; i++ {
			a[i] = getInt64()

			if a[i] < minA {
				minA = a[i]
			}
		}

		b := make([]int64, n)
		minB := int64(math.Pow10(9))

		for i := int64(0); i < n; i++ {
			b[i] = getInt64()

			if b[i] < minB {
				minB = b[i]
			}
		}

		c := int64(0)

		for i := int64(0); i < n; i++ {
			c += int64(math.Max(float64(a[i] - minA), float64(b[i] - minB)))
		}

		writeInt64(c)
	}
}

func getInt64() int64 {
	scanner.Scan()

	x, _ := strconv.ParseInt(scanner.Text(), 10, 64)

	return x
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

func writeInt64(d int64) {
	_, _ = writer.WriteString(fmt.Sprintf("%d\n", d))
}
