<?php
    for ($x=0; $x<=10; $x++) {
        echo "数字是：$x <br>";
    }
?>
PHP foreach 循环
foreach 循环只适用于数组，并用于遍历数组中的每个键/值对。
语法
foreach ($array as $value) {
code to be executed;
}
每进行一次循环迭代，当前数组元素的值就会被赋值给 $value 变量，并且数组指针会逐一地移动，直到到达最后一个数组元素。
<?php
    $colors = array("red","green","blue","yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
?>

