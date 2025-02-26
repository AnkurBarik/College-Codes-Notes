<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #222;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Armstrong Number Checker</h1>
        <form method="post">
            <input type="number" name="number" placeholder="Enter a number">
            <button type="submit">Check</button>
        </form>
        <div id="result">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $number = $_POST['number'];
                    $sum = 0;
                    $temp = $number;
                    $digits = strlen($number);

                    while ($temp > 0) {
                        $digit = $temp % 10;
                        $sum += pow($digit, $digits);
                        $temp = floor($temp / 10);
                    }

                    if ($sum === $number) {
                        echo "$number is an Armstrong number.";
                    } else {
                        echo "$number is not an Armstrong number.";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
