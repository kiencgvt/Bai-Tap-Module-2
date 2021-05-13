<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="result.php" method="post">
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>First operand: </td>
                <td><input type="number" step="any" name="numberOne"></td>
            </tr>
            <tr>
                <td>Operator: </td>
                <td><select name="pheptinh">
                        <option value="+" selected>Cộng</option>
                        <option value="-">Trừ</option>
                        <option value="*">Nhân</option>
                        <option value="/">Chia</option>
                    </select></td>
            </tr>
            <tr>
                <td>Second operand: </td>
                <td><input type="number" step="any" name="numberTwo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="calculate" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>