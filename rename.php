<?php
$i=1;
$rasemnar->jyyylmasy = opendir($rasemnar->july);
    while (false !== ($rasem = readdir($rasemnar->jyyylmasy))){
        //$suratlar[] = "/".$rasemnar->july."/".$rasem;
        $old = /*$_SERVER['DOCUMENT_ROOT']."/".*/$rasemnar->july."/".$rasem;
        $new = /*$_SERVER['DOCUMENT_ROOT']."/".*/$rasemnar->july."/".$i.".jpg";
        print $i."\t".$old."\t".$new."<br>";
        $res = rename($old,$new);
        print (boolean)$res."<br>";
        $i++;
    }
?>