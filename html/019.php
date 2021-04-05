<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport">
	<title>Document</title>
	<style type="text/css">
    table,td,th{
        border: 1px solid;
    }
    table {
        border-collapse: collapse;
    }
    td,th{
        padding: 5px;
        text-align: center;
    }
	</style>
</head>
<body>
	<p><a href="019add.php">tianjia</a></p>
	<?php
	require_once '019conn.php';
	$sql='select count(*) from account';
	$result=$pdo->query($sql);
	$num=$result->fetchColumn();
	// echo "<p>共有{$num}条数据：</p>";
	$sql='select id,username,email from account';
	$result=$pdo->query($sql);
	echo '<table>';
	echo '<tr>';
	echo '<th>id</th>';
	echo '<th>username</th>';
	echo '<th>password</th>';
	echo '<th>email</th>';
	echo '<th>caozuo</th>';
	echo '</tr>';
	while($row=$result->fetch(PDO::FETCH_ASSOC)) {
		echo '<tr>';
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['username'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['id'].'</td>';
    echo '<td>';
    echo '<a href="019show.php?id='.$row['id'].'">show|</a>';
    echo '<a href="019modify.php?id='.$row['id'].'">modify|</a>';
    echo '<a href="019del.php?id='.$row['id'].'">delete</a>';
    echo '</td>';
    echo '</tr>';
	}
	echo '</table>';
	?>
</body>
</html>