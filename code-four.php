大纲：fastcgi和cgi

1、cgi是通信协议，是http与服务器通信的一个协议，当一个http请求触发的时
候，cgi会生成一个进程保证http请求和服务器的通信

2、fastcgi是cgi的升级版本，它管理了一些cgi进程，变为守护进程，不用像cgi
一样每次去fork一次，这也就是为什么，它效率比cgi高的原因
