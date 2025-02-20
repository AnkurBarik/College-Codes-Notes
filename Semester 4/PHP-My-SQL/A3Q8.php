//Assignment 3 Q8

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action=" " method="post">
        Enter First Input: <input type="number" name="fnumber" required><br>
        Enter Second Input: <input type="number" name="snumber" required><br>
        Enter Your Choice:<select name="choice" required><br>
            <option value="" select>--Choice--</option>
            <option value="ADD">ADDITION</option>
            <option value="SUB">SUBTRACTION</option>
            <option value="MUL">MULTIPLICATION</option>
            <option value="DIV">DIVISION</option>
        </select><br>
        <input type="submit" value="Submit" name="submit"><br>
    </form>
<?php
if($_POST)
{
    $fnumber=$_POST['fnumber'];
    $snumber=$_POST['snumber'];
    $choice=$_POST['choice'];
    switch($choice)
    {
        case 'ADD':
        $res=$fnumber+$snumber;
        $msg="Addtion of $fnumber,$snumber ";
        break;
        case 'SUB':
        $res=$fnumber-$snumber;
        $msg="SUBTRACTION of $fnumber,$snumber ";
        break;
        case 'MUL':
        $res=$fnumber*$snumber;
        $msg="MULTIPLICATION of $fnumber,$snumber ";
        break;
        case 'DIV':
        $res=$fnumber/$snumber;
        $msg="DIVISION of $fnumber,$snumber ";
        break;
        default:
        echo "Please enter valid number";  
    }
    echo "$msg is <b> $res </b>";
}
?>
</body>
</html>