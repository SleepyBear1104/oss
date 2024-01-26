<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>câu 7</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="seconds">Nhập thời gian (số giây):</label>
        <input type="number" name="seconds" id="seconds" required>
        <br>
        <button type="submit">Gửi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputSeconds = $_POST["seconds"];
        $hours = floor($inputSeconds / 3600);
        $minutes = floor(($inputSeconds % 3600) / 60);
        $seconds = $inputSeconds % 60;
        echo "Thời gian là: $hours giờ, $minutes phút, $seconds giây";
    }
    ?>
</body>
</html>
