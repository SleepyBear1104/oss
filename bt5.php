<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 5</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="so_nguyen_a">Nhập số nguyên a:</label>
    <input type="number" name="so_nguyen_a" id="so_nguyen_a">
    <br>
    <label for="so_nguyen_b">Nhập số nguyên b:</label>
    <input type="number" name="so_nguyen_b" id="so_nguyen_b">
    <br>
    <label for="so_nguyen_b">Nhập số nguyên c:</label>
    <input type="number" name="so_nguyen_c" id="so_nguyen_c">
    <br>
    <button type="submit">gửi</button>
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $soNguyena = $_POST["so_nguyen_a"]; 
    $soNguyenb = $_POST["so_nguyen_b"];
    $soNguyenc =$_POST["so_nguyen_c"];  
    $maxValue = max($soNguyena, $soNguyenb, $soNguyenc); 
    echo "Giá trị lớn nhất là: $maxValue";
 }    
?>
</body>
</html>
