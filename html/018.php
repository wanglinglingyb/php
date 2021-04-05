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
  require_once '018conn.php';
  $sql='select * from kc';
  $stmt=$mysqli->prepare($sql);
  $stmt->execute();
  $stmt->store_result();
  $num=$stmt->num_rows;
  echo "<p>结果行数是{$num},<a href=\"018add.php\">添加数据</a></p>";
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
	  	$stmt->bind_result($kch,$kcm,$xq,$xs,$xf);
      while($stmt->fetch()){
 						echo '<tr>';
            echo "<td>$kch</td>";
            echo "<td>$kcm</td>";
            echo "<td>$xq</td>";
            echo "<td>$xs</td>";
            echo "<td>$xf</td>";
            echo '<td>';
            echo "<a href=\"018show.php?id=$kch\">详情  </a>";
            echo "<a href=\"018modify.php?id=$kch\">修改  </a>";
            echo "<a href=\"javascript:del('$kch')\">删除</a>";
            echo '</td>';
            echo '</tr>';
      }
      echo '</table>';
  }
  $stmt->free_result();
  $stmt->close();
  $mysqli->close();
  ?>
  <script>
  	function del(id){
  		if(confirm('是否删除')){
  			location.href='018del.php?id='+id;
  		}
  	}
  </script>
</body>
</html>