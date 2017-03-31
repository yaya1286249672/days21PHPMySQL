<?php
$server_name = "localhost";// 数据库主机
$username = "root";// 账号
$password = "";// 密码
$db = "ishop";// 数据库名称
$port = 3306;// 连接端口

// 1.打开和数据库的连接
$conn = new mysqli($server_name, $username, $password, $db, $port);
// 2. 定义并执行sql语句
$sql = "update users set userpass = '12345678' where uid = 4";
$res = $conn->query($sql);//
echo "-------->".$res;

if($res === true) {
    echo "数据修改成功";
} else {
    echo "数据修改失败";
}

// 3. 关闭数据库连接
$conn->close();