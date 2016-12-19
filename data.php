<?php
/**
     * PHP date() 函数用于对日期或时间进行格式化。
    PHP Date() 函数
    PHP Date() 函数把时间戳格式化为更易读的日期和时间。
    语法
    date(format,timestamp)
    参数	描述
    format	必需。规定时间戳的格式。
    timestamp	可选。规定时间戳。默认是当前时间和日期。
    注释：时间戳是一种字符序列，它表示具体事件发生的日期和事件。
    获得简单的日期
    date() 函数的格式参数是必需的，它们规定如何格式化日期或时间。
    下面列出了一些常用于日期的字符：
    d - 表示月里的某天（01-31）
    m - 表示月（01-12）
    Y - 表示年（四位数）
    1 - 表示周里的某天
    其他字符，比如 "/", "." 或 "-" 也可被插入字符中，以增加其他格式。
 */
?>
<?php
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l");
?>

© 2010-<?php echo date("Y")?>


<?php
/*
 * 获得简单的时间
下面是常用于时间的字符：
h - 带有首位零的 12 小时小时格式
i - 带有首位零的分钟
s - 带有首位零的秒（00 -59）
a - 小写的午前和午后（am 或 pm）
 */
echo "现在时间是 " . date("h:i:sa");
?>

<?php
/*
 * 通过 PHP mktime() 创建日期
date() 函数中可选的时间戳参数规定时间戳。如果您未规定时间戳，将使用当前日期和时间（正如上例中那样）。
mktime() 函数返回日期的 Unix 时间戳。Unix 时间戳包含 Unix 纪元（1970 年 1 月 1 日 00:00:00 GMT）与指定时间之间的秒数。
语法
mktime(hour,minute,second,month,day,year)
 */
$d=mktime(9, 12, 31, 6, 10, 2015);
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
?>

<?php
/*
 * 通过 PHP strtotime() 用字符串来创建日期
PHP strtotime() 函数用于把人类可读的字符串转换为 Unix 时间。
语法
strtotime(time,now)
 */
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
