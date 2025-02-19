
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
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

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;}
            
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
        .table {
            margin-top: 1rem;
            padding: 1rem;
            background-color: #2d2d2d;
            border-radius: 8px;
            color: #bb86fc;
        }
        .row {
            padding: 0.5rem;
            border-bottom: 1px solid #333;
        }
        .row:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div id="cont">
        <form method="post">
            <input type="number" name="number" placeholder="Enter a number" required>
            <button type="submit">Generate Table</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
            $number = intval($_POST["number"]);
            echo "<div class='table'>";
            echo "<h3>Multiplication Table of $number</h3>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<div class='row'>$number × $i = $result</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
