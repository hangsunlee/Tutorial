<?php

print_r($_SERVER['DOCUMENT_ROOT']);
print_r($_FILES['upload']);
$maxsize=$_POST['maxsize'];
echo $maxsize;
$file_dir=$_SERVER['DOCUMENT_ROOT']."\\testupload\\";//\로 마무리하면 문자열을 제대로 닫지 않은것과 같기때문에 오류  발생 이스케이프\문자사용한다.
echo $file_dir;
$file_path=$file_dir.md5(microtime()).$_FILES['upload']['name'];
echo $file_path;
if($_FILES["upload"]["size"]>$maxsize)
{
    echo "<script>alert('업로드실패')</script>";
    echo "<script>history.back();</script>";
}
else{
move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path);
}
?>