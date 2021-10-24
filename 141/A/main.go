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

type sortRunes []rune

func (s sortRunes) Less(i, j int) bool {
	return s[i] < s[j]
}

func (s sortRunes) Swap(i, j int) {
	s[i], s[j] = s[j], s[i]
}

func (s sortRunes) Len() int {
	return len(s)
}

func SortString(s string) string {
	r := []rune(s)
	sort.Sort(sortRunes(r))
	return string(r)
}

func main() {
	flag.Parse()

	setScanner()
	setWriter()

	defer writer.Flush()

	s1 := getString()
	s2 := getString()
	s3 := getString()
	s4 := s1 + s2

	s3 = SortString(s3)
	s4 = SortString(s4)

	if s3 == s4 {
		writeString("YES")
	} else {
		writeString("NO")
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

func writeInt(d int) {
	_, _ = writer.WriteString(fmt.Sprintf("%d\n", d))
}

func writeInt64(d int64) {
	_, _ = writer.WriteString(fmt.Sprintf("%d\n", d))
}

func writeFloat64(f float64) {
	_, _ = writer.WriteString(fmt.Sprintf("%.2f\n", f))
}
