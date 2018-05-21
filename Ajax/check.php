<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/20
 * Time: 16:53
 */
//if (isset($_POST["name"]))
//    echo "<script>alert('hello!')</script>";
$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '';
$arr_name = ['peter','jack','tom'];
if (in_array(strtolower($name),$arr_name)){
    echo '<span style="color: brown">用户名已存在</span>';
}else{
    echo '<span style="color: green">用户名称可用</span>';
}

?>