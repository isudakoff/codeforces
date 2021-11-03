package main

import (
	"bufio"
	"flag"
	"fmt"
	"log"
	"os"
	"sort"
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

	t := getInt()

	for i := 0; i < t; i++ {
		n := getInt()
		s := make([]int, n)

		for j := 0; j < n; j++ {
			s[j] = getInt()
		}

		sort.Ints(s)

		min := 1000

		for j := 1; j < n; j++ {
			r := s[j] - s[j-1]

			if r < min {
				min = r
			}
		}

		writeInt(min)
	}
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

func writeInt(d int) {
	_, _ = writer.WriteString(fmt.Sprintf("%d\n", d))
}
