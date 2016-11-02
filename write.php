<?php
require_once 'inc/dbcon.php';
$title=$_POST['title'];
$content=$_POST['content'];
$name=$_POST['name'];
$date=date("y.m.d");
$count=1;
$file_dir='c:\xampp\htdocs\upload\\';
$file_path=$file_dir.md5($date. microtime()).$_FILES['uploadfile']["name"];
//print_r(md5($date).$_FILES['uploadfile']["name"]);
//print_r($_FILES['uploadfile']["tmp_name"]);
move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path);
$img_dir="images/";
$img_path=$img_dir.$_FILES['uploadfile']['name'];
$sql="insert into board (name,title,date,count,content,upload) values (:name,:title,:date,:count,:content,:upload)";
$stmh=$pdo->prepare($sql);
$stmh->bindValue(':name',$name);
$stmh->bindValue(':title',$title);
$stmh->bindValue(':date',$date);
$stmh->bindValue(':content',$content);
$stmh->bindValue(':count',$count);
$stmh->bindValue(':upload',$img_path);
$stmh->execute();
?>



