<html>
<body>
<?php
/**
 * PHP 全局变量 - 超全局变量
PHP 中的许多预定义变量都是“超全局的”，这意味着它们在一个脚本的全部作用域中都可用。在函数或方法中无需执行 global $variable; 就可以访问它们。
这些超全局变量是：
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
 */
?>

<?php
    /*
     * $GLOBALS — 引用全局作用域中可用的全部变量
    $GLOBALS 这种全局变量用于在 PHP 脚本中的任意位置访问全局变量（从函数或方法中均可）。
    PHP 在名为 $GLOBALS[index] 的数组中存储了所有全局变量。变量的名字就是数组的键。
     */
    $x = 75;
    $y = 25;
    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $z;
?>

<?php
    /*
     * PHP $_SERVER
    $_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。
     */
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
/*
 * PHP $_REQUEST
PHP $_REQUEST 用于收集 HTML 表单提交的数据。
 */
    $name = $_REQUEST['fname'];
    echo $name;
?>

</body>
</html>
