<?php require_once('config.php');
/*
 Displays the list of artist links on the left-side of page
*/
function outputArtists()
{
    try {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // 搜索表artists所有元组，依据lastname排序，记录1-30行
        $sql = "select * from Artists order by LastName limit 0,30";
        $result = $pdo->query($sql);
        while ($row = $result->fetch()) {
            # $_SERVER['SCRIPT_NAME'] 返回当前脚本的路径
            # 添加指向每个作家页面的链接：href= $当前路径 + ’?id=’ + $查询结果作者id;
            echo '<a href="' . $_SERVER["SCRIPT_NAME"] . '?id=' . $row['ArtistID'] . '" class="';

            # isset（$var）函数 检测变量是否设置
            # PHP中，预定义的 $_GET 变量用于收集来自 method="get" 的表单中的值
            # 由url中？之后的id改变class
            // id 已经设置且= 正在插入的链接作者的id，class为active
            if (isset($_GET['id']) && $_GET['id'] == $row['ArtistID']) echo 'active ';
            echo 'item">';
            echo $row['LastName'] . '</a>';
        }
        $pdo = null;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

/*
 Displays the list of paintings for the artist id specified in the id query string
*/
function outputPaintings()
{
    try {
        // 页面id已设置
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // 查询表 paintings 中，id = 页面 url 中所指 id ，的所有元组
            $sql = 'select * from Paintings where ArtistId=' . $_GET['id'];
            $result = $pdo->query($sql);

            // 对改作者id下所有图片逐行打印
            while ($row = $result->fetch()) {
                outputSinglePainting($row);
            }
            $pdo = null;
        }
    }catch (PDOException $e) {
        die( $e->getMessage() );
    }
}

/*
 Displays a single painting
*/
function outputSinglePainting($row)
{
    echo '<div class="item">';
    echo '<div class="image">';
    echo '<img src="images/art/works/square-medium/' .$row['ImageFileName'] .'.jpg">';
    echo '</div>';
    echo '<div class="content">';
    echo '<h4 class="header">';
    echo $row['Title'];
    echo '</h4>';
    echo '<p class="description">';
    echo $row['Excerpt'];
    echo '</p>';
    echo '</div>'; // end class=content
    echo '</div>'; // end class=item
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 14</title>
    <link href="semantic/semantic.css" rel="stylesheet">
</head>
<body>
<main class="ui container">
    <div class="ui secondary segment">
        <h1>User Input</h1>
    </div>
    <div class="ui segment">
        <div class="ui grid">
            <div class="four wide column">
                <div class="ui link list">
                    <?php outputArtists(); ?>
                </div>
            </div>
            <div class="twelve wide column">
                <div class="ui items">
                    <?php outputPaintings(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>