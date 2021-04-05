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
    require_once '016conn.php';
    $sql='select * from kc';
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    echo "<p>结果行数是{$num},<a href=\"016add.php\">添加数据</a></p>";
    if($num) {
        echo '<table>';
        echo '<tr>';
        echo '<th>课程号</th>';
        echo '<th>课程名</th>';
        echo '<th>开课学期</th>';
        echo '<th>学时</th>';
        echo '<th>学分</th>';
        echo '<th>操作</th>';
        echo '</tr>';
        while($row=mysqli_fetch_assoc($result)) {
            // print_r($row);
            echo '<tr>';
            echo '<td>'.$row['课程号'].'</td>';
            echo '<td>'.$row['课程名'].'</td>';
            echo '<td>'.$row['开课学期'].'</td>';
            echo '<td>'.$row['学时'].'</td>';
            echo '<td>'.$row['学分'].'</td>';
            echo '<td>';
            echo '<a href="016show.php?id=' .$row['课程号']. '">详情 </a>';
            echo '<a href="016modify.php?id=' .$row['课程号']. '">修改 </a>';
            echo '<a href="javascript:del(\''.$row['课程号'].'\')">删除</a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
    <script>
        function del(id){
            if(confirm('是否删除')){
                location.href='016del.php?id='+id;
            }
        }
    </script>
</body>
</html>