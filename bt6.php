<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>câu 6</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Nhập số nguyên dương có 2 chữ số:</label>
        <input type="number" name="number" id="number" required>
        <br>
        <button type="submit">Tính Tổng Chữ Số</button>
    </form>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = $_POST["number"];
        if ($inputNumber >= 10 && $inputNumber <= 99) {
            $hangDV= $inputNumber % 10;
            $hangC = floor($inputNumber / 10);
            $tongCS = $hangDV + $hangC;
            echo "Số nguyên $inputNumber có tổng các chữ số là: $tongCS";
        } else {
            echo "Vui lòng nhập số nguyên dương có 2 chữ số.";
        }
     }
    ?>
</body>
</html>
