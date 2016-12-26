<?php
/**
 * PHP 5 提供了一种新的面向对象的错误处理方法。
异常处理用于在指定的错误（异常）情况发生时改变脚本的正常流程。这种情况称为异常。
当异常被触发时，通常会发生：
当前代码状态被保存
代码执行被切换到预定义的异常处理器函数
根据情况，处理器也许会从保存的代码状态重新开始执行代码，终止脚本执行，或从代码中另外的位置继续执行脚本
我们将展示不同的错误处理方法：
异常的基本使用
创建自定义的异常处理器
多个异常
重新抛出异常
设置顶层异常处理器
 */
?>
<?php
//创建可抛出一个异常的函数
function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
//在 "try" 代码块中触发异常
try
{
    checkNum(2);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
}
//捕获异常
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}
?>
<?php
/*
 * 创建一个自定义的 Exception 类
创建自定义的异常处理程序非常简单。我们简单地创建了一个专门的类，
当 PHP 中发生异常时，可调用其函数。该类必须是 exception 类的一个扩展。
这个自定义的 exception 类继承了 PHP 的 exception 类的所有属性，您可向其添加自定义的函数。
 */
?>
<?php
class myException extends Exception {
    public function errorMessage(){
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;

    }
}
$email='someone@example....com';
try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
    {
        throw new myException($email);
    }
}
catch(myException $e)
{
    echo $e->errorMessage();
}
?>
<?php
//抛出多个异常
class customException extends Exception
{
    public function errorMessage()
    {
//error message
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try
{
    //check if
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
    {
        //throw exception if email is not valid
        throw new customException($email);
    }
    //check for "example" in mail address
    if(strpos($email, "example") !== FALSE)
    {
        throw new Exception("$email is an example e-mail");
    }
}

catch (customException $e)
{
    echo $e->errorMessage();
}

catch(Exception $e)
{
    echo $e->getMessage();
}
?>


