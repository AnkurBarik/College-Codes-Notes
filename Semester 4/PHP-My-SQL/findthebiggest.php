
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the biggest number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #ffffff;
        }
        #cont {
            background-color: #2d2d2d;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
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
            border: 1px solid #404040;
            border-radius: 4px;
            font-size: 1rem;
            outline: none;
            background-color: #333333;
            color: #ffffff;
        }
        input:focus {
            border-color: #6200ee;
            box-shadow: 0 0 0 2px rgba(98, 0, 238, 0.2);
        }
        input::placeholder {
            color: #888888;
        }
        button {
            background-color: #6200ee;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #7722ff;
        }
        .result {
            margin-top: 1rem;
            padding: 1rem;
            background-color: #333333;
            border-radius: 4px;
            color: #bb86fc;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="cont">
        <form action="" method="post">
            <input id="first" name="first" type="number" placeholder="Enter the first number" required>
            <input id="second" name="second" type="number" placeholder="Enter the second number" required>
            <input id="third" name="third" type="number" placeholder="Enter the third number" required>
            <button type="submit">Submit Numbers</button>
        </form>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["first"]) && isset($_POST["second"]) && isset($_POST["third"])) {
                $first = $_POST["first"];
                $second = $_POST["second"];
                $third = $_POST["third"];
                $result = max($first, $second, $third);
                echo "<div class='result'>$result is the greatest among $first, $second, $third</div>";
            }
        }
    ?>
</body>
</html>
