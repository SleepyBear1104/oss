<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>câu 9</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="N">Nhập số nguyên N:</label>
        <input type="number" name="N" id="N" required>
        <br>
        <label for="givenNumbers">Nhập N-1 số nguyên (cách nhau bằng dấu cách):</label>
        <input type="text" name="Number2" id="Number2" required>
        <br>
        <button type="submit">Tìm Số Còn Thiếu</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = intval($_POST["N"]);
        $Number2 = array_map('intval', explode(' ', $_POST["Number2"]));
        $totalSum = ($N * ($N + 1)) / 2;
        $givenSum = array_sum($Number2);
        $missingNumber = $totalSum - $givenSum;
        echo "<p>Số còn thiếu là: $missingNumber</p>";
    }
    ?>
</body>
</html>
