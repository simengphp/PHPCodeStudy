PHP7内核分析

1、zend引擎是属于翻译php语言的核心。extention属于轮子。sapi属于和外部交互的一个接口。application就是我们目前写的应用程序了

比喻：如果PHP是一辆车的话，php本身是车的框架，zend为发动机供给力量，ext属于车轮子，sapi属于为汽车能够运行提供的一条道路
那么优化的话：性能优异的引擎+合适的轮子+正确的跑道

1、大多数语言过程调用都是采用了栈数据结构提供的内存管理机制
    （1）函数的调用就是一个不断入栈和出栈的过程，因此栈过深就会导致函数的性能降低

2、PHP虚拟机
    （1）任何计算机的架构都提供了操作指令集，也就是说我们通过一些命令来操作计算机，
        php虚拟机也是一样，指令集存储在PHP源码的一个叫做zend文件夹下面的zend_vm_opcodes.h
        文件里
    （2）操作指令是由操作码和操作数组成的，操作码指明操作类型，操作数指明操作数本身以及操作数的地址

