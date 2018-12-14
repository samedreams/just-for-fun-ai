replaceWords = (('吗',''),('?','!'),('？','！'))
while True:
    sc = input('ME:')
    for replaceWord in replaceWords:
        sc = sc.replace(replaceWord[0],replaceWord[1])
    print('AI:'+sc)