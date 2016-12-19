<html>
<body>
<?php
/**
     * PHP - 数组的排序函数
    在本节中，我们将学习如下 PHP 数组排序函数：
    sort() - 以升序对数组排序
    rsort() - 以降序对数组排序
    asort() - 根据值，以升序对关联数组进行排序
    ksort() - 根据键，以升序对关联数组进行排序
    arsort() - 根据值，以降序对关联数组进行排序
    krsort() - 根据键，以降序对关联数组进行排序
 */
?>
对数组进行升序排序 - sort()
下面的例子按照字母升序对数组 $cars 中的元素进行排序：
<?php
    $cars=array("Volvo","BMW","SAAB");
    sort($cars);
?>

<?php
$numbers=array(3,5,1,22,11);
sort($numbers);
?>

对数组进行降序排序 - rsort()
下面的例子按照字母降序对数组 $cars 中的元素进行排序：
<?php
$cars=array("Volvo","BMW","SAAB");
rsort($cars);
?>
根据值对数组进行升序排序 - asort()
下面的例子根据值对关联数组进行升序排序：
<?php
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
asort($age);
?>

根据键对数组进行升序排序 - ksort()
下面的例子根据键对关联数组进行升序排序：
<?php
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
ksort($age);
?>
</body>
</html>