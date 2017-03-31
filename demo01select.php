<?php
header("Content-Type: text/html;charset=utf-8");
// 1. 创建和数据库的连接
// 第一个参数：连接数据的主机；第二个参数：连接数据的账号；
//第三个参数：密码；第四个参数：数据库
// 默认连接的是3306
$conn = new mysqli("localhost", "root", "", "ishop", 3306);
// 2. 定义sql语句
$sql = "select * from users";
// 3. 执行sql语句
$res = $conn->query($sql);

echo "共有".$res->num_rows."条数据被查询到<br />";

// 4. 将$res中的数据遍历转化成数组
// mysqli_fetch_array()将查询到的$res多条数据，每次取出一条数据。
while($row = mysqli_fetch_array($res)) {
    echo json_encode($row);
}

// 5. 断开和数据库的连接
$conn->close();