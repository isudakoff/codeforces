package main

import (
	"bufio"
	"flag"
	"fmt"
	"log"
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

	c := 0
	n := getInt()
	home := make([]int, n)
	nohome := make([]int, n)

	for i := 0; i < n; i++ {
		home[i] = getInt()
		nohome[i] = getInt()
	}

	for i := 0; i < n; i++ {
		for j := 0; j < n; j++ {
			if i == j {
				continue
			}

			if home[i] == nohome[j] {
				c++
			}
		}
	}

	writeInt(c)
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

func writeInt(d int) {
	_, _ = writer.WriteString(fmt.Sprintf("%d\n", d))
}

func writeInt64(d int64) {
	_, _ = writer.WriteString(fmt.Sprintf("%d\n", d))
}

func writeFloat64(f float64) {
	_, _ = writer.WriteString(fmt.Sprintf("%.2f\n", f))
}
