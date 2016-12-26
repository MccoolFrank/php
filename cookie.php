<?php
/**
 *
 * 如何创建 cookie？
setcookie() 函数用于设置 cookie。
注释：setcookie() 函数必须位于 <html> 标签之前。
语法
setcookie(name, value, expire, path, domain);
 */
?>
<?php
setcookie("user", "wangziyue", time()+3600);
?>

<html>
<body>

</body>
</html>

<?php
    /*
     * 如何取回 Cookie 的值？
    PHP 的 $_COOKIE 变量用于取回 cookie 的值。
     */
    // Print a cookie
    echo $_COOKIE["user"];

    // A way to view all cookies
    print_r($_COOKIE);
?>
<html>
<body>

<?php
if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
    echo "Welcome guest!<br />";
?>

</body>
</html>

<?php
    //当删除 cookie 时，您应当使过期日期变更为过去的时间点。
    setcookie("user", "", time()-3600);
?>

