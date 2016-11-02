<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'inc/dbcon.php';
session_start();
$id=trim($_POST['id']);
$password=trim($_POST['password']);
//print $id;
//print $password;
$sql="select * from member where id=:id and password=:password";
$stmh=$pdo->prepare($sql);
$stmh->bindValue(":id",$id);
$stmh->bindValue(":password",$password);
$stmh->execute();
$result=$stmh->fetch(PDO::FETCH_ASSOC);
if($stmh->rowCount()==0)
{   
    echo "<script>alert('아이디와 비밀번호를확인하세요');history.back();</script>";
 
//   echo "<script>;</script>";
} 
else{
    $_SESSION['id']=$id;
    $_SESSION['name']=$result['name'];
    echo "<script>location.href='index.php'</script>";     
}
// header("Location: index.php");

?>
    