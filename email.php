<?php
/**
 * PHP 允许您从脚本直接发送电子邮件。
PHP mail() 函数
PHP mail() 函数用于从脚本中发送电子邮件。
语法
mail(to,subject,message,headers,parameters)
参数	描述
to	必需。规定 email 接收者。
subject	必需。规定 email 的主题。注释：该参数不能包含任何新行字符。
message	必需。定义要发送的消息。应使用 LF (\n) 来分隔各行。
headers 可选。规定附加的标题，比如 From、Cc 以及 Bcc。应当使用 CRLF (\r\n) 分隔附加的标题。
parameters	可选。对邮件发送程序规定额外的参数。
 */
?>
<?php

$to = "someone@example.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "someonelse@example.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>

<html>
<body>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
{
    //send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail( "someone@example.com", "Subject: $subject",
        $message, "From: $email" );
    echo "Thank you for using our mail form";
}
else
//if "email" is not filled out, display the form
{
    echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
}
?>

</body>
</html>
