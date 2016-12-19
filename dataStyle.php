<?php
//字符串、整数、浮点数、逻辑、数组、对象、NULL。

?>

<?php
/*
 * PHP 字符串
字符串是字符序列，比如 "Hello world!"。
字符串可以是引号内的任何文本。您可以使用单引号或双引号：
实例
 */
$x = "Hello world!";
echo $x;
echo "<br>";
$x = 'Hello world!';
echo $x;
?>

<?php
    /*
         * PHP 整数
    整数是没有小数的数字。
    整数规则：
    整数必须有至少一个数字（0-9）
    整数不能包含逗号或空格
    整数不能有小数点
    整数正负均可
    可以用三种格式规定整数：十进制、十六进制（前缀是 0x）或八进制（前缀是 0）
     */
    //PHP var_dump() 会返回变量的数据类型和值：
    $x = 5985;
    var_dump($x);
    echo "<br>";
    $x = -345; // 负数
    var_dump($x);
    echo "<br>";
    $x = 0x8C; // 十六进制数
    var_dump($x);
    echo "<br>";
    $x = 047; // 八进制数
    var_dump($x);
?>

<?php
    /*
     * 浮点数是有小数点或指数形式的数字。
在下面的例子中，我们将测试不同的数字。PHP var_dump() 会返回变量的数据类型和值：
     */
    $x = 10.365;
    var_dump($x);
    echo "<br>";
    $x = 2.4e3;
    var_dump($x);
    echo "<br>";
    $x = 8E-5;
    var_dump($x);
?>


<?php
    /*
     *PHP 数组
数组在一个变量中存储多个值。
在下面的例子中，我们将测试不同的数组。PHP var_dump() 会返回变量的数据类型和值：
     */
    $cars=array("Volvo","BMW","SAAB");
    var_dump($cars);
?>

<?php
    /*
     * PHP 对象
对象是存储数据和有关如何处理数据的信息的数据类型。
在 PHP 中，必须明确地声明对象。
首先我们必须声明对象的类。对此，我们使用 class 关键词。类是包含属性和方法的结构。
然后我们在对象类中定义数据类型，然后在该类的实例中使用此数据类型：
实例
     */
    class Car
    {
        var $color;
        function Car($color="green") {
            $this->color = $color;
        }
        function what_color() {
            return $this->color;
        }
    }
?>


<?php
    /*
     * PHP NULL 值
    特殊的 NULL 值表示变量无值。NULL 是数据类型 NULL 唯一可能的值。
    NULL 值标示变量是否为空。也用于区分空字符串与空值数据库。
    可以通过把值设置为 NULL，将变量清空
     */
    $x="Hello world!";
    $x=null;
    var_dump($x);
?>

