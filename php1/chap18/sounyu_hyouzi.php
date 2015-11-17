<meta charset='UTF-8'>
<?php
$s = mysql_connect('localhost', 'yamauchi', '1234') or die('失敗です');
print '成功しました<br>';
mysql_select_db('db1');
mysql_query("insert into tb1 values('K778', 'ピーエッチピー太郎', 20)");
mysql_close($s);
