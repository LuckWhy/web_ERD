<?php
include_once ("mydb2.php");
include_once ("myphpfuntion.php");
//echo $_POST['id'];
//echo $_POST['quesid'];


$str="select * from pic where pic_id=".$_POST['id'];
    $pic=myquery($str,$link2);
echo $pic[0][4];
?>