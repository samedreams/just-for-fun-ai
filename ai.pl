#!/usr/bin/perl

=pod
 AI核心代码，估值100亿美金
=cut

while(true){$str=<STDIN>;$str=~s/吗//g;$str=~s/\?|？/！/g;print "冰冰：$str";}