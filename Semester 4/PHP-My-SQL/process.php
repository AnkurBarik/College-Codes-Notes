<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['inputString'];
    $charArray = str_split($inputString);
    echo 'Original array of characters: <pre>';
    print_r($charArray);
    echo '</pre>';
    sort($charArray);
    echo 'Sorted array of characters: <pre>';
    print_r($charArray);
    echo '</pre>';
}
?>