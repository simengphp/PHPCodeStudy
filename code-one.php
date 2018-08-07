1、首先去www.php.net下下载源码<br>
2、然后编译安装好之后会出现一个php-xxx（版本号的文件夹）这里面就是php的源代码了<br>
3、PHP的目录结构为：<br>
● 根目录: / 这个目录包含的东西比较多，主要包含一些说明文件以及设计方案。 其实项目中的这些README文件是非常值得阅读的例如：<br>
<br><br>○ /README.PHP4-TO-PHP5-THIN-CHANGES 这个文件就详细列举了PHP4和PHP5的一些差异。<br>
<br><br>○ 还有有一个比较重要的文件/CODING_STANDARDS，如果要想写PHP扩展的话，这个文件一定要阅读一下， 不管你个人的代码风格是什么样，怎么样使用缩进和花括号，既然来到了这样一个团体里就应该去适应这样的规范，这样在阅读代码或者别人阅读你的 代码是都会更轻松。
<br>● build 顾名思义，这里主要放置一些和源码编译相关的一些文件，比如开始构建之前的buildconf脚本等文件，还有一些检查环境的脚本等。
<br>● ext 官方扩展目录，包括了绝大多数PHP的函数的定义和实现，如array系列，pdo系列，spl系列等函数的实现，都在这个目录中。个人写的扩展在测试时也可以放到这个目录，方便测试和调试。
<br>● main 这里存放的就是PHP最为核心的文件了，主要实现PHP的基本设施，这里和Zend引擎不一样，Zend引擎主要实现语言最核心的语言运行环境。
<br>● Zend Zend引擎的实现目录，比如脚本的词法语法解析，opcode的执行以及扩展机制的实现等等。
<br>● pear “PHP 扩展与应用仓库”，包含PEAR的核心文件。
<br>● sapi 包含了各种服务器抽象层的代码，例如apache的mod_php，cgi，fastcgi以及fpm等等接口。
<br>● TSRM PHP的线程安全是构建在TSRM库之上的，PHP实现中常见的*G宏通常是对TSRM的封装，TSRM(Thread Safe Resource Manager)线程安全资源管理器。
<br>● tests PHP的测试脚本集合，包含PHP各项功能的测试文件
<br>● win32 这个目录主要包括Windows平台相关的一些实现，比如sokcet的实现在Windows下和*Nix平台就不太一样，同时也包括了Windows下编译PHP相关的脚本。
4、












