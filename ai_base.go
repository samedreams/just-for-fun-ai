package main

import (
	"fmt"
	"strings"
)

/**
 * AI核心代码，估值100亿
 */
func main() {
	var Str string;

	for {
		fmt.Scanln(&Str)
		Str = strings.Replace(Str, "吗", "", -1)
		Str = strings.Replace(Str, "?", "！", -1)
		Str = strings.Replace(Str, "？", "！", -1)
		fmt.Println(Str)
	}
}
