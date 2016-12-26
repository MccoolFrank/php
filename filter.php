<?php
/**
 * 函数和过滤器
如需过滤变量，请使用下面的过滤器函数之一：
filter_var() - 通过一个指定的过滤器来过滤单一的变量
filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
filter_input - 获取一个输入变量，并对它进行过滤
filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤
 */
?>
<?php
$int=123;
if(!filter_var($int,FILTER_VALIDATE_INT))
{
    echo "Integer is not valid";
}
else
{
    echo "Integer is valid";
}
?>

<?php
$var=300;

$int_options = array(
    "options"=>array
    (
        "min_range"=>0,
        "max_range"=>256
    )
);

if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
{
    echo("Integer is not valid");
}
else
{
    echo("Integer is valid");
}
?>
