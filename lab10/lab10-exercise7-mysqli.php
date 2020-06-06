// ���벿�ֶ���õ�����
<?php require_once ('config.php');?>

<!DOCTYPE html>
<html>
<body>
<h1>Database Tester (mysqli)</h1>
Genre:
<select>
    <?php
    // ���������ݿ�����ӣ�localhost,username, password, art
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    // mysqli_connect_error() ������һ������$connection)����Ĵ�������
    // mysqli_connect_errno() ������һ������$connection����Ĵ������
    // ��Mysql���ӳ���,���������Ϣ���Ƴ��ű����൱��exit(1);
    if( mysqli_connect_errno()){
        die(mysqli_connect_error());
    }

    $sql = "select * from Genres order by GenreName;"; // sql��ѯ���

    // mysqli_query($����, $��ѯ���) SELECT��ѯ����mysqli_result����
    if( $result = mysqli_query($connection, $sql)){ // �õ������

        // �ӽ����$result��ȡ��һ����Ϊ��������$row
        while($row = mysqli_fetch_assoc($result)) { //�Ӽ�����ȡԪ��
            echo '<option value="' . $row['GenreID'] . '">';
            echo $row['GenreName'];
            echo "</option>";
        }
        // mysqli_free_result($�����) �ͷŽ����
        mysqli_free_result($result);
    }

    // close the db connection
    mysqli_close($connection);

    ?>
</select>
</body>
</html>