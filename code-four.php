大纲：fastcgi和cgi

1、cgi是通信协议，是http与服务器通信的一个协议，当一个http请求触发的时
候，cgi会生成一个进程保证http请求和服务器的通信

2、FastCGI是cgi的升级版本，叫进程管理器，它管理了一些cgi进程，变为守护进程，不用像cgi
一样每次去fork一次，这也就是为什么，它效率比cgi高的原因

FastCGI工作原理

1）、Web Server启动时载入FastCGI进程管理器
2）、FastCGI进程管理器初始化，启动多个解释器进程
3）、当客户端请求到达web server时，FastCGI进程管器选择并连接到一个CGI解释器
4）、FastCGI子进程 完成处理后返回结果，将标准输出和错误信息从同一连接返回web server

3、我们在搭建编译环境的时候，FastCGI的修改就是修改PHP的一个叫做php-fpm的配置文件，这个
就是FastCGI的配置文件



