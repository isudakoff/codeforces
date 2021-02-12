package main

import (
	"bufio"
	"fmt"
	"os"
	"sort"
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

type Friend struct {
	Name   string
	Points int
}

type Friends []*Friend

func (friends Friends) Len() int {
	return len(friends)
}

func (friends Friends) Swap(i, j int) {
	friends[i], friends[j] = friends[j], friends[i]
}

func (friends Friends) Less(i, j int) bool {
	a, b := friends[i], friends[j]

	if a.Points != b.Points {
		return a.Points > b.Points
	}

	return a.Name < b.Name
}

func main() {

	const ACTION_POSTED = "posted"
	const ACTION_COMMENTED = "commented"
	const ACTION_LIKES = "likes"

	const VALUE_POSTED = 15
	const VALUE_COMMENTED = 10
	const VALUE_LIKES = 5

	scanner = bufio.NewScanner(os.Stdin)
	writer = bufio.NewWriter(os.Stdout)

	scanner.Split(bufio.ScanWords)
	defer writer.Flush()

	me := getString()
	data := map[string]int{}
	n := getInt()

	for i := 0; i < n; i++ {
		firstName, action := getString(), getString()
		points := VALUE_POSTED

		if action == ACTION_POSTED {
			getString()
		} else if action == ACTION_COMMENTED {
			points = VALUE_COMMENTED

			getString()
		} else if action == ACTION_LIKES {
			points = VALUE_LIKES
		} else {
			points = 0
		}

		secondName := getString()
		secondName = secondName[0 : len(secondName)-2]

		getString()

		_, _ = fmt.Fprintf(os.Stderr, "firstName = %s, secondName = %s\n", firstName, secondName)

		if data[firstName] == 0 {
			data[firstName] = 0
		}

		if data[secondName] == 0 {
			data[secondName] = 0
		}

		if firstName == me {
			data[secondName] += points
		}

		if secondName == me {
			data[firstName] += points
		}
	}

	var friends []*Friend

	for name, points := range data {
		friends = append(friends, &Friend{name, points})
	}

	sort.Sort(Friends(friends))

	for _, friend := range friends {
		_, _ = fmt.Fprintf(os.Stderr, "%s %d\n", friend.Name, friend.Points)
	}

	for _, friend := range friends {
		if friend.Name != me {
			_, _ = writer.WriteString(fmt.Sprintf("%s\n", friend.Name))
		}
	}
}
