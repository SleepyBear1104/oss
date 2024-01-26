<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>câu 8</title>
</head>
<body>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="N">Nhập số nguyên dương N:</label>
        <input type="number" name="N" id="N" required>
        <br>
        <button type="submit">Gửi</button>
    </form>

    <?php
    function thuattoan($N) {
        $result = array();
        while ($N != 1) {
            $result[] = $N;
            if ($N % 2 == 0) {
                $N = $N / 2;
            } else {
                $N = $N * 3 + 1;
            }
        }
        $result[] = 1;
        return $result;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = $_POST["N"];
        if (1 <= $N && $N <= 10**6) {
            $output_values = thuattoan($N);

            echo "<p>Các giá trị của N : " . implode(" ", $output_values) . "</p>";
        } else {
            echo "<p>Giá trị N không hợp lệ</p>";
        }
    }
    ?>

</body>
</html>
