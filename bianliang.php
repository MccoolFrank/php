<?php
/*
 * PHP 变量规则：
变量以 $ 符号开头，其后是变量的名称
变量名称必须以字母或下划线开头
变量名称不能以数字开头
变量名称只能包含字母数字字符和下划线（A-z、0-9 以及 _）
变量名称对大小写敏感（$y 与 $Y 是两个不同的变量）
注释：PHP 变量名称对大小写敏感！
 */
$txt="Hello world!";
$x=5;
$y=10.5;
/*
 * PHP 是一门类型松散的语言
在上面的例子中，请注意我们不必告知 PHP 变量的数据类型。
PHP 根据它的值，自动把变量转换为正确的数据类型。
在诸如 C 和 C++ 以及 Java 之类的语言中，程序员必须在使用变量之前声明它的名称和类型。
 */
?>

<?php
/*
 * PHP 变量作用域
在 PHP 中，可以在脚本的任意位置对变量进行声明。
变量的作用域指的是变量能够被引用/使用的那部分脚本。
PHP 有三种不同的变量作用域：
local（局部）
global（全局）
static（静态）
Local 和 Global 作用域
函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
 */

$x=5; // 全局作用
function myTest() {
    $y=10; // 局部作用域
    echo "<p>测试函数内部的变量：</p>";
   // echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
}

myTest();
echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";
?>

<?php
$x=5;
$y=10;
function myTest1() {
    global $x,$y;
    $y=$x+$y;
}
myTest1();
echo $y; // 输出 15
?>

<?php
/*
 * PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。
 */
    $x1=5;
    $y1=10;

function myTest2() {
    $GLOBALS['y1']=$GLOBALS['x1']+$GLOBALS['y1'];
}

myTest2();
echo $y1; // 输出 15

?>

<?php
/*
 * PHP static 关键词
通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。
要完成这一点，请在您首次声明变量时使用 static 关键词：
 */
function myTest3() {
    static $x2=0;
    echo $x2;
    $x2++;
}

myTest3();
myTest3();
myTest3();
?>
