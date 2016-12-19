<?php
/*
 * 基础 PHP 语法
PHP 脚本可放置于文档中的任何位置。
PHP 脚本以 <?php 开头，以 ?> 结尾：
 */
echo "hello word";
// 这是单行注释

# 这也是单行注释

/*
这是多行注释块
它横跨了
多行
*/



?>
<?php


/*
 * PHP 大小写敏感
在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。
 */
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<?php
/*
 * 不过在 PHP 中，所有变量都对大小写敏感。
在下面的例子中，只有第一条语句会显示 $color 变量的值（这是因为 $color、$COLOR 以及 $coLOR 被视作三个不同的变量）：
 */
$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
