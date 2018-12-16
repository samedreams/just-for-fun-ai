/**
 * AI核心代码，估值100亿美金
 *
 */
use std::io;

fn main() {
    let mut buf = String::new();
    while true {
        io::stdin().read_line(&mut buf).ok().expect("Error!");
        let str:String = buf.trim().chars()
            .map(|x| match x { 
                '吗' => ' ', 
                '?' => '！', 
                '？' => '！',
                _ => x}
            ).collect();
        println!("冰冰：{}", str);
        buf.clear();
    }
}