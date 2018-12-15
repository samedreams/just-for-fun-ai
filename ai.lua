--[[
 AI核心代码，估值100亿美金
--]]
 
while (true) do
    local str = io.read()
    str = string.gsub(str, "吗", '')
    str = string.gsub(str, "?", '！')
    str = string.gsub(str, "？", '！')
    print(string.format('冰冰：%s', str))
end