
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #141414;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #ffffff;
        }
        #cont {
            background-color: #000000;
            padding: 2rem;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.4);
            width: 100%;
            max-width: 400px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        input {
            padding: 0.8rem;
            border: 1px solid #333333;
            border-radius: 4px;
            font-size: 1rem;
            background-color: #333333;
            color: #ffffff;
            transition: all 0.2s ease;
        }
        input:focus {
            outline: none;
            border-color: #ffffff;
        }
        button {
            background-color: #E50914;
            color: #ffffff;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #F40612;
        }
        .result {
            margin-top: 1rem;
            padding: 1rem;
            background-color: #333333;
            border-radius: 4px;
            color: #ffffff;
            text-align: center;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div id="cont">
        <form method="post">
            <input type="number" name="number" placeholder="Enter a number" required>
            <button type="submit">Check Palindrome</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
            $number = $_POST["number"];
            $original = $number;
            $reverse = 0;
            $r = $number % 10;

            while ($number > 0) {
                $digit = $number % 10;
                $reverse = ($reverse * 10) + $digit;
                $number = (int)($number / 10);
            }

            echo "<div class='result'>";
            if ($original == $reverse) {
                echo "$original is a palindrome number!";
            } else {
                echo "$original is not a palindrome number.";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
