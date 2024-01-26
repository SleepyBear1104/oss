<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 1</title>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="so_nguyen">Nhập số nguyên:</label>
    <input type="number" name="so_nguyen" id="so_nguyen">
    <button type="submit">Tính giá trị tuyệt đối</button>
</form>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $soNguyen = $_POST["so_nguyen"]; 
        $giaTriTuyetDoi = abs($soNguyen);
        echo "Giá trị tuyệt đối của $soNguyen là: $giaTriTuyetDoi";  
 }?>
</body>
</html>
