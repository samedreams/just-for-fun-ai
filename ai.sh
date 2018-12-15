#!/bin/bash
: << !
! AI核心代码，估值100亿美金
!

:(){ read;echo 冰冰：$(echo $REPLY | sed 's/吗//;s/\?/！/;s/？/！/');:;};:
