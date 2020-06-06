// 导入部分定义好的数据
<?php require_once ('config.php');?>

<!DOCTYPE html>
<html>
<body>
<h1>Database Tester (mysqli)</h1>
Genre:
<select>
    <?php
    // 创建与数据库的连接：localhost,username, password, art
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    // mysqli_connect_error() 返回上一次连接$connection)错误的错误描述
    // mysqli_connect_errno() 返回上一次连接$connection错误的错误代码
    // 若Mysql连接出错,输出错误信息，推出脚本，相当于exit(1);
    if( mysqli_connect_errno()){
        die(mysqli_connect_error());
    }

    $sql = "select * from Genres order by GenreName;"; // sql查询语句

    // mysqli_query($连接, $查询语句) SELECT查询返回mysqli_result对象
    if( $result = mysqli_query($connection, $sql)){ // 得到结果集

        // 从结果集$result中取得一行作为关联数组$row
        while($row = mysqli_fetch_assoc($result)) { //从集合中取元组
            echo '<option value="' . $row['GenreID'] . '">';
            echo $row['GenreName'];
            echo "</option>";
        }
        // mysqli_free_result($结果集) 释放结果集
        mysqli_free_result($result);
    }

    // close the db connection
    mysqli_close($connection);

    ?>
</select>
</body>
</html>