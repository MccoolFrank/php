<?php
/**
     * 在 PHP 中创建数组
    在 PHP 中， array() 函数用于创建数组：
    array();
    在 PHP 中，有三种数组类型：
    索引数组 - 带有数字索引的数组
    关联数组 - 带有指定键的数组
    多维数组 - 包含一个或多个数组的数组
 */
?>

<?php
    /*
     * PHP 索引数组
    有两种创建索引数组的方法：
    索引是自动分配的（索引从 0 开始）：
    $cars=array("Volvo","BMW","SAAB");
    或者也可以手动分配索引：
    $cars[0]="Volvo";
    $cars[1]="BMW";
    $cars[2]="SAAB";
     */
    $cars=array("Volvo","BMW","SAAB");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

    /*
     * 获得数组的长度 - count() 函数
count() 函数用于返回数组的长度（元素数）：
     */
    echo count($cars);

?>

<?php
/*
 * PHP 关联数组
    关联数组是使用您分配给数组的指定键的数组。
    有两种创建关联数组的方法：
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    或者：
    $age['Peter']="35";
    $age['Ben']="37";
    $age['Joe']="43";
     */
    $age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";

?>
<?php
    $age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");

    foreach($age as $x=>$x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
?>

