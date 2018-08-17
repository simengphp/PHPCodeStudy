PHP性能优化总结，不考虑版本，当然v7+是最优

1、类的方法如果能定义为static就定义为静态方法，这样速度提升4倍

2、$row['id']要比$row[id]速度快7倍

3、注销那些不常用的变量尤其大的数组，这样能够释放内存

4、尽量避免使用__set __get __autoload

5、require_once代价比较大，引入文件不存在会报错，然后只会加载一次，这就导致了每次加载
时候都会有一个对比的过程

6、include要使用绝对路径，这样就减少了文件搜寻所消耗的性能，较少了解析系统的路径

7、如果你想知道脚本触发的时刻，可以使用$_SERVER['REQUEST_TIME']要好于time()

8、函数代替正则表达式完全相同的功能

9、str_replace比preg_replace快，strtr的效率是str_replace的4倍

10、使用switch比使用if else if 好

11、用@屏蔽错误的方法极其低效

12、数据库使用完毕之后要关闭连接，不要长连接

13、在一个函数里递增局部变量是最快的，比全局变量要快2倍，比对象属性（$object->opt++）快3倍，
比提前预定义好的变量快9-10倍

14、如果你的函数里面定义了一个变量，但是没有使用会降低性能

15、用$i+=1代替$i=$i+1




















