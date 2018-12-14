package main

import (
    "fmt"
    "strings"
)

/**
 * AI 核心代码，估值100亿美金
 */

//回答问题协程
func answer(hh chan string) {
    for {
        str := <-hh

        str = strings.Replace(str, "吗", "", -1)
        str = strings.Replace(str, "?", "!", -1)
        str = strings.Replace(str, "？", "！", -1)

        fmt.Println("AI：", str)
    }
}

//接受问题协程
func question(hh chan string) {
    var str string

    for {
        fmt.Scanln(&str)
        hh <- str
    }
}

func main() {
    haha := make(chan string)

    go question(haha)
    go answer(haha)

    var do chan int
    <-do
}
