PHP 函数参数
可以通过参数向函数传递信息。参数类似变量。
参数被定义在函数名之后，括号内部。您可以添加任意多参数，只要用逗号隔开即可。
下面的例子中的函数有一个参数（$fname）。当调用 familyName() 函数时，我们同时要传递一个名字（例如 Bill），这样会输出不同的名字，但是姓氏相同：
<?php
    function familyName($fname) {
        echo "$fname Zhang<br>";
    }

    familyName("Li");
    familyName("Hong");
    familyName("Tao");
    familyName("Xiao Mei");
    familyName("Jian");
?>

<?php
function familyName2($fname,$year) {
    echo "$fname Zhang. Born in $year <br>";
}

familyName2("Li","1975");
familyName2("Hong","1978");
familyName2("Tao","1983");
?>



<?php
/*
 * PHP 默认参数值
下面的例子展示了如何使用默认参数。如果我们调用没有参数的 setHeight() 函数，它的参数会取默认值：
     */
    function setHeight($minheight=50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // 将使用默认值 50
    setHeight(135);
    setHeight(80);
?>


<?php
    /*
     * PHP 函数 - 返回值
如需使函数返回值，请使用 return 语句：
     */
    function sum($x,$y) {
        $z=$x+$y;
        return $z;
    }

    echo "5 + 10 = " . sum(5,10) . "<br>";
    echo "7 + 13 = " . sum(7,13) . "<br>";
    echo "2 + 4 = " . sum(2,4);
?>