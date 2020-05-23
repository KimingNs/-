<?php
//num1 = (first-1)*second  num2 = second
function pagination($first, $second)
{
    //定义一个数组用来装查询结果
    $array = array();
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "niuniu";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
    $sql = "select * from card limit " . (($first - 1) * $second) . "," . ($second);
    $conn->set_charset("utf8"); //设置编码
    $result = mysqli_query($conn, $sql);
    while ($record = mysqli_fetch_array($result)) {
        $array[] = $record;
    }
    mysqli_close();
    return $array;
}

function allpage()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "niuniu";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
    $sql = "select count(*) allnum from card";
    $result = mysqli_query($conn, $sql);
    $obj = mysqli_fetch_object($result);
    mysqli_close();
    return $obj->allnum;
}

@$page_all_num = allpage();
//  echo $page_all_num;
@$page_Size = 3;//每页显示的数据条数
@$page_Num = empty($_GET["page_Num"]) ? 1 : $_GET["page_Num"];//刷新后会抹去get的传值，所以需要预设为1.
@$page_End = ceil($page_all_num / $page_Size);//总页数 ceil返回大于或者等于指定表达式的最小整数
@$array = pagination($page_Num, $page_Size);
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>分页效果实现</title>
</head>
<body>
<table border="1" style="text-align: center">
    <tr>
        <td>id</td>
        <td>name</td>
    </tr>
    <?php
    foreach ($array as $v) {
        echo "<tr>";
        echo "<td>{$v["id"]}</td>";
        echo "<td>{$v["card"]}</td>";
        echo "</tr>";
    }
    ?>
</table>
<p>
    <a href="?page_Num=1">首页</a>

    <a href="?page_Num=<?php echo $page_Num == 1 ? 1 : ($page_Num - 1) ?>">上一页</a>
    <!--这里到达page——End就不能再自加了 所以要三目运算-->
    <a href="?page_Num=<?php echo $page_Num == $page_End ? page_End : ($page_Num + 1) ?>">下一页</a>

    <a href="?page_Num=<?php echo $page_End ?>">尾页</a>
</p>
</body>
</html>