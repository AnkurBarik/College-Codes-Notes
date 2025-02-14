
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Swapper</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #ffffff;
        }
        #cont {
            background-color: #1e1e1e;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
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
            border: 1px solid #333;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #2d2d2d;
            color: #ffffff;
            transition: all 0.3s ease;
        }
        input:focus {
            border-color: #7c4dff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(124, 77, 255, 0.2);
        }
        button {
            background-color: #7c4dff;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #6c3aff;
            transform: translateY(-1px);
        }
        .result {
            margin-top: 1rem;
            padding: 1rem;
            background-color: #2d2d2d;
            border-radius: 8px;
            color: #bb86fc;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="cont">
        <form action="" method="post">
            <input name="num1" type="number" placeholder="Enter first number" required>
            <input name="num2" type="number" placeholder="Enter second number" required>
            <button type="submit">Swap Numbers</button>
        </form>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["num1"]) && isset($_POST["num2"])) {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                echo "<div class='result'>Before swapping: First Number = $num1, Second Number = $num2</div>";

                // Swapping logic
                $temp = $num1;
                $num1 = $num2;
                $num2 = $temp;

                echo "<div class='result'>After swapping: First Number = $num1, Second Number = $num2</div>";
            }
        }
    ?>
</body>
</html>
