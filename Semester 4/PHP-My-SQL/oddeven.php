
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd and Even Numbers</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }
    #cont {
        text-align: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .result {
        margin-top: 20px;
        font-weight: bold;
    }
</style>
<body>
    <div id="cont">
        <form action="" method="post">
            <label for="num">Enter a number: </label>
            <input type="number" id="num" name="num" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["num"];
           $result = ($number % 2 == 0) ? "Even" : "Odd";
            echo "<div class='result'>The number $number is $result</div>";
        }
        ?>
    </div>
</body>
</html>
