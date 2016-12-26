<?php
/**
 * PHP 防止 E-mail 注入
防止 e-mail 注入的最好方法是对输入进行验证。
 * 在上面的代码中，我们使用了 PHP 过滤器来对输入进行验证：
FILTER_SANITIZE_EMAIL 从字符串中删除电子邮件的非法字符
FILTER_VALIDATE_EMAIL 验证电子邮件地址
 */
?>
<html>
<body>
<?php
function spamcheck($field)
{
    //filter_var() sanitizes the e-mail
    //address using FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() validates the e-mail
    //address using FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

if (isset($_REQUEST['email']))
{//if "email" is filled out, proceed

    //check if the email address is invalid
    $mailcheck = spamcheck($_REQUEST['email']);
    if ($mailcheck==FALSE)
    {
        echo "Invalid input";
    }
    else
    {//send email
        $email = $_REQUEST['email'] ;
        $subject = $_REQUEST['subject'] ;
        $message = $_REQUEST['message'] ;
        mail("someone@example.com", "Subject: $subject",
            $message, "From: $email" );
        echo "Thank you for using our mail form";
    }
}
else
{//if "email" is not filled out, display the form
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
