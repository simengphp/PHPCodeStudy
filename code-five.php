PHP脚本执行

1、PHP大家都知道它是解释型语言，我们每次执行的时候都会从新编译，但是现代
PHP为了提升效率和性能，也会有一些缓存扩展，防止每次运行编译，消耗性能

2、PHP脚本执行的依托载体是zend引擎，这个就是PHP的发动机，zend对一个脚本文件
词法分析（执行文件在PHP_DOC/Zend/zend_language_scanner.l）-》语法分析-》编
译成opcode，如果安装了缓存扩展，将直接从扩展里面获取

3、