<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
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
    <?php
    require_once '017conn.php';
    $sql='select * from xs';
    $result=$mysqli->query($sql);
    $num=$result->num_rows;
    echo "<p>结果行数是{$num},<a href=\"017add.php\">添加数据</a></p>";
    if($num) {
        echo '<table>';
        echo '<tr>';
        echo '<th>学号</th>';
        echo '<th>姓名</th>';
        echo '<th>专业名</th>';
        echo '<th>性别</th>';
        echo '<th>总学分</th>';
        echo '<th>操作</th>';
        echo '</tr>';
        while($row=$result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row['学号'].'</td>';
            echo '<td>'.$row['姓名'].'</td>';
            echo '<td>'.$row['专业名'].'</td>';
            echo '<td>'.($row['性别']?'男':'女').'</td>';
            echo '<td>'.$row['总学分'].'</td>';
            echo '<td>';
            echo '<a href="017show.php?id=' .$row['学号'].'">详情 </a>';
            echo '<a href="017modify.php?id=' .$row['学号'].'">修改 </a>';
            echo '<a href="javascript:del(\''.$row['学号'].'\')">删除</a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    $result->close();
    $mysqli->close();
    ?>
    <script>
        function del(id){
            if(confirm('是否删除')){
                location.href='017del.php?id='+id;
            }
        }
    </script>
</body>
</html>