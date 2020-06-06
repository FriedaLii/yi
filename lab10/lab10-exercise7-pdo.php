// 导入部分定义好的数据
<?php require_once ('config.php'); ?>

<!DOCTYPE html>
<html>
<body>
<h1>Database Tester (PDO)</h1>
<?php
try{
    // 建立连接: 通过dsn(mysql:dbname=art;charset=utf8mb4;), username, password 新建pdo对象
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    // 设置出现错误时处理模式 PDO::ERRMODE_EXCEPTION 抛出异常
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "select * from Artists order by LastName;";//查询语句

    // PDO::query($查询语句) 成功->返回PDOStatement对象; 失败->FALSE
    $result = $pdo->query($sql);// 查询结果集

    // PDOStatement::fetch 从结果集$result中获取下一行
    while($row = $result->fetch()){
        echo $row['ArtistID'] . "-" . $row['LastName'] . "<br/>";
    }
    //释放内存,断开连接
    $pdo = null;
}catch (PDOException $e){
    die( $e-> getMessage());

}

?>
</body>
</html>