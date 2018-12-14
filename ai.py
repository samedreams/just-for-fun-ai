while True:
    sc = input('ME:')
    strOut = sc
    strOut = strOut.replace('吗','')
    strOut = strOut.replace('?','!')
    strOut = strOut.replace('？','！')
    print('AI:'+strOut)