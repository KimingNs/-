<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$yusuan = $_POST['yusuan'];
$jieguo = 0;
switch ($yusuan) {
    case '+':
        $jieguo = $num1 + $num2;
        break;
    case '-':
        $jieguo = $num1 - $num2;
        break;
    case '*':
        $jieguo = $num1 * $num2;
        break;
    case '/':
        $jieguo = $num1 / $num2;
        break;
}
?>
<form action="" method="post">
    <table align="center" border="1">
        <tr>
            <td><input type="text" name="num1" value="<?php echo $num1; ?>"/></td>
            <td>
                <select name="yusuan">
                    <option value="+" <?php if ($yusuan == "+") {
                        echo 'selected="select"';
                    } ?>">+</option>
                    <option value="-" <?php if ($yusuan == "-") {
                        echo 'selected="select"';
                    } ?>">-</option>
                    <option value="*" <?php if ($yusuan == "*") {
                        echo 'selected="select"';
                    } ?>">*</option>
                    <option value="/" <?php if ($yusuan == "/") {
                        echo 'selected="select"';
                    } ?>">/</option>
                </select>
            </td>
            <td><input type="text" name="num2" value="<?php echo $num2; ?>"/></td>
            <td><input type="submit" value="="/></td>
            <td><input type="text" name="jieguo" value="<?php echo $jieguo; ?>"/></td>
        </tr>
    </table>
</form>