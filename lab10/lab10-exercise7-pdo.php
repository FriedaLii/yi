// ���벿�ֶ���õ�����
<?php require_once ('config.php'); ?>

<!DOCTYPE html>
<html>
<body>
<h1>Database Tester (PDO)</h1>
<?php
try{
    // ��������: ͨ��dsn(mysql:dbname=art;charset=utf8mb4;), username, password �½�pdo����
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    // ���ó��ִ���ʱ����ģʽ PDO::ERRMODE_EXCEPTION �׳��쳣
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "select * from Artists order by LastName;";//��ѯ���

    // PDO::query($��ѯ���) �ɹ�->����PDOStatement����; ʧ��->FALSE
    $result = $pdo->query($sql);// ��ѯ�����

    // PDOStatement::fetch �ӽ����$result�л�ȡ��һ��
    while($row = $result->fetch()){
        echo $row['ArtistID'] . "-" . $row['LastName'] . "<br/>";
    }
    //�ͷ��ڴ�,�Ͽ�����
    $pdo = null;
}catch (PDOException $e){
    die( $e-> getMessage());

}

?>
</body>
</html>