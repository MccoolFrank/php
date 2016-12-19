<?php
/**
 * PHP Open File - fopen()
打开文件的更好的方法是通过 fopen() 函数。
 */

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

/*
 * PHP 读取文件 - fread()
fread() 函数读取打开的文件。
fread() 的第一个参数包含待读取文件的文件名，第二个参数规定待读取的最大字节数。
 */
echo fread($myfile,filesize("webdictionary.txt"));

/*
 * PHP 读取单行文件 - fgets()
fgets() 函数用于从文件读取单行。
 */
echo "<br>";
echo fgets($myfile);
fclose($myfile);
?>



<?php
/*
 * PHP 检查 End-Of-File - feof()
feof() 函数检查是否已到达 "end-of-file" (EOF)。
feof() 对于遍历未知长度的数据很有用。
 */
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// 输出单行直到 end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>



<?php
/*
 *PHP 读取单字符 - fgetc()
fgetc() 函数用于从文件中读取单个字符。
 */
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// 输出单字符直到 end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);
?>
