<?php
/**
开始 PHP Session
在您把用户信息存储到 PHP session 中之前，首先必须启动会话。
注释：session_start() 函数必须位于 <html> 标签之前：
 */
?>
<?php session_start();
// store session data
$_SESSION['views']=1;
?>

<html>
<body>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>
</body>
</html>

<?php
/*
在下面的例子中，我们创建了一个简单的 page-view 计数器。
isset() 函数检测是否已设置 "views" 变量。如果已设置 "views" 变量，
我们累加计数器。如果 "views" 不存在，则我们创建 "views" 变量，并把它设置为 1：
 */
?>

<?php
session_start();

if(isset($_SESSION['views']))
    $_SESSION['views']=$_SESSION['views']+1;

else
    $_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>

<html>
<body>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>
</body>
</html>

<?php
    /*
     * 终结 Session
如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。
     */
?>
<?php
unset($_SESSION['views']);
?>
<?php
session_destroy();
?>
