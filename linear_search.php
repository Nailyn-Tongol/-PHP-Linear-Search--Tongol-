<?php
// linear_search.php

function linearSearch($array, $target) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $target) {
            return $i;
        }
    }
    return -1;
}

$data = array(10, 25, 3, 8, 15, 42, 7, 19, 30, 50);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Linear Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px;
        }
        .container {
            width: 400px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.15);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #444;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #4f46e5;
            color: white;
            font-size: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background: #4338ca;
        }
        .result {
            margin-top: 15px;
            padding: 12px;
            border-radius: 8px;
            background: #eef2ff;
            color: #333;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="container">
    <h2>Linear Search</h2>

    <form method="POST">
        <label>Enter value to search:</label>
        <input type="text" name="target" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $target = $_POST["target"];
        $result = linearSearch($data, $target);

        echo "<div class='result'>";
        if ($result != -1) {
            echo "$target found at index $result.";
        } else {
            echo "$target not found.";
        }
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
